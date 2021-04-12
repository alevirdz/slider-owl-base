<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owl.carousel/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="owl.carousel/assets/owl.theme.default.css"/>
    <!-- bootstrapp css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- pushbar css-->
    <link href="pushbar/pushbar.css" rel="stylesheet" type="text/css">
    <!-- icons css-->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-black justify-content-between px-3">
    <a class="navbar-brand logo" href="#!"><img src="assets/img/logo.png" alt=""></a>
    <span class="navbar-text" data-pushbar-target="menu">
      <ion-icon name="menu-outline">menu</ion-icon>
    </span>
  </nav>
  
  <aside data-pushbar-id="menu" data-pushbar-direction="right">
    <div class="title"><span data-pushbar-close class="close"></span></div>
    <ul class="menu">
  
      <a class="nav-link" href="#!">Inicio</a>
      <a class="nav-link" href="#!">Portafolio</a>
      <a class="nav-link" href="#!">Nosotros</a>
      <a class="nav-link" href="#!">Contactanos</a>
  
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item logout" href="#!"></a>
  
          </div>
    </ul>
  </aside>
<!-- Fin menu -->




    <div id="wrapper">
        <!-- slider area -->
        <div id="slider-header" class="owl-carousel owl-theme">
            <div class="item slider-1"></div>
            <div class="item slider-2"></div>
            <div class="item slider-3"></div>
        </div>
        <!-- slider text -->
        <div class="slider-text">
            <h2>Welcome Demo</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi!</p>
            <a href="#!" type="button">Contactar</a>
        </div>
    </div>

    <div class="wrapper-mobile">
    <div class="hero-slider owl-carousel">
				<div class="hero-item set-bg" data-setbg="assets/img/hero/1.jpg">
					<div class="pa-text">
						<h2>Hola, bienvenido</h2>
						<h3>Mi nombre es Alevi Rodriguez y es un placer que hayas venido a visitarme <ion-icon name="arrow-forward-circle-outline"></ion-icon></h3>
					</div>
				</div>
				
				<div class="hero-item set-bg" data-setbg="assets/img/hero/2.jpg">
					<div class="pa-text">
						<h2>GitHub</h2>
						<h3>Te presento a continuación algunos proyectos en los que he trabajo en github</h3>
						<a type="button" class="btn btn-light" href="https://github.com/alevirdz" target="_black">Ver proyectos</a>
					</div>
				</div>
			</div>
    </div>

</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');
body{
    margin:0;
    padding:0;
}
#wrapper{
    position:relative;
    height: 100vh;
}
#slider-header{
    position: absolute;
    height: 100vh;
    width:100%;
    top:0;
    left:0;
}
#slider-header .owl-item div{
    height: 100vh;
    width: 100%;
    background-repeat:no-repeat;
    background-size:cover;
    background-position: 50% 50%;
}
.logo img{
    width:5rem;
}
.slider-text{
    position:absolute;
    left:30%;
    z-index:10;
    top:40%;
    text-align: center;
    font-family: 'Prompt', sans-serif;
}
.slider-text h2{ 
    text-transform: uppercase;
    font-size: 40px;
    color: #fff;
    font-family: 'Prompt', sans-serif;
}
.slider-text p{
    font-size: 18px;
    color:#fff;
    font-family: 'Prompt', sans-serif;
}
.slider-text a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    background: #14576b;
    padding: 15px 25px;
    display: inline-block;
    border-radius:25px;
    text-align: center;
    font-family: 'Prompt', sans-serif;
}
.slider-1{
    background-image: url("assets/img/slide1.jpg");
}
.slider-2{
    background-image: url("assets/img/slide2.jpg");
}
.slider-3{
    background-image: url("assets/img/slide3.jpg");
}

@media (max-width: 768px) { 
    .slider-text{
    position:absolute;
    left:0;
    z-index:10;
    top:40%;
    text-align: center;
    font-family: 'Prompt', sans-serif;
    }
}
@media (min-width: 768px) and (max-width: 1024px) { 
    .slider-text{
    position:absolute;
    left:15%;
    z-index:10;
    top:40%;
    text-align: center;
    font-family: 'Prompt', sans-serif;
    }
}
@media (min-width: 1024px) and (max-width: 1366px) { 
    .slider-text{
    position:absolute;
    left:25%;
    z-index:10;
    top:40%;
    text-align: center;
    font-family: 'Prompt', sans-serif;
    }
}

/* Menu */
nav.navbar.navbar-light.bg-black.justify-content-between.px-3 {
    background: none;
    position: absolute;
    width:100vw;
    z-index: 10;
}
span.navbar-text{
    font-size:30px;
    color:white !important;
}
.wrapper {
    max-width: 678px;
    margin: auto;
  }
  
  pre {
    border-left: 0.3rem solid #4039ff;
  }
  
  body {
    background: #f2f2f2;
  }
  
  .push_left {
    margin-left: 6px;
  }
  
  .push_right {
    margin-right: 6px;
  }
  
  code, xmp {
    white-space: normal !important;
  }
  
  textarea {
    margin-bottom: 0px;
    min-height: 200px;
    line-height: 1;
  }
  
  .close {
    width: 20px;
    height: 21px;
    position: relative;
    display: inline-block;
    vertical-align: text-bottom;
    text-align: center;
    cursor: pointer;
  }
  
  .close:before, .close:after {
    position: absolute;
    left: 10px;
    content: ' ';
    height: 21px;
    width: 3px;
    background-color: #fff;
  }
  
  .close:before {
    transform: rotate(45deg);
  }
  
  .close:after {
    transform: rotate(-45deg);
  }
  
  .card {
    margin: 20px;
    border-radius: 5px;
    background: #fff;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1)
  }
  /* color sidebar */
  .card_title, .title, [data-pushbar-id] {
    background: #000000;
    color: #fff;
  }
  
  .card_title, .title {
    padding: 15px 20px;
    font-weight: bold;
    text-align: right;
  }
  
  .card_title {
    border-radius: 4px 4px 0px 0px;
  }
  
  .card_content {
    padding: 15px;
  }
  
  a.button.getBtn {
    margin-top: 16px;
    background-color: #fff;
    color: #4039ff;
    border-color: #fff;
  }
  
  .small {
    font-size: 14px;
    font-weight: 400;
  }
  .menu a {
    list-style: none;
    padding: 15px 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    display: block;
    margin: 0px;
    color: rgba(255, 255, 255, 0.65);
    font-size: 18px;
  }
  
  a:hover {
    color: white;
  }
  
  .menu li {
    list-style: none;
    padding: 15px 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    display: block;
    margin: 0px;
    color: rgba(255, 255, 255, 0.65);
  }
  
  li:hover {
    color: yellow;
  }
  
  .button, button, input[type='button'], input[type='reset'], input[type='submit'] {
    background-color: #4039ff;
    border: 0.1rem solid #4039ff;
  }
  /* End Menu*/
</style>


<script src="jquery/jquery.min.js"></script>
<!-- pushbar js -->
<script src="pushbar/pushbar.js"></script>
<script src="owl.carousel/owl.carousel.min.js"></script>
<script>
$('#slider-header').owlCarousel({
    loop:true,
    autoplay:true,
    dots: false,
    animateOut: 'fadeOut',
	animateIn: 'fadeIn',
    smartSpeed: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* Pushbar menu */
const pushbar = new Pushbar({
       blur:true,
       overlay:true,
});
</script>