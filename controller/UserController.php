<?php
require_once 'model/User.php';
require_once 'model/UserDAO.php';



class UserController extends User
{
    private $user;
    private $userDAO;

    public function store() {
        $this->userDAO = new UserDAO;
        $this->user = new User;

        $this->user->setUser($_REQUEST['user']);
        $this->user->setPassword($_REQUEST['password']);

        if ($this->userDAO->store($this->user)){
            $_REQUEST['sucess'] = true;
            require_once 'view/cadastroUser.php';
        }
    }


}