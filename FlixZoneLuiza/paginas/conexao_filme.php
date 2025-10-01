<?php
class conexao {
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "filmes";
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(
            $this->server,
            $this->user,
            $this->password,
            $this->database
        );
    }

    public function getMysqli()
    {
        return $this->mysqli;
    }
}
