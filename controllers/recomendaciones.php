<?php 
    class Recomendaciones extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render()
        {
            $this->view->render('recomendaciones/index');
        }
    }
?>