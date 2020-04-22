<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="contenedor">
<!--INICIO TOP-->
    <div id="top">
        <div id="menu" ><BR>
         <CENTER> <P style=""> <sTRONG> HOME</P></STRONG> 
         <h1 id="cerrar" style="font-size:30px; float:right; margin-right:15px;margin-top:-60px;">X</h1>
         <HR color="white">
         <p>MENU</p>
         <p>MENU</p>
         <p>MENU</p>
         <p>MENU</p>
         <p>MENU</p>
         <HR color="white">
         </CENTER>
        </div>
        <div>
        <img id="icono_menu" src="imagenes/ico_menu.png" width="50px" height="23px" alt="">
        <p id="texto">Lorem ipsum, dolor sit amet consectetur!<br>___________________________________________</p>
       <center> <img id="img_texto" src="imagenes/texto.png" class="img-fluid"style="margin-top:330px;"  alt=""></center>
       <div>
       
    </div>

<!-- Final del top -->
<!-- Inicio acerca -->
    <div id="acerca">
            

    </div>
<!-- Fin acerca -->
<!-- Inicio servicios -->
    <div id="servicios">
    
    </div>
<!-- Fin servicios -->
<!-- Inicio news -->
    <div id="news">
    
    </div>
 <!-- Fin news -->
<!-- Fin pie-->
    <div id="pie">
    
    </div>
    <!-- Fin pie -->
</div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
$("#icono_menu").click(function(){
    $("#menu").toggle();
});
$("#cerrar").click(function(){
    $("#menu").hide();
});
});
</script>

