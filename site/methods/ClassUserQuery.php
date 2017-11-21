<?php

class ClassUserQuery
{
	
public function getUser($id){
	private $_email;
	private $_password;
	private $_nom;
	private $_prenom;
	}

    public function getEmail()
    {
        return $this->_email;
    }


    public function setEmail($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    public function getPassword()
    {
        return $this->_password;
    }


    public function setPassword($_password)
    {
        $this->_password = $_password;

        return $this;
    }

    public function getNom()
    {
        return $this->_nom;
    }


    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }


    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
}
?>