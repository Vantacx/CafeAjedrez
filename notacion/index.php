<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notacion</title>
</head>
<body class="fondegra3">
    <?php require 'views/header.php';?>
    <div class="divchess bordechess">
        <h1 class="titulos centrado negrotex titulospading">꧁❀Notación en Ajedrez❀꧂</h1>
        <h2 class="ajedreztitle">¿Que es la Notación dentro del Ajedrez?</h2>
        <p class="p1">En la anterior sección, vimos que las imagenes de ejem    plo que hice, tienen unas letras y numeros en algunas 
            casillas, y te preguntaras, ¿Que son? o ¿Para que sirven? Pues te haré entender de forma sencilla el uso de esto.
        </p>
        <p class="p1">La Notación dentro del Ajedrez es un punto muy importante. Después de aprender a movilizar tus piezas, es 
            importante conocer la forma de llamar a las casillas y también la forma de nombrar cada jugada.
        </p>
        <p class="p1">Para empezar vamos a asignarle a cada pieza, una letra. El Rey será la letra "<b>R</b>", la 
            Dama será la letra "<b>D</b>", el Alfil será la letra "<b>A</b>", el caballo será la letra "<b>C</b>", la Torre será la letra 
            "<b>T</b>" y por último, el Peón no tendrá una letra para identificarse, ya verás el por que.
            <br>
            Por cierto, la asignacion de estas letras, no la he inventado yo, si no que asi esta estipulado.
        </p>
        <p class="p1">Vamos a dividir el tablero de Ajedrez por columnas y filas, siendo las columnas, las lineas 
            verticales, y las filas, las lineas horizontales.
            Las columnas del tablero tienen letras, y empiezan desde la izquierda con la letra <b>a</b> y terminan al
            extremo derecho con la letra <b>h</b>. Las filas tienen un numero, siendo la fila mas abajo, la numero <b>1</b>, y la fila 
            de más arriba, la numero <b>8</b>
        </p>
        <p class="p1">Teniendo en cuenta el punto anterior, nos damos cuenta que cada cuadro del tablero, tiene una letra de columna y 
            un numero de fila por el cual podemos identificarlo. Y ya para terminar, cuando vayas a nombrar la casilla, debes de escribir la 
            letra y despues junto a la letra escribes el número. Tal que asi:
        </p>
        <h3 class="centrado">a8, c7, e5, e2, b2, b8, f3, g7</h3>
        <p class="p1">Los ejemplos anteriores solo son diferentes casillas del tablero, no representan alguna jugada
            como tal. Ahora vamos a ver la forma de representar jugadas usando este sistema de notación.
        </p>
        <br>
        <p class="p1">Anteriormente vimos una asignacion de letras a cada pieza del Ajedrez, ¿Te acuerdas? Bueno, esta 
            asignacion es para poder representar los movimientos de las piezas.
        </p>
        <p class="p1">Empezaremos por explicar lo que es una jugada. Una jugada son dos movimientos, primero del blanco y despues del negro. Una nueva jugada se 
            registra siempre que termina de mover el jugador de blancas. Esto quiere decir que una partida que tuvo 28 movimientos, tuvo 14 jugadas y como 
            la jugada nueva empieza cada que el blanco mueve, si una partida tuvo 27 movimientos, tambien tuvo 14 jugadas.
        </p>
        <p class="p1">Si una pieza hace un movimiento, se representa, usando la letra en
        mayúscula que identifica a esa pieza, junto a la casilla donde se movio. Un ejemplo sería: Si nosotros movemos nuestro Alfil hacia la casilla
        f4, vamos a representar ese movimiento como "<b>Af4</b>" ¿Ya vas entendiendo? Lo mismo ocurre con todas las piezas. En el caso de la Torre por ejemplo, la movimos hacia g8, el 
        movimiento entonces es <b>"Tg8"</b>. Sencillo ¿Cierto? Continuemos.
        </p>
        <p class="p1">Pero, si movemos un peón, ¿Como se representa si no tiene una letra asignada? La respuesta es simple, como los peones no tienen una letra en Mayuscula que los represente
            a la hora de moverlos, vamos a nombrar ese movimiento como la casilla donde se ha movido. Ejemplo, tenemos un peón en su casilla inicial en e2, si lo movemos hacia e4, el nombre de este movimiento será "<b>e4</b>".
        </p>
        <p class="p1">Seguramente te estarás preguntando, ¿Como puedo describir un movimiento de captura de pieza? No te preocupes, es facil.
            Cuando se captura una pieza se usa la "x"que significa "por". Esta x va entre la letra mayuscula de la pieza y la casilla donde capturó otra.
            Un ejemplo sería: Tienes tu Dama en e3, y en a7 hay una Torre que puedes comer y obviamente, la comes.
            El movimiento seria el siguiente: "<b>Dxa7</b>."
        </p>
        <p class="p1">Lo mismo con todas las piezas, <b>Letra mayúscula de la pieza + x + Casilla donde capturó</b>.</p>
        <p class="p1">La captura con peón es un poco distinta, en esta usamos la columna donde está situado el peón, continuamos con una x y despues la casilla donde capturó.
            Un ejemplo sería la siguiente situacion: Tienes un peón en b4 defendiendo tu Caballo que está en c5, más sin embargo, tu 
            rival come tu caballo haciendo Axc5, y tu respondes comiendote su alfil con "<b>bxc5</b>."
            <br>
            Como pueden ver, se usa <b>La columna donde antes estaba situado el peón + x + Casilla donde capturó</b>.
        </p>
        <p class="p1">Para terminar, la forma de representar movimientos como Jaque o Jaque mate, es la siguiente:
            <br>
            Cuando una pieza da Jaque, sea moviendo o capturando, al final de su movimiento se  agrega un <b>+</b>, Ejemplo:
        </p>
        <h3 class="centrado">Dg7+, Ta1+, Txb3+, Ac5+, Cxb8+</h3>
        <p class="p1">En el caso del Jaque mate, sea moviendo o capturando, se escribe un "<b>#</b> " al final del movimiento:</p>
        <h3 class="centrado">Ab2#, Dxh8#, Da6#</h3>
        <p class="p1">Existen en el ajedrez, muchos mas tipos de Notación, pero la que te acabo de explicar es la 
            mas usada y la que se usa en la actualidad.
        </p>
        <p class="centrado">Esta ha sido toda la informacion que te puedo ofrecer sobre la Notación en el Ajedrez.
            Puedes repasar la anterior seccion, o ir a la siguiente, porque hacen falta algunas cosas importantes por saber :D
        </p>
        <div class="row px-3">
            <div class="col-md">
                <a href="http://localhost/proyecto/proyecto2021/ajedrez" class="botonc d-block m-auto w-50 mb-2">Atras</a>
            </div>
            <div class="col-md">
                <a href="http://localhost/proyecto/proyecto2021/conceptos" class="botonc d-block m-auto w-50">Siguiente</a>
            </div>
        </div>
    </div>
</body>
</html>