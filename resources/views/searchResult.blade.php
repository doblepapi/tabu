
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    * {
    margin: 0%;
    padding: 0%;
  }
  
  .zooma{
    background-color: green;
    transition: transform .2s;
    width: 100px;
    height: 100px;

    margin: 1%;

    border-radius: 100%;
  }
  .zoom:hover {
    -ms-transform: scale(2);
    -webkit-transform: scale(2);
    transform: scale(2);
  }
  .zooma:hover {
    -ms-transform: scale(2);
    -webkit-transform: scale(2);
    transform: scale(0.5);
  }
  #cero{
      position: absolute;
      left: 40%;
      top: 30%;
      width: 300px;
      height: 300px;
  }
  #uno{
      position: absolute;
      top: 500px;
      left: 350px;
      width: 100px;
      height: 100px;
  }  
  #dos{
      position: absolute;
      top: 100px;
      left: 350px;
      width: 100px;
      height: 100px;
  }  
  #tres{
      position: absolute;
      top: 100px;
      left: 850px;
      width: 100px;
      height: 100px;
  }
  #cuatro{
      position: absolute;
      top: 500px;
      left: 850px;
      width: 100px;
      height: 100px;
  }
  #cinco{
      position: absolute;
      top: 300px;
      left: 200px;
      width: 100px;
      height: 100px;
  }
  #seis{
      position: absolute;
      top: 300px;
      left: 1000px;
      width: 100px;
      height: 100px;
  }
  
    </style>

</head>
<body>


    <div class="zooma" id="cero"></div>
    <div class="zoom" id="uno"></div>
    <div class="zoom" id="dos"></div>
    <div class="zoom" id="tres"></div>
    <div class="zoom" id="cuatro"></div>
    <div class="zoom" id="cinco"></div>
    <div class="zoom" id="seis"></div>

</body>
</html>