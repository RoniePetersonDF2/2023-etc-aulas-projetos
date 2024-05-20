<?php
/*
 * Essa classe representa o modelo da tabela.
 * DTO - Data Transfer Object
 */
class UsuarioDTO {
    private $idUsuario;
    private $nome;
    private $tipoUsuario;
    private $cpfCnpj;
    private $endereco;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $loginEmail;
    private $senha;
    private $numero;

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function getCpfCnpj() {
        return $this->cpfCnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getLoginEmail() {
        return $this->loginEmail;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNumero() {
        return $this->numero;
    }


    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    public function setCpfCnpj($cpfCnpj) {
        $this->cpfCnpj = $cpfCnpj;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setLoginEmail($loginEmail) {
        $this->loginEmail = $loginEmail;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }

}
