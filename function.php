<?php 
    function emailCheck($email) {
        if (str_contains($email, '@') && str_contains($email, '.')) {
            echo 'l\'email è stata inserita correttamente';
        } else {
            echo 'l\'email non è stata inserita correttamente';
        }
    }
?> 