<?php 
    class Notacion extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render()
        {
            $this->view->render('notacion/index');
        }
    }
?>