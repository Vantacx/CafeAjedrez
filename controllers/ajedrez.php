<?php 
    class Ajedrez extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render()
        {
            $this->view->render('ajedrez/index');
        }
    }
?>