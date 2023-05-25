<?php
session_start();
include "./logica/conexion.php";
$no_cuenta = $_SESSION['usermane']; //413112576

if (!isset($no_cuenta)) {
    header("location: index.php");
} else {
    echo "<h1> Hola, tu número de cuenta es $no_cuenta </h1>";
    
    // Listar registros
    include "logicaListado.php";
    
    // Enlace para eliminar usuario
    echo "<a href='logica/eliminar.php?no_cuenta=$no_cuenta'>Eliminar Usuario</a>";
    
    echo "<a href='logica/salir.php'>SALIR</a>";

    echo "
    <body>
        <section>
            <h1>Título 1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusamus, eligendi recusandae accusantium suscipit exercitationem. Temporibus quidem cumque est eius dolorum, accusantium adipisci ab fuga, fugit ipsam, veniam doloremque expedita?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis reprehenderit dolores obcaecati! Eligendi, natus? Laborum, suscipit aliquam sed ipsum magni magnam velit accusamus perferendis soluta asperiores odit praesentium maxime ut.</p>
        </section> 
    </body>
    ";
}
?>
