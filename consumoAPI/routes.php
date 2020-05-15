<?php
        if (isset($_POST['selectApi'])) {
            $option = $_POST['selectApi'];
        }
        else {
            $option = 'viacep';
        }
    
        if ($option == 'viacep') {
            include_once('viacep.php');
        }

        if ($option == 'postmon') {
            include_once('postmon.php');
        }
        if ($option == 'cepaberto') {
            include_once('cepAberto.php');
        }
        $address = getAddress();
?>