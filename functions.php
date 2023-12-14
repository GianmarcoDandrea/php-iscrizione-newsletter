<?php 
    function emailCheck($email) {
        if (str_contains(trim($email), '@') && str_contains(trim($email), '.')) {
            $result = 'success';
            $message='L\'email è stata inserita correttamente';
            header('Location: ./thankyou.php');
        } else {
            $result = 'danger';
            $message='L\'email non è stata inserita correttamente';
        }

        return [$result , $message];
    }
?> 