<?php

//Importar arquivo
require_once "Conexao.php";

class FSeriesDAO {
    private $con;
    private $table = "filmes_series";
    private $id = "idfilmes_series";

    private function getCon(){
        $bd = new Conexao();
        $this-> con = $bd->getMysqli();
        return $this->con;
    }

    public function cadastrar (FSeries $fSeries){
        $sql = "INSERT INTO {$this->table}(*)
        VALUES(
                '{$fSeries->getCapa()}',
                '{$fSeries->getTitulo()}',
                {$fSeries->getAnoLancamento()},
                '{$fSeries->getGenero()}'
        )";

        $status = $this->getCon()->query($sql);
        $this->getCon()->close();
        return $status;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->table}";
        $lista = $this->getCon()->query($sql)->fetch_all();
        $this->getCon()->close();
        return $lista;
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->id} = $id";
        $result = $this->getCon()->query ($sql);
        $this->getCon()->close();
        return $result;
    }

    public function alterar(int $id, FSeries $fseries)
{
    $sql = "UPDATE {$this->table} SET
                capa = '{$fseries->getCapa()}',
                titulo = '{$fseries->getTitulo()}',
                ano_Lancamento = {$fseries->getAnoLancamento()},
                genero = '{$fseries->getGenero()}' WHERE
                 {$this->id} = {$id}";

    $status = $this->getCon()->query($sql);
    $this->getCon()->close();

    return $status;
}


}
