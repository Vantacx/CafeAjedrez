<?php 
class Main extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->comentarios=$this->model->mostrarcomentario();
        $this->view->render('main/index');
    }
    function mempty($array)
    {
        foreach($array as $value)
            if(!empty($value))
                continue;
            else
                return false;
        return true;
    }

    function recibir()
    {
        if (isset($_POST['nombre'],$_POST['correo'],$_POST['comentario'])) {
            $nombre=$_POST['nombre'];
            $email=$_POST['correo'];
            $mensaje=$_POST['comentario'];

            $datos = array('nombre'=>$nombre,'correo'=>$email,'comentario'=>$mensaje);

            if ($this->mempty($datos)) {
                $this->model->insertar($datos);
                echo '<div class="alert alert-success" role="alert">Envío exitoso</div>';
            
            }else {
                echo '<div class="alert alert-danger" role="alert">Ocurrió un error, por favor intenta otra vez</div>';
            }
            
        }
    }
}
?>