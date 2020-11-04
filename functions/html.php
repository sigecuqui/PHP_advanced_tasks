<?php
function html_attr(array $attr): string{
    $string = '';
    foreach ($attr as $name => $value) {
        $string .= "$name=\"$value\"";
    }
    return $string;
}

function input_attr(string $field_name, array $field): string{
    $attributes = [
            'name' => $field_name,
            'type' => $field['type'],
            'value' => $field['value'] ?? '',
        ] + ($field['extra']['attr'] ?? []);

    return html_attr($attributes);
}

function button_attr(string $button_id, array $button): string{
    $attributes = [
            'name' => 'action',
            'type' => $button['type'] ?? 'submit',
            'value' => $button_id,
        ] + ($button['extra']['attr'] ?? []);

    return html_attr($attributes);
}