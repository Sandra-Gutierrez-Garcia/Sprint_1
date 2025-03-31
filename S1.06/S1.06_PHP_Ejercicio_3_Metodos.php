<?php

class Informacion{
    
        private string $nombre;
        private string $username;

        public function __construct(string $nombre, string $username) {
            $this->nombre = $nombre;
            $this->username = $username;
        }

        public function __toString(): string{
            return "el nombre registrado es " . $this-> nombre . " y el username " . $this-> username;

        }
}

?>
