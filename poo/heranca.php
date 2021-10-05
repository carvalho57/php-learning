<?php

#Herança
class User 
{
    private $login;
    private $password;
    private $role;

    function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}   

class Admin extends User 
{
    function __construct($login, $password)
    {
       parent::__construct($login,$password);
       $this->role = "Admin";
    }
}

#parent alias para o nome da class pai

#Override 
# E so reescrever a mesma assinatura na classe derivada
# Para proibir sobreescriva e so usar o Final na classe ou no metodo


