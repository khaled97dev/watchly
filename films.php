<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">
    <style>
      * {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
}

@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');

body{
  font-family: 'Archivo Black', sans-serif;

}

a {
  text-decoration: none;
  color: #000;
}

.card {
  position: relative;
  overflow: hidden;
  width: 320px;
  height: 450px;
  margin: 50px auto;
  background: #2a264f;
  border: 5px solid #1a163f;
  border-radius: 3px;
  box-shadow: 0 0 10px blue;
}
.card .img1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-size: 310px 440px;
  background-position: left top;
  transition: all 0.5s ease-in-out;
}

.card .title {
  height: 22%;
  width: 100%;
  font-size: 20px;
  text-align: center;
  font-weight: 700;
  color: #FFFC;
  padding: 15px 10px;
  position: absolute;
  bottom: 0;
  left: 0;
  box-shadow: 0 -95px 28px -25px #000 inset;
}
.card .text {
  position: absolute;
  bottom: 80px;
  height: 120px;
  padding: 15px 10px;
  text-align: center;
  font-size: 17px;
  color: #fff;
  transform: rotate(90deg);
  transform-origin: 0 100px;
  opacity: 0;
  transition: all 0.5s ease;
}
.card .catagory {
  position: absolute;
  left: 10px;
  top: 140px;
  padding: 3px 10px;
  font-size: 15px;
  font-weight: 700;
  text-align: center;
  background: #2a264f;
  color: #fff;
  border-radius: 5px;
  transform: translate(-160px, 0);
  transition: all 0.5s ease;
}
.card:hover .img1 {
  transform: rotate(10deg) scale(1.3) translate(20px, 0);
  transform-origin: 300px 300px;
  opacity: 0.5;
}
.card:hover .text {
  opacity: 0.8;
  transform: rotate(0deg);
}
.card:hover .views,
.card:hover .catagory {
  transform: translate(0);
}

    </style>
    <title>FILMS</title>
</head>
<body style="background-color: rgb(0, 0, 0);">

  
<!-- NAVBAR -->
<?php include("contents/navbar.php"); ?>

<!-- CARDS -->
<?php include("contents/cards.php"); ?>


<!-- FOOTER -->
<?php include("contents/footer.php"); ?>

</body>
</html>
