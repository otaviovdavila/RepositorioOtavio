<?php

class Model {

    public function getLogin() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username'] == 'admin' &&
                    $_POST['password'] == 'admin') {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                return 'login';
            } else {
                return 'usuario invalido';
            }
        }
    }

}

?>