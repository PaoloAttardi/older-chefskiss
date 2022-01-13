<?php


class EUtente
{
    private $nome;
    private $cognome;
    private $id;
    private $email;
    private $password;
    private $id_immagine;
    private $data_iscrizione;
    private $data_fine_ban;
    private $ban;
    private $privilegi;

    /**
     * @param $nome
     * @param $cognome
     * @param $id
     * @param $email
     * @param $password
     * @param $id_immagine
     * @param $data_iscrizione
     * @param $ban
     * @param $privilegi
     */
    public function __construct($nome=null, $cognome=null, $id, $email=null, $password=null, $id_immagine=null, $data_iscrizione=null, $data_fine_ban = null, $ban=0, $privilegi=null)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->id_immagine = $id_immagine;
        $this->data_iscrizione = $data_iscrizione;
        $this->ban = $ban;
        $this->privilegi = $privilegi;
        $this->data_fine_ban = $data_fine_ban;
    }

    public function parseParam(){
        return [
            'nome' => $this->getNome(),
            'cognome' => $this->getCognome(),
            'id' => $this->getId(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'id_immagine' => $this->getid_immagine(),
            'data_iscrizione' => $this->getDataIscrizione(),
            'ban' => $this->getBan()
        ];
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * @param mixed $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getid_immagine()
    {
        return $this->id_immagine;
    }

    /**
     * @param mixed $id_immagine
     */
    public function setid_immagine($id_immagine)
    {
        $this->id_immagine = $id_immagine;
    }

    /**
     * @return mixed
     */
    public function getDataIscrizione()
    {
        return $this->data_iscrizione;
    }

    /**
     * @param mixed $data_iscrizione
     */
    public function setDataIscrizione($data_iscrizione)
    {
        $this->data_iscrizione = $data_iscrizione;
    }

    /**
     * @return mixed
     */
    public function getBan() :bool
    {
        return $this->ban;
    }

    /**
     * @param mixed $ban
     */
    public function setBan($ban)
    {
        $this->ban = $ban;
    }

    /**
     * @return mixed
     */
    public function getPrivilegi()
    {
        return $this->privilegi;
    }

    /**
     * @param mixed $privilegi
     */
    public function setPrivilegi($privilegi): void
    {
        $this->privilegi = $privilegi;
    }

    /**
     * @return mixed
     */
    public function getDataFineBan()
    {
        return $this->data_fine_ban;
    }

    /**
     * @param mixed $data_fine_ban
     */
    public function setDataFineBan($data_fine_ban): void
    {
        $this->data_fine_ban = $data_fine_ban;
    }


}