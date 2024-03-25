<?php

    /**
     * @param array $errors
     * @param string $field
     * @return array
     */
    function addMessageIfValueIsEmpty(array $errors, string $field): array
    {
    if (empty($_POST[$field])) {
        $errors[$field][] = sprintf('Le champ "%s" doit être renseigné.', $field);
    }

    return $errors;
    }

    /**
     * @param array $errors
     * @param string $field
     * @param string $value
     * @return array
     */
    function displayErrors(array $errors, string $field): void
    {

        if (isset($errors[$field])) {
            foreach ($errors[$field] as $error) {
                echo '<p class="error">' . $error . '</p>';
            }
        }
    }


    /**
     * @param string $field
     * @return string
     */
    function displayValue(string $field): string
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST) || !isset($_POST[$field])) {
            return '';
        }

        return $_POST[$field];
    }

     /**
     * @param array $errors
     */
    function clearFormFields():void
    {
        if(empty($errors))
        {
            foreach ($_POST as $field => $value)
            {
                $_POST[$field] = '';
            }
        }
    }
