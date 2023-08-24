
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>	IESIZ </title>
</head>

<body>
  <font color="Olive" face="arial,arial">
  <h1 align="center"><i>INSTITUTO DE ESTUDIOS SUPERIORES IGNACIO ZARAGOZA</i></h1>


  <h2 align="center">INSTITUTO DE ESTUDIOS SUPERIORES IGNACIO ZARAGOZA</h2>
  
</font>

  <div id="navegacion">
  <ul>
    <li>OFERTA ACADEMICA</li>
    <li>CONOCENOS</li>
    <li>CAMPUS</li>
    <li>ALUMNOS </li>
	<li><a href="#">OFERTA EDUCATIVA</a></li>
	<li><a href="#">CONOCENOS</a></li>
	<li><a href="#">CAMPUS</a></li>
	<li><a href="#">ALUMNOS</a></li>
	<li><a href="#">MAESTROS</a></li>
  </ul>
</div>
<div class="dropdown"><li class=" even">
  <button class="mainmenubtn">Main Menu</button><li class=" odd">
  <div class="dropdown-child"><li class=" even">
    <a href="http://wwww.tudominio.com/page1.html">Sub Menu 1</a>
    <a href="http://wwww.tudominio.com/page2.html">Sub Menu 2</a>
    <a href="http://wwww.tudominio.com/page3.html">Sub Menu 3</a>
    <a href="http://wwww.tudominio.com/page4.html">Sub Menu 4</a>
    <a href="http://wwww.tudominio.com/page5.html">Sub Menu 5</a>
  </div>
  </div>

  <div class="menu">
    <a href='#'>
        <span class="icofont-navigation-menu"></span>
    </a>
</div>
<nav>
    <ul>
        <li><a href="#seccion-1">item1</a></li>
        <li><a href="#seccion-2">item1</a></li>
        <li><a href="#seccion-3">item1</a></li>
        <li><a href="#seccion-4">item1</a></li>
        <li><a href="#seccion-5">item1</a></li>
    </ul>
</nav>

.menu{
    display: none;
}
.menu{
        display: block;
    }
    nav {
        width:50%;
        height:100%;
    left:-100%;
    margin:0;
    position: fixed;
                
    }
	$(document).ready(main);
var contador = 0;
function main(){
    $('.menu').click(function(){
        contador = (contador + 1)%2
        if(contador == 1){
            $('nav').animate({
                left: '0'
            });
            
        } else {
            
            $('nav').animate({
                left: '-100%'
            });
        }
    });
};




  <font face="Comic Sans MS,arial">
  Estudia con nosotros
  <br>
  Estudia una de nuestras licenciaturas, maestrias y doctorados
  <br>
  Contruyendo tu futuro
  </font>
</body>
</html>



<html>
<head> <title>CONTACTANOS</title></head>
<body>
 <h1> DEJA TUS DATOS </h1>

<p>
Dame tu nombre !!!
<form action="ej10.php" method="post">
     Nombre: <input type="text" name="nombre">
	 <input type="submit">
	  Correo Electronico <input type="text" name="correo elecronico">
	 <input type="submit">
	 Telefono <input type="text" name="telefono">
     <input type="submit">
</form>

</body>
</html>