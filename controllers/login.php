<?php 
class Login extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render('login/index');
    }

    function render()
    {
        $rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : null ;
        $id_u = isset($_SESSION['id_u']) ? $_SESSION['id_u'] : null ;
        if ($rol!=null and $id_u!=null) {
            if ($rol=='USER') {
                $direccion='main';
            }

            header('Location: '.constant('URL').$direccion);    

        }else {
            $this->view->render('login/index.php');
        }
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

    function getForm()
    {
        if (isset($_POST['nombre'],$_POST['correo'],$_POST['password'])) {
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $password=md5($_POST['password']);
            $codigo='USER';

            $datos = array('nombre'=>$nombre,'correo'=>$correo,'password'=>$password,'codigo'=>$codigo);

            if ($this->mempty($datos)) {
                $this->model->insertar($datos);
                echo '<div class="alert alert-success" role="alert">Envío exitoso</div>';
            
            }else {
                echo '<div class="alert alert-danger" role="alert">Ocurrió un error, por favor intenta otra vez</div>';
            }
            
        }
    }

    function ingreso()
    {
        $correo = $_POST['correo'];
        $password =md5($_POST['password']);
        $datos=$this->buscar($correo);
        if ($datos==null) {
            echo 'error';
        }else {
            if ($password==$datos['password']) {
                $id_usuario=$datos['id_usuario'];
                session_start();
                session_regenerate_id(true);
                $_SESSION['id_u']=$id_usuario;
                $_SESSION['rol']=$datos['codigo'];
                $_SESSION['user']=$correo;
            }else {
                echo 'error';
            }
        }
    }

    function buscar($usuario)
    {
        $usuario=$this->model->User($usuario);
        if ($usuario=[]) {
            return null;
        }else {
            return $usuario;
        }
    }
}
?>