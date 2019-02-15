<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Utilidades/MDBT/css/mdb.min.css">
    <link rel="stylesheet" href="Utilidades/MDBT/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



    
    <title>Document</title>
</head>
<body>
    <div>
        <header>
            <?php
            include "secciones/navBar.php"; 
            ?>
        </header>
    </div>
    <div class="animated bounceInUp">
        <?php
        include "secciones/header.php";  
        ?>
    </div>
    <div class="formulario" data-aos="fade-up" data-aos-duration="1200">
    <?php
        include "secciones/formulario.php"; 
        ?>
    </div>


    <div class="footer">
      <?php 
        include "secciones/footer.php";
      ?>  
      </div>

      <script src="Utilidades/MDBT/js/jquery-3.3.1.min.js"></script>  
      <script src="Utilidades/MDBT/js/popper.min.js"></script>
      <script src="Utilidades/MDBT/js/bootstrap.min.js"></script>
      <script src="Utilidades/MDBT/js/mdb.min.js"></script>
      <script src="Utilidades/ScrollUp/src/jquery.scrollUp.js"></script> 
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="js/botonArriba.js"></script>
      <script src="js/radioButtons.js"></script> 
      <script src="js/aos.js"></script>

</body>
</html>