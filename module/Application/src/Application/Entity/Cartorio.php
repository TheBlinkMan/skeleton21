<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cartorios",
 *  uniqueConstraints={
 *      @ORM\UniqueConstraint(name="cartorio_unique",
 *          columns={"tipoDocumentoId", "documento"})
 *  }
 * )
 */
class Cartorio {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $razao;

    /**
     * @var int
     * @ORM\Column(type="integer", options={"default": 2})
     */
    protected $tipoDocumentoId;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $documento;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cep;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $endereco;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $bairro;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cidade;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $uf;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $telefone;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tabeliao;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $ativo;

    /**
     * @return int
     */
    public function getId() {
        return $this->$id;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->$name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->$name = $name;
    }

    /**
     * @return string
     */
    public function getRazao() {
        return $this->$razao;
    }

    /**
     * @param string $name
     */
    public function setRazao($razao) {
        $this->$razao = $razao;
    }

    /**
     * @return int
     */
    public function getTipoDocumentoId() {
        return $this->$tipoDocumentoId;
    }

    /**
     * @param int $tipoDocumentoId
     */
    public function setTipoDocumentoId($tipoDocumentoId) {
        $this->$tipoDocumentoId = $tipoDocumentoId;
    }

    /**
     * @return string
     */
    public function getDocumento() {
        return $this->$documento;
    }

    /**
     * @param string $documento
     */
    public function setDocumento($documento) {
        $this->$documento = $documento;
    }

    /**
     * @return string
     */
    public function getCep() {
        return $this->$cep;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep) {
        $this->$cep = $cep;
    }

    /**
     * @return string
     */
    public function getEndereco() {
        return $this->$endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco($endereco) {
        $this->$endereco = $endereco;
    }

    /**
     * @return string
     */
    public function getBairro() {
        return $this->$bairro;
    }

    /**
     * @param string $bairro
     */
    public function setBairro($bairro) {
        $this->$bairro = $bairro;
    }

    /**
     * @return string
     */
    public function getCidade() {
        return $this->$cidade;
    }

    /**
     * @param string $cidade
     */
    public function setCidade($cidade) {
        $this->$cidade = $cidade;
    }

    /**
     * @return string
     */
    public function getUf() {
        return $this->$uf;
    }

    /**
     * @param string $uf
     */
    public function setUf($uf) {
        $this->$uf = $uf;
    }

    /**
     * @return string
     */
    public function getTelefone() {
        return $this->$telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone) {
        $this->$telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->$email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email) {
        $this->$email = $email;
    }

    /**
     * @return string
     */
    public function getTabeliao() {
        return $this->$tabeliao;
    }

    /**
     * @param string $tabeliao
     */
    public function setTabeliao($tabeliao) {
        $this->$tabeliao = $tabeliao;
    }

    /**
     * @return int
     */
    public function getAtivo() {
        return $this->$ativo;
    }

    /**
     * @param int $ativo
     */
    public function setAtivo($ativo) {
        $this->$ativo = $ativo;
    }

}
