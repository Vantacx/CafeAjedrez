<?php 
    class Yo extends Controller {
        function __construct()
        {
            parent::__construct();
        }

        function render() 
        {
            $this->view->render('yo/index');
        }
    }
?>