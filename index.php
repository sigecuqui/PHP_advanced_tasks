<?php
function get_subject($subject)
{
    $selected_subject = '';
    switch ($subject) {
        case 1:
        {
            $selected_subject = 'Skundas';
            break;
        }
        case 2:
        {
            $selected_subject = 'Pasiūlymas';
            break;
        }
    }

    return $selected_subject;
}

function get_department($department)
{
    $selected_department = '';
    switch ($department) {
        case 'sales':
        {
            $selected_department = 'Pardavimų Skyrius';
            break;
        }
        case 'management':
        {
            $selected_department = 'Administracija';
            break;
        }
        case 'support':
        {
            $selected_department = 'Klientų aptarnavimo skyrius';
            break;
        }
    }
    return $selected_department;
}

$user_data = [];
$show_form = true;

if (!empty($_POST)) {
    $user_data['name'] = 'Vardas: ' . ($_POST['name']);
    $user_data['email'] = 'El. pašto adresas: ' . $_POST['email'];
    $user_data['phone'] = 'Telefono numeris: ' . $_POST['phone'];
    $user_data['help'] = 'Skirta: ' . get_department($_POST['help']);
    $user_data['subject'] = 'Tema: ' . get_subject($_POST['subject']);
    $user_data['message'] = 'Žinutė: ' . $_POST['message'];
    $show_form = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Service</title>
    <style>

    </style>
</head>
<body>
<?php if ($show_form): ?>
    <main id="block">
        <header class="bg">
            <div class="bg-overlay">
                <h1>parašykite mums žinutę</h1>
            </div>
        </header>
        <section class="form-block">
            <form method="post">
                <div class="name-input">
                    <input type="text" placeholder="Jūsų vardas" name="name" required>
                </div>
                <div class="email-phone">
                    <input type="email" placeholder="El. Paštas" email.com name="email" required>
                    <input type="tel" placeholder="Telefono numeris" name="phone" pattern="[0-9]{3}[0-9]{2}[0-9]{4}"
                    >
                </div>
                <div class="help-radio">
                    <h4>Noriu susisiekti su:</h4>
                    <div class="radio-center">
                        <input type="radio" name="help" value="sales" id="sales" required>
                        <label for="sales">Pardavimų skyriumi</label>
                    </div>
                    <div class="radio-center">
                        <input type="radio" name="help" value="management" id="management">
                        <label for="management">Administracija</label>
                    </div>
                    <div class="radio-center">
                        <input type="radio" name="help" value="support" id="support">
                        <label for="support">Klientų aptarnavimo skyriumi</label>
                    </div>
                </div>
                <select name="subject">
                    <option value="select">pasirinkite temą</option>
                    <option value="1">Skundas</option>
                    <option value="2">Pasiūlymas</option>
                </select>
                <div>
                    <textarea name="message" placeholder="Jūsų žinutė.." cols="20" rows="3"></textarea>
                </div>
                <div class="btn">
                    <button type="submit">Siųsti</button>
                </div>
            </form>
        </section>
    </main>
<?php else: ?>
    <div class="message-block">
        <h3>Dėkojame už jūsų žinutę, <?php print $_POST['name']; ?></h3>
        <div class="message-info">
            Jūsų pateikta informacija:
            <?php foreach ($user_data as $user_info): ?>
                <p><?php print $user_info; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
</body>

</html>