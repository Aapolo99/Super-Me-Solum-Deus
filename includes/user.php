<?php

include_once 'db.php';

    class User extends DB{
        private $nombre;
        private $Email;

        // Verificando si el usuario existe en la base de datos.
        public function userExists($user, $pass){
            /*$md5pass = md5($pass);*/
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = :user AND contrasena = :pass");
            $query->execute(['user'=>$user, 'pass'=>$pass]);

            if ($query->rowCount()){
                return true;
            }else {
                return false;
            }
        }

        //Asignar a un nombre de usuario (Llenas las variables)
        public function setUser($user){
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = :user");
            $query->execute(['user'=>$user]);

            foreach ($query as $CurrentUser) {
                $this->nombre = $CurrentUser['Nombre'];
                $this->Email = $CurrentUser['Email'];
            }
        }

        //Traer el nombre del usuario
        public function getNombre() {
            return $this->nombre;
        }
  }
?>