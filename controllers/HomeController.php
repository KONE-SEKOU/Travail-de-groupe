<?php

class HomeController extends BaseController{
    public function index()
    {

        $this->renderView('../vues/home/index.php');
    }
}