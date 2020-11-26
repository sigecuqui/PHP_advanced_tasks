<?php

// //////////////////////////////
// [1] FORM VALIDATORS
// //////////////////////////////

/**
 * Check if login is successful
 *
 * @param array $filtered_input
 * @param array $form
 * @return bool
 */
function validate_login(array $filtered_input, array &$form): bool
{
    $fileDB = new FileDB(DB_FILE);
    $fileDB->load();

    if ($fileDB->getRowWhere('users', [
        'email' => $filtered_input['email'],
        'password' => $filtered_input['password']
    ])) {
        return true;
    }

    $form['error'] = 'Suvesti neteisingi duomenys';

    return false;
}

// //////////////////////////////
// [2] FIELD VALIDATORS
// //////////////////////////////

/**
 * Check if email is available for registration, i.e. if it is not already taken
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{
    $fileDB = new FileDB(DB_FILE);
    $fileDB->load();

    if ($fileDB->getRowWhere('users', ['email' => $field_value])) {
        $field['error'] = 'Email is already taken';

        return false;
    }

    return true;
}