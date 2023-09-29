<?php

class NotFoundController extends BaseController{
    public function index()
    {
        $this->renderView('../vues/404/index.php');
    }
}