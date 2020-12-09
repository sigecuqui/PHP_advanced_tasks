<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\DeleteForm;
use Core\Views\Form;
use Core\Views\Link;
use Core\Views\Table;

class ListController extends AuthController
{
    protected $form;
    protected $table;
    protected $page;
    protected $link;

    public function __construct()
    {
        parent:: __construct();

        $this->page = new BasePage([
            'title' => 'Edit list'
        ]);

    }

    public function editList()
    {
        if (Form::action()) {
            $this->form = new DeleteForm();

            if ($this->form->validate()) {
                $clean_inputs = $this->form->values();
                App::$db->deleteRow('items', $clean_inputs['id']);
            }
        }

        $rows = App::$db->getRowsWhere('items');

        foreach ($rows as $id => $row) {
            $this->link = new Link([
                'link' => "/edit?id={$id}",
                'text' => 'Edit'
            ]);

            $rows[$id]['link'] = $this->link->render();

            $this->form = new DeleteForm($id);
            $rows[$id]['delete'] = $this->form->render();
        }

        $this->table = new Table([
            'headers' => [
                'Item',
                'Price',
                'Image url',
                'Owner',
            ],
            'rows' => $rows
        ]);

        $this->page->setContent($this->table->render());
        print $this->page->render();
    }

}