<?php 
    class Conceptos extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render()
        {
            $this->view->render('conceptos/index');
        }
    }
?>