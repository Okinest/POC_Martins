<?php

    $interests = [];
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST))
    {
        $errors = addMessageIfValueIsEmpty($errors, 'last-name');
        $errors = addMessageIfValueIsEmpty($errors, 'first-name');
        $errors = addMessageIfValueIsEmpty($errors, 'profession');

        // header('Location: http://51.91.108.32/registrations');
        $name = htmlentities($_POST['last-name']);
        $firstname = htmlentities($_POST['first-name']);
        $email = htmlentities($_POST(['email']));
        $profession = htmlentities($_POST['profession']);
        if(isset($_POST['interests']))
        {
            foreach($_POST['interests'] as $interest)
            {
                $interests[] = htmlentities($interest);
            }
        }

        if (!empty($_POST['email'])) {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            	$errors['email'][] = 'Le champ "email" n\'est pas valide.';
            }
            
        }
    }
    



