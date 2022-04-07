<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/formulario.css">
    <style>
        .navbar-nav {
            margin-left: 90%;
            font-size: 25px;

        }
        li:hover {
            background-color:   #cd6155 ;
            font-weight:bold;
        }
        span, h3 {
            font-size: 32px;
            color:   #c0392b ;
            font-weight:bold;
        }

        input[type="text"] {
           background: linear-gradient(#cd6155, #c0392b);
           border: 0;
           width: 15%;
           height: 40px;
          color: #fff;
          font-weight:bold;
          font-size: 23px;
          text-align: center;
          font-family: Arial;
          border-radius: 4px;
          margin-bottom: 0;
        }
        input[type="date"] {
          background: linear-gradient(#cd6155, #c0392b);
          border: 0;
          width: 15%;
          height: 40px;
          color: #fff;
          font-weight:bold;
          font-size: 23px;
          text-align: center;
          font-family: Arial;
          border-radius: 4px;
          margin-bottom: 0;
        }
        input[type="submit"] {
          background: #ff1900;
          border: 0;
          width: 15%;
          height: 40px;
          color: #fff;
          font-weight:bold;
          font-size: 23px;
          text-align: center;
          font-family: Arial;
          border-radius: 4px;
          margin-bottom: 0;
        }

       
    </style>
 
    <title>Formularios</title>
</head>
<body >
<header>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #c0392b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FERNANDBLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="Publicaciones.php">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      </header>
    <center>
    
    <form id="borderform" method="post">
    <div class="logo">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc2qwvxoJc3i9AxrtqgtMciwlPxrwyOLbuMg&usqp=CAU" width="450" height="250" />   
    </div>
    <h3>Agrega tu publicación</h3>
    <br><br><br>
    <div class="entradas">
    <span class="input-group-addon ">Titulo <br></span>
     <input type="text" id="titulo" name="titulo" required /><br><br>   

     <span class="input-group-addon ">Imagen <br></span>
     <input type="file" id="imagen" name="imagen" required /> <br><br>   


     <span class="input-group-addon ">Descripcion <br></span>
     <input type="text" id="descripcion" name="descripcion" required /> <br><br>   

     <span class="input-group-addon ">Autor <br></span>
     <input type="text" id="autor" name="autor" required/>  <br><br>   
     
     <span class="input-group-addon ">Fecha <br></span>
     <input type="date" id="fecha" name="fecha" required/>     
    </div>
    <br><br>
    <div class="boton">
        <input type="submit" name="ValidaForm" value="Enviar Datos"/>
    </div><br><br><br>
 </form> 
  
 <?php 
   
   if(isset($_POST['ValidaForm'])){
       $titulo=$_POST['titulo'];
       $imagen=$_POST['imagen'];
       $descripcion=$_POST['descripcion'];
       $autor=$_POST['autor'];
       $fecha=$_POST['fecha'];
       if($titulo !="null" && $imagen !="null" && $descripcion !="null" && $autor !="null" && $fecha !="null")
          {echo "Publicación guardada correctamente";
            array_push($_SESSION['json'],'{"titulo":"'.$titulo.'","imagen":"'.$imagen.'","descripcion":"'.$descripcion.'","autor":"'.$autor.'","fecha":"'.$fecha.'","Guardado":"SI"}');
            
            header('location:Publicaciones.php');
           }
          else{
            array_push($_SESSION['json'],'{"titulo":"'.$titulo.'","imagen":"'.$imagen.'","descripcion":"'.$descripcion.'","autor":"'.$autor.'","fecha":"'.$fecha.'","Guardado":"NO"}');
            echo "La publicación no se a guardado";
            //header('location:Publicaciones.php');
   }    }
 
 ?>
 </center>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
