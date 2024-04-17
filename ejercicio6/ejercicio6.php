<?php
    class Saludar {
        protected string $nombre;
        protected string $apellido;

        public function __construct($nombre, $apellido) {
            $this->setNombre($nombre);
            $this->setApellido($apellido);
        }

        public function getNombre() : string {
            return $this->nombre;
        }

        public function getApellido() : string {
            return $this->apellido;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function saludoFormal($horario) {
            if($horario>5 && $horario<=13 && $horario>=0 && $horario<24) {
                echo ("Buenos días " . $this->nombre . " " . $this->apellido);
            }elseif($horario>13 && $horario<=21 && $horario>=0 && $horario<24) {
                echo ("Buenas tardes " . $this->nombre . " " . $this->apellido);
            }elseif($horario>21 && $horario<=5 && $horario>=0 && $horario<24) {
                echo ("Buenas noches" . $this->nombre . " " . $this->apellido);
            }else {
                echo ("El horario ingresado es incorrecto");
            }
        }

        public function saludoInformal($horario) {
            if($horario>5 && $horario<=13 && $horario>=0 && $horario<24) {
                echo ("¡Hola " . $this->nombre . "! Que tengas un buen día");
            }elseif($horario>13 && $horario<=21 && $horario>=0 && $horario<24) {
                echo ("¡Hola " . $this->nombre . "! Que tengas una buena tarde");
            }elseif($horario>21 && $horario<=5 && $horario>=0 && $horario<24) {
                echo ("¡Hola " . $this->nombre . "! Que tengas una buena noche");
            }else {
                echo ("El horario ingresado es incorrecto");
            }
        }
    }
?>