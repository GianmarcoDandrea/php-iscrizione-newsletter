<?php 
    function emailCheck($email) {
        if (str_contains($email, '@') && str_contains($email, '.')) {
            $result = 'success';
            $message='L\'email è stata inserita correttamente';
        } else {
            $result = 'danger';
            $message='L\'email non è stata inserita correttamente';
        }

        return [$result , $message];
    }
?> 