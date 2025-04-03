<?php

class Informacion{
    
        private string $nombre;
        private string $username;

        public function __construct(string $nombre, string $username) {
            $this->nombre = $nombre;
            $this->username = $username;
        }

        public function __toString(): string{
            return "Información del usuario:\nNombre: " . $this->nombre . "\nUsername: " . $this->username;
        }
}


?>
