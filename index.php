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
            <h1 id="cerrar" style="">X</h1>
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
            <div style="margin-left:10%; float:left; margin-right:100px;"> 
                  <img src="imagenes/acerca.png" alt="">
            </div>
            <div id="texto-acerca">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam necessitatibus quisquam reiciendis cupiditate vero non dolor velit et repudiandae. Doloremque officiis ducimus a incidunt magni aperiam, impedit nobis quae deserunt?  
            </div>
            <br>
            <br><br><br><br>
            <div>
                 <div style="margin-left:10%; float:left; margin-bottom:100px;">
                    
                     <img class="img-acerca" id="imagen01" src="imagenes/imagen1.png" alt="">

                     <img class="img-acerca" id="imagen02" src="imagenes/imagen1.png" alt="">

                     <img class="img-acerca" id="imagen03" src="imagenes/imagen1.png" alt="">

                     <img class="img-acerca" id="imagen04" src="imagenes/imagen1.png" alt="">
                 </div>
            </div>

    </div>
<!-- Fin acerca -->
<!-- Inicio servicios -->
    <div id="servicios" style="background-color:blue;">
        <div style=" width:100%;">

        <img style=" float:right; margin-right:13%;" src="imagenes/acerca.png" alt="">
       <div style="width:40%;margin-left:10%;"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum voluptas adipisci aperiam magnam voluptatum quasi, ratione, laudantium, quis architecto doloremque hic aut sapiente. Magnam qui pariatur corporis, harum deserunt veritatis.</div>

   
        </div>
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
$("#imagen01").mouseenter(function(){
    $("#imagen1").animate({height: '250px'});
    $("#des").show();
    $(".hrs").show();
});
$("#imagen02").mouseenter(function(){
    $("#imagen-2").animate({height:'250px'});
    $("#des2").show();
    $(".hrs1").show();
    
});
$("#imagen03").mouseenter(function(){
    $("#imagen3").animate({height: '250px'});
    $("#des3").show();
    $(".hrs2").show();
    
});
$("#imagen04").mouseenter(function(){
    $("#imagen4").animate({height: '250px'});
    $("#des4").show();
    $(".hrs3").show();
    
});


$("#imagen1").mouseleave(function(){
    $("#imagen1").animate({height: '1px'});
    $("#des").hide();
    $(".hrs").hide();
});
$("#imagen-2").mouseleave(function(){
    $("#imagen-2").animate({height:'1px'});
    $("#des2").hide();
    $(".hrs1").hide();
});
$("#imagen3").mouseleave(function(){
    $("#imagen3").animate({height: '1px'});
    $("#des3").hide();
    $(".hrs2").hide();
});
$("#imagen4").mouseleave(function(){
    $("#imagen4").animate({height: '1px'});
    $("#des4").hide();
    $(".hrs3").hide();
});


   
});
</script>

