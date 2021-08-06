<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
</head>
<body class="fondegra1">
    <?php require 'views/header.php';?>
    <div class="divchess bordechess">
        <h1 class="titulos centrado negrotex titulospading">꧁❀Ajedrez❀꧂</h1>
        <h2 class='ajedreztitle'>¿Que es el ajedrez?</h2>
        <p class="p1">El Ajedrez es un juego de estrategia, donde el objetivo principal es derrotar al otro jugador.
            Se juega en un tablero de 8x8 cuadros, o sea, 64 cuadros.
            En el Ajedrez se enfrentan dos jugadores, uno con piezas blancas y otro con piezas negras. 
            Cada jugador cuenta con 16 piezas al inicio de la partida, y como regla, el jugador de piezas blancas
            es el que da inicio al juego.
        </p>
        <p class="p1">Hay tres formas de acabar una partida y son: Por abandono, Tablas o Jaque Mate. El Jaque mate es una posicion, donde 
            el Rey se encuentra en ataque, pero no tiene jugadas legales por hacer, o forma de escapar, o forma de comer la pieza 
            que lo tiene bajo amenaza.
        </p>
        <p class="p1">Las Tablas ocurren cuando una partida llega a una posicion de igualdad, donde si los dos jugadores no cometen errores,
            no hay forma de ganar por partte de ningún bando. Tambien se pueden dar las tablas, si en el final de la partida, uno de los dos jugadores
            no tiene las piezas necesarias para darle mate al otro Rey, este caso es llamado como Tablas por material insuficiente.
            El otro caso, es el rey ahogado, esta posicion ocurre, cuando uno de los dos reyes no se encuentra bajo amenaza, pero como 
            no tiene jugadas legales a donde moverse, no puede hacer nada.
        </p>
        <p class="p1">La tercera forma de acabar una partida es por abandono, esta se da cuando uno de los dos jugadores
            sabe que no puede hacer nada mas para evitar la victoria del rival, y decentemente, se retira de la partida, dandole la 
            victoria al otro.
        </p>
        <p class="p1">Actualmente, las partidas de Ajedrez se juegan con velocidad, esto quiere decir que hay un tiempo limite
            de la partida, y por lo general, se juegan de 3 minutos, a nivel profesional, este modo de juego es llamado Blitz, y será explicado mas adelante.
            Como dije  anteriormente, existe un tiempo limite, en el caso de una partida de tres minutos, cada jugador tiene 3 minutos en su reloj. Cuando alguno de ellos
            realiza su jugada, presiona el botón para que el tiempo le empiece a descontar al otro y asi sucesivamente. Habra una mejor explicacion de esto más adelante.
        </p>
        <p class="p1">Cada jugador cuenta con un Rey, una Dama, dos Caballos, dos Alfiles, dos Torres y ocho peones.
            He aqui las posiciones de ellos:
        </p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/tablero.png" width="100%" class="borimg"></div>
        <p class="p1">Como pueden ver, el tablero aparte de tener la piezas en su respectivo lugar, tiene unas
            letras y numeros a su alrededor, como si fueran coordenadas. Esto se explicará mas adelante.
        </p>
        <h1 class="titulos centrado negrotex titulospading">꧁❀Piezas y sus movimientos❀꧂</h1>
        <p class="p1">Cada pieza del Ajedrez tiene su forma de jugar, por eso te explicaré como se usan.</p>
        <h2 class="ajedreztitle">El Rey:</h2>
        <p class="p1">Esta es la pieza mas importante del ajedrez, mas sin embargo, cuenta con muy poca movilidad, y su mayor uso se 
            da por lo general en los finales de partida.
        </p>
        <p class="p1">El Rey puede moverse una sola casilla hacia cualquier direccion, sea en diagonal, hacia abajo, hacia la derecha,
            etc. Observa:
        </p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/reymovs.png" width="100%" class="borimg"></div>
        <p class="p1">Se le suma a los movimientos del rey, que no puede moverse hacia una casilla donde quede atacado, eso es ilegal. Observa:</p>
        <div class="row px-3">
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/reymovs2.png" width="100%" class="borimg">
            </div>
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/reymovs3.png" width="100%" class="borimg">
            </div>
        </div> 
        <p class="p1">Como pueden ver, en la primera imagen, el Rey blanco tiene 2 jugadas posibles, ya que 
            la Dama y el caballo cubren todas las demas. Y en la segunda imagen, el Rey solo tiene una jugada posible,
            ya que los dos Alfiles, los dos Caballos y la Torre cubren y protegen las demas.
        </p>
        <p class="p1">Si no tienes ni idea sobre las otras piezas aparte del Rey que podemos ven en las dos imagenes,
            tranquilo, no te angusties, ya vamos a explicarlas 😅.
        </p>
        <h2 class="ajedreztitle">El Peón:</h2>
        <p class="p1">Esta pieza es bastante peculiar, y la más numerosa. El Peón puede ser una pieza inofensiva, pero 
            si sabes darle un buen uso en tus partidas, pueden ser un arma de doble filo.
        </p>
        <p class="p1">El Peón se mueve una sola casilla hacia adelante, y es la unica pieza que no tiene oportunidad de devolverse.
            Eso si, en su primera jugada tiene la oportunidad de moverse, no una, si no dos casillas hacia adelante. Pero esta ultima regla no es obligatoria,
            puedes moverte o una o dos casillas en tu primera jugada de peón. Eso si, moverse dos casillas solo cuenta en la primera jugada del respectivo peón, 
            a partir de ahi solo podra moverse una casilla. En esta pieza, aunque su movimiento sea hacia adelante,
            su captura de otras piezas es en diagonal, pero claro, solo una casilla en diagonal.
        </p>
        <div class="row px-3">
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/peonmovs.png" width="100%" class="borimg">
            </div>
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/peonmovs1.png" width="100%" class="borimg">
            </div>
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/peonmovs2.png" width="100%" class="borimg">
            </div>
        </div>
        <p class="p1">Como pueden ver, en la primera imagen, el jugador de blancas decidió mover su Peón una sola casilla,
            mientras que en la segunda imagen, se decide por moverlo dos casillas.
        </p>
        <p class="p1">En la tercera imagen vemos el caso de la captura de piezas con un peón. El Peón solo puede capturar en diagonal, por eso puede
            decidir entre comer al peón negro de la derecha, o al de la izquierda.
        </p>
        <h2 class="ajedreztitle">La Dama:</h2>
        <p class="p1">La Dama, o también llamada Reina, es la pieza mas fuerte de todo el juego, ya que tiene libertad de moverse 
            cuantas casillas desea, en todas las direcciones. Mira:
        </p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/damamovs.png" width="100%" class="borimg"></div>
        <p class="p1">Como puedes ver, el repertorio de movimientos posibles que puede jugar la Dama es increible. Ya que desde un extremo del 
            tablero, puede llegar al otro, ¡en una sola jugada!
        </p>
        <h2 class="ajedreztitle">El Alfil:</h2>
        <p class="p1">El alfil, esta pieza es bastante buena, y si se juega con su otra pareja, son muy fuertes.</p>
        <p class="p1">En un juego de Ajedrez, cada jugador tiene dos alfiles, uno de blancas y otro de negras, esto quiere decir que 
            uno de los alfiles esta situado en casillas blancas y el otro en casillas negras.
        </p>
        <p class="p1">Los alfiles se mueven de forma diagonal, cuantas casillas quieran. Observa:</p>
        <div class="row px-3">
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/alfilmovs.png" width="100%" class="borimg">
            </div>
            <div class="col-md">
                <img src="/proyecto/proyecto2021/public/imagenes/alfilmovs1.png" width="100%" class="borimg">
            </div>
        </div>
        <p class="p1">En la primera imagen podemos observar los movimientos posibles del alfil de casillas blancas, y 
            en la segunda imagen, los del alfil de casillas negras. Un alfil bien usado puede tomar el control de toda una diagonal.
        </p>
        <p class="p1">Como dato extra, un alfil de casillas negras jamas podra estar situado en una casilla blanca y viceversa.</p>
        <h2 class="ajedreztitle">La Torre:</h2>
        <p class="p1">La Torre, despues de la Dama, es la pieza con mayor valor y potencial. Si los alfiles pueden moverse en diagonal, las 
            torres lo hacen de forma vertical y horizontal. Cada jugador cuenta con dos Torres.
        </p>
        <p class="p1">Estas piezas pueden moverse cuantas casillas quieran en linea recta, sea horizontal o verticalmente. Aqui puedes ver:</p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/torremovs.png" width="100%" class="borimg"></div>
        <p class="p1">Como pueden observar, las torres nos ofrecen el control de una cantidad considerable de casillas. Te recomiendo
            usar bien tus torres, y emplarlas con otras piezas, ya que por lo general en los finales de partida, las torres cogen gran participación.
        </p>
        <h2 class="ajedreztitle">El Caballo:</h2>
        <p class="p1">Los caballos son mi pieza favorita del ajedrez, y les explicaré el por qué.</p>
        <p class="p1">Cada jugador cuenta con dos caballos. Estas piezas tienen un movimiento peculiar, ya que no se mueven en ninguna direccion en especifico, 
            si no que su movimiento es es forma de "L" ¿Que quiere decir esto? En la siguiente imagen tienes la respuesta:
        </p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/caballomovs.png" width="100%" class="borimg"></div>
        <p class="p1">En la imagen anterior pueden observar el movimiento en forma de L del caballo, Interesante ¿Cierto?. Bueno, puede parecer algo confuso, pero 
            es sencillo de indentificar.
        </p>
        <p class="p1">El Caballo tiene sus caracteristicas que lo hacen unico, una de estas es que es la unica pieza del ajedrez que puede pasar por encima de otras.
            Las demas piezas del ajedrez no pueden pasar por encima de otra si esta bloquea su camino, ejemplo:
        </p>
        <div class="margen"><img src="/proyecto/proyecto2021/public/imagenes/ejemplo1.png" width="100%" class="borimg"></div>
        <p class="p1">La Dama blanca quiere comerse a esa torre negra, pero no puede porque tiene un peón que le obstruye su camino. 
            Mas sin embargo, el jugador blanco tambien tiene un caballo, que si puede comerse esa torre negra, porque
            el caballo puede saltar por encima de las demas piezas.
        </p>
        <p class="centrado">Gracias por leer esta seccion, puedes seguir aprendiendo dandole click al botón que dice siguiente, o puedes devolverte 
            hacia el inicio con el botón de inicio :D
        </p>
        <div class="row px-3">
            <div class="col-md">
                <a href="http://localhost/proyecto/proyecto2021/main" class="botonc d-block m-auto w-50 mb-2">Inicio</a>
            </div>
            <div class="col-md">
                <a href="http://localhost/proyecto/proyecto2021/notacion" class="botonc d-block m-auto w-50">Siguiente</a>
            </div>
        </div>
    </div>
</body>
</html>