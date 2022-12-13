<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Empresa
{
    /**
     * Identificador único da empresa
     * @var integer
     */
    public $id;

    /**
     * CNPJ
     * @var string
     */
    public $cnpj;

    /**
     * Razão Social da empresa
     * @var string
     */
    public $razao_social;

    /**
     * Nome fantasia da empresa
     * @var string(s/n)
     */
    public $nome_fantasia;

    /**
     * Ramo de atuação da empresa
     * @var string
     */
    public $ramo;

    /**
     * Número de funcionários da empresa
     * @var int
     */
    public $num_fun;

    /**
     * Descrição da empresa
     * @var string
     */
    public $descricao;

    /**
     * Método responsável por cadastrar uma nova empresa no banco
     * @return boolean
     */
    public function cadastrar()
    {
        //INSERIR A EMPRESA NO BANCO
        $obDatabase = new Database('empresas');
        $this->id = $obDatabase->insert([
            'cnpj' => $this->cnpj,
            'razao_social' => $this->razao_social,
            'nome_fantasia' => $this->nome_fantasia,
            'ramo' => $this->ramo,
            'num_fun' => $this->num_fun,
            'descricao' => $this->descricao
        ]);

        //RETORNAR SUCESSO
        return true;
    }

    /**
     * Método responsável por atualizar a empresa no banco
     * @return boolean
     */
    public function atualizar()
    {
        return (new Database('empresas'))->update('id = ' . $this->id, [
            'cnpj' => $this->cnpj,
            'razao_social' => $this->razao_social,
            'nome_fantasia' => $this->nome_fantasia,
            'ramo' => $this->ramo,
            'num_fun' => $this->num_fun,
            'descricao' => $this->descricao
        ]);
    }

    /**
     * Método responsável por excluir a empresa do banco
     * @return boolean
     */
    public function excluir()
    {
        return (new Database('empresas'))->delete('id = ' . $this->id);
    }

    /**
     * Método responsável por obter as empresas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getEmpresas($where = null, $order = null, $limit = null)
    {
        return (new Database('empresas'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por buscar uma empresa com base em seu ID
     * @param integer $id
     * @return Vaga
     */
    public static function getEmpresa($id)
    {
        return (new Database('empresas'))->select('id = ' . $id)
            ->fetchObject(self::class);
    }
}
