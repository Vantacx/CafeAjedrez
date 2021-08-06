<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php constant('URL') ?>public/js/main.js"></script>
    <title>CafeAjedrez</title>
</head>
<body>
    <!-- paso 15 -->
    <?php require 'views/header.php';?>
    <div class="row">
        <div id="main" class="col-md-9">
            <div class="mx-5">
                <h1 class="titulos fuentea">Bienvenido a CaféAjedrez</h1>
                <div class="a1 bordea">
                    <h2 class="titulos">¿Que es?</h2>
                    <p>¡Hola! CaféAjedrez es un blog sobre Ajedrez, donde podrás aprender a jugar y hacer uso de todas
                    las cosas que te ofrece la pagina. Te invito a darte un paseo por aqui.
                    </p>
                </div>
                <div class="a1 bordea">
                    <h2 class="titulos">¿Que encontraras aqui?</h2>
                    <p>Puedes ver una tabla de contenido de la pagina a la derecha, o si estas en celular, abajo del todo. Tambien puedes darle click al boton que dice 
                        <b>Ajedrez</b> para empezar a leer todas las secciones. Por ultimo si gustas, puedes regalarme tu opinión y aparecerá en el apartado de comentarios.
                    </p>
                </div>
                <div class="a2 bordeb centrado">
                    <h1 class="titulos">¡Disfruta y diviertete :D!</h1>
                </div>
                <h1 class="titulos fuentea">Dale click al botón y aprende:</h1>
                <div class="divelije" style="text-align: center;">
                <a href="http://localhost/proyecto/proyecto2021/ajedrez">
                <button class="botonb">Ajedrez</button>
                </a>
                </div>
                
            </div>
            <div class="former mx-5 centrado">
                <h1 class="centrado titulos">Dame una opinión:</h1>
                <form action="<?php echo constant('URL')?>main/recibir" class="" method="POST">
                    <input name="nombre" type="text" placeholder="Nombre" class="borimg fondof" required> <br>
                    <input name="correo" type="text" placeholder="Correo" class="borimg fondof" required> <br>
                    <textarea name="comentario" id="" cols="30" rows="10" placeholder="Tu comentario" class="borimg fondof" required></textarea> <br>
                    <button class="fondof">Click para enviar</button>
                </form>
            </div>
            <?php $comentarios=$this->comentarios; ?>
            <div>
                <?php 
                    foreach ($comentarios as $key => $value) {
                        echo'<div class="divchess borimg">
                            <p><b>Autor:</b> '.$value['nombre'].'</p>
                            <p>'.$value['fecha_registro'].'</p>
                            <h4 class="titulos negrotex">Comentario:</h4>
                            <p>'.$value['comentario'].'</p>
                        </div>';
                    }  
                ?>
            </div> 
        </div>
        <div id="main2" class="col-md-3">
            <div>
                <div>
                    <img src="/proyecto/proyecto2021/public/imagenes/caballoaj.jpg" width="100%">
                </div>
                    <div class="divderecha">
                        <h2 class="titulos">Dale click a todo esto:</h2>
                        <ul>
                            <li type="square">
                                <a href="http://localhost/proyecto/proyecto2021/yo"><button>Mi persona</button></a>
                            </li>
                            <li type="square">
                                <a href="http://localhost/proyecto/proyecto2021/ajedrez"><button>Ajedrez</button></a>
                            </li>
                            <li type="square">
                                <a href="http://localhost/proyecto/proyecto2021/notacion"><button>Notación en Ajedrez</button></a>
                            </li>
                            <li type="square">
                                <a href="http://localhost/proyecto/proyecto2021/conceptos"><button>Conceptos que debes saber</button></a>
                            </li>
                            <li type="square">
                                <a href="http://localhost/proyecto/proyecto2021/recomendaciones"><button>Mis recomendaciones</button></a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>