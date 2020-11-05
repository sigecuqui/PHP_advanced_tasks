<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    <style>
       div {
           display: flex;
           flex-direction: column;
           margin: 20px;
       }

       form {
           display: flex;
           flex-direction: column;
           width: 300px;
       }
    </style>
</head>
<body>
<main>
    <form method="post">
        <input type="text" name="vardas" placeholder="Jūsų vardas" required>
        <input type="email" name="email" placeholder="El. paštas" required>
        <input type="tel" id="phone" name="phone" placeholder="Telefono numeris">
        <div>
            NORIU SUSISIEKTI SU:
        <input type="radio" name="choose" required><p>Pardavimų skyriumi</p>
        <input type="radio" name="choose"><p>Administracija</p>
        <input type="radio" name="choose"><p>Klientų aptarnavimo skyriumi</p>
        </div>
        <select id="options" name="options">
            <option value="choose" label="*PASIRINKITE TEMĄ*" disabled></option>
            <option value="skundas">SKUNDAS</option>
            <option value="pasiulymas">PASIŪLYMAS</option>
            <option value="info">BENDRA INFORMACIJA</option>
        </select>
        <textarea name="message" id="message" rows="5"></textarea>
        <input type="submit" name="name" value="Siųsti">
    </form>
</main>
</body>
</html>