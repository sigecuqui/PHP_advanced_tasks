<?php

function get_clean_input(array $form): ?array {
    $parameters = [];

    foreach ($form['fields'] as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);
}

function validate_form(array &$form, array $form_values): bool {
    $is_valid = true;

    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validators'] ?? [] as $function_name) {
            $field_is_valid = $function_name($form_values[$field_id], $field);

            if (!$field_is_valid) {
                $is_valid = false;
                break;
            }
        }
    }

    return $is_valid;
}
