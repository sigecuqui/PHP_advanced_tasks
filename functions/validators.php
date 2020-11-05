<?php
function validate_field_not_empty(string $field_value, array &$field): bool
{
    if ($field_value === '') {
        $field['error'] = 'Laukelis turi būti užpildytas';
        return false;
    }

    return true;
}
