<?php

    class BaseController{
        protected function renderView($view, $data = [])
        {
            extract($data);
            
            include $view;
          
        }
    }