<?php

class CarController extends BaseController{
    public function showCarsPage(){
        $this->renderView('../vues/car/list.php');
    }
    public function showCarsDetails(){
        $this->renderView('../vues/car/details.php');
    }
}