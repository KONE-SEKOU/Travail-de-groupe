<?php

class UserController extends BaseController{
    public function loginUser()
    {

        $this->renderView('../vues/user/login.php');
    }
}