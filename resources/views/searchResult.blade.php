
    

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
  
  .zoom{
    background-color: darkblue;
    transition: transform .2s;
    width: 100px;
    height: 100px;
    text-align: center;
    vertical-align: middle;
    border-radius: 100%;
    padding: 2%;
  }
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
 
  .zoom a{
      text-align: center;
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

    <svg height="600" width="1000">
    <line x1="280" y1="360" x2="650" y2="360" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    <line x1="400" y1="160" x2="650" y2="360" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    <line x1="400" y1="580" x2="650" y2="360" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    <line x1="650" y1="370" x2="1100" y2="370" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    <line x1="650" y1="360" x2="900" y2="560" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    <line x1="650" y1="360" x2="900" y2="175" style="stroke:rgb(0, 237, 118);stroke-width:4" />
    </svg>


  <div class="zoom" id="cero"><h1>$searchResult</h3></div>
    <div class="zoom" id="uno"><h2>consectetur adipiscing</<h3></div>
    <div class="zoom" id="dos"><h3>consectetur adipiscing</h3></div>
    <div class="zoom" id="tres"><h3>consectetur adipiscing</h3></div>
    <div class="zoom" id="cuatro"><h3>consectetur adipiscing</h3></div>
    <div class="zoom" id="cinco"><h3>consectetur adipiscing</h3></div>
    <div class="zoom" id="seis"><h2>consectetur adipiscing</h3></div>
    
    
    

    <!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="modal-content">
        <p><?php echo Section::yield('searchResult') ?></p>
      </div>
    
    </div>


 <script>
    // Get the modal
var modal = document.getElementById("myModal");
    // When the user clicks on the button, open the modal
var zoom = document.getElementsByClassName('zoom');

for (var i=0; i < zoom.length; i++) {
    zoom[i].style.cursor = 'pointer';
    zoom[i].onclick = function(){        
        modal.style.display = "block";
    }
};

function openmodal() {
    modal.style.display = "block";
};
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
