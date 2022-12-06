<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/testTheme.css">
    <?php wp_head() ?>
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <div class="container">
            <div class="logo">
                <img src="data:image/jpeg;base64,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" alt="" width="100px">
            </div>
            <div class="nav-items">
                <ul>
                    <li>home</li>
                    <li>about</li>
                    <li>contact</li>
                    <li><input type="text" name="" id="" placeholder="search"></li>
                </ul>
            </div>
            </div>
            
        </nav>
    </header>
    <!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The navigation menu -->
<div class="navbar">
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Bring</a>
      <a href="#deliver">Deliver</a>
      <a href="#package">Package</a>
      <a href="#express">Express</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <a href="#contact">Contact</a>
</div>
    <div class="hero-image">
  <div class="hero-text">
    <h1>Where you Belong</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    <button>Learn More</button>
  </div>
</div>
<div class="container">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="https://cdn.pixabay.com/photo/2022/11/19/09/35/forest-7601671_640.jpg" alt="Gallery image 1" class="gallery__img">
                    <!-- <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption> -->
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="https://cdn.pixabay.com/photo/2022/12/02/18/37/spiderweb-7631437_1280.jpg" alt="Gallery image 2" class="gallery__img">
                    
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="https://cdn.pixabay.com/photo/2022/11/15/05/26/leaves-7593093_640.jpg" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="https://cdn.pixabay.com/photo/2022/12/03/15/14/christmas-7632906_640.jpg" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="https://cdn.pixabay.com/photo/2022/12/02/16/34/western-honey-bee-7631244_640.jpg" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="https://cdn.pixabay.com/photo/2022/06/28/12/28/boho-art-7289600_1280.jpg" alt="Gallery image 6" class="gallery__img">
                </figure>
            </div>
        </div>