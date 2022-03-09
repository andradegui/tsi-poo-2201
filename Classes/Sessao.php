<?php

class Sessao {
    private $id_usuario;
    private $dispositivo;
    private $localizacao;
    private $lastAction;

    public function login() {
        echo "Login efetuado";
    }

    public function destruir() {
        echo "Sessão destruida";
    }

    public function logout() {
        echo "Logout efetuado";
    }

    public function atulizar() {
        echo "Sessão atulizado";
    }
}