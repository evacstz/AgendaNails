<?php
    class Usuario {
        public function login($email, $senha) {
            global $conexao;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $sql = $conexao->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['iduser'] = $dado['id'];

                return true;
            } else {
                return false;
            }
        }
    }
?>