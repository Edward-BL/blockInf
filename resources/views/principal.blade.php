<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

</head>




<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/icono.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Lenguajes de programación
    </a>
  </div>
</nav>

<br>
<br>




<!--carrusel-->
<style>
  .carousel {
    max-width: 60%; /* Reducción del tamaño al 50% */
    margin: 0 auto; /* Centra el carrusel horizontalmente */
  }

  .carousel-item img {
    width: 100%; /* Ajusta el ancho de las imágenes al 100% del carrusel */
  }
</style>   
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/java.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dato curioso de java</h5>
        <p>Se dice, también de un tipo de café que solían tomar estos programadores.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/python.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 .text-dark>Dato curioso de python</h5>
        <p>Python tiene librerías específicas para casi cualquier tarea imaginable.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/csharp.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dato curioso de Csharp</h5>
        <p>La relación entre C# y los videojuegos se debe en gran parte a la plataforma de desarrollo de videojuegos Unity.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<br>
<br>
<br>


<div class="clearfix">
  <img src="{{ asset('img/leng.png')}}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
  <h5>Que es Java?</h5>
  <p>
  Java es un lenguaje de programación de propósito general que fue desarrollado por James Gosling y sus colegas en Sun Microsystems a mediados de la década de 1990. Desde entonces, se ha convertido en uno de los lenguajes de programación más populares y ampliamente utilizados en el mundo. 
  </p>
  <h5>Que es python?</h5>
  <p>
  Python es un lenguaje de programación de alto nivel que se caracteriza por su simplicidad y legibilidad. Fue creado a finales de la década de 1980 por Guido van Rossum y se ha convertido en uno de los lenguajes de programación más populares y ampliamente utilizados en el mundo.
  </p>

  <h5>Que es C#?</h5>
  <p>
  C# (pronunciado "C Sharp") es un lenguaje de programación desarrollado por Microsoft a principios de la década de 2000 como parte de la plataforma .NET. C# es un lenguaje de programación de propósito general que se ha convertido en uno de los lenguajes más utilizados en el desarrollo de software en el ecosistema de Microsoft.
  </p>
</div>
<br><br><br>




<!--tabla-->

<style>
    .table-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .table {
      max-width: 50%;
    }
  </style>
</head>
<body>
  <div class="table-container">
    <table class="table table-bordered border-primary">
      <thead>
        <tr>
          <th scope="col">Característica</th>
          <th scope="col">Java</th>
          <th scope="col">Python</th>
          <th scope="col">C# (C Sharp)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Paradigma<br>Soportado</th>
          <td>Orientado a Objetos, Programación Estructurada, Concurrente,</td>
          <td>Multi-paradigma POO, Programación Funcional, Orientada a Objetos	</td>
          <td>Orientado a Objetos, 	Programación Event-driven</td>
        </tr>
        <tr>
          <th scope="row">Facilidad de Uso</th>
          <td>Requiere más código y sintaxis verbosa</td>
          <td>Conocido por su legibilidad y simplicidad</td>
          <td>Combina la potencia de C++ con la simplicidad de C#</td>
        </tr>
        <tr>
          <th scope="row">Librería y Ecosistema</th>
          <td >Amplia biblioteca de clases y marcos de trabajo (por ejemplo, Java EE, Spring)</td>
          <td>Amplia biblioteca de módulos y bibliotecas ejemplo, NumPy, Django</td>
          <td>Amplia biblioteca de clases y marcos de trabajo, incluyendo la plataforma .NET</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>