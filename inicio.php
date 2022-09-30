<?php session_start();

if(isset($_SESSION['usuario'])){
?>
<h2>Estas logeado como crack <?php echo $_SESSION['usuario']?></h2>


<a href="./procesar/logout.php">salir </a>

<?php
}else{
    header('location:./index.php');
}
?>