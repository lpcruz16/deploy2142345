<?php

session_start();
$usuario = $_SESSION ['username'];
if (!isset($usuario)){
  header("location: login.php");
}else{

echo " <h3> $usuario </h3>";
echo"<a href='modelo/salir.php'>SALIR </a> ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="estilos/style.css">
 <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>Productos/Women Store</title>
</head>
<body>
<header>
  <h1><b> WOMEN STORE</b></h1>
<h3> <b>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</b> </h3>
<br>
<nav>
<ul class="menu1">
<li ><a href="interfazindex.html"><b>INICIO</b></I></a> </li>
<li ><a href="interproductos.html"><b>PRODUCTOS</b> </a> </li>
<li ><a href="intercategorias.html"><b>CATEGORIAS</b> </a> </li>
<li ><a href="intercontacto.html"><b>CONTACTO</b> </a> </li>
<li ><a href="interellos.html"><b>ELLOS</b> </a> </li>
<li ><a href="vista/paginaprin.php"><b>CUENTA</b> </a> </li>
<li><a href="intercarro.html"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav>
</header>
<center>
<table>
		<tr>
			<td><a href="regalos.html"><img  src="img/bonita.jpg"title="Regalos"><br>REGALOS </a></a></td>
			<td><a href="ofertas.html"><img src="img/oferta2.jpg"title="Ofertas" ><br>OFERTAS</a></td></b>  
			<td><a href="destacados.html"> <img src="img/destacados.jfif" title="Destacados"><br> DESTACADOS</a></a></td>
		</tr>
	</table>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white"></h5>
          <img src="img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1  $pink rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
   
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
    <div class="col d-flex justify-conten-center mb-4">
      <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
        <h5 class="card-title pt-2 text-center text primary text-white""></h5>
          <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <h5 class="text-primary">Precio: <span class="precio">$10.00</span></h5>
            <div class="d-grid gap-2">
                <button  class="btn btn-primary button">A??adir a Carrito</button>
            </div>
            </div>
          </div>
</div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./js/scrip.js"></script>
  
  	</center>
	<a href="index.html">Inicio</a>
<ul class="menu3">
<li ><a href="condiciones.html"><b>Condiciones</b></I></a> </li>
<li ><a href="quienes.html"><b>??Quienes somos?</b> </a> </li>
<li ><a href="politicas.html"><b>Politica de Privacidad</b> </a> </li>
<li ><a href="preguntas.html"><b>??Preguntas Frecuentes?</b> </a> </li>
</ul>
<div class="con">
  <button><i class="fab fa-facebook"></i></button>
  <button><i class="fab fa-whatsapp"></i></button>
  <button><i class="fab fa-instagram"></i></button>
</div>
</body>
</html>