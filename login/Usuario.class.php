<?php
    class Usuario {
        public function login($email, $senha) {
            global $conexao;

            $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
            $consulta = $conexao->prepare($consulta);
            $consulta->bindValue("email", $email);
            $consulta->bindValue("senha", md5($senha));
            $consulta->execute();

            if($consulta->rowCount() > 0) {
                $dado = $consulta->fetch();

                $_SESSION['iduser'] = $dado['id'];

                return true;
            } else {
                return false;
            }
        }
    }
?>