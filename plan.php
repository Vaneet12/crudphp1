<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>  
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>


.mtform{
    background-color: antiquewhite;

}

.see{
  border-radius: 35px;
    padding: 0 25px;
    height: 50px;
    margin: 0;
    display: block;
    float: none;
    width: 100%;
    background: #0E0E0F;
    font-weight: 500;
    color: #FFF;
    border: solid 1px #0E0E0F;
    outline: 0;
    font-family: Klarna Text,Helvetica Neue,Arial,Helvetica,sans-serif;
    font-size: 16px;
    cursor: pointer;
margin:20px 10px 10px 1px;
}
.collapse12{
  margin:30px 10px 10px 1px;
}
.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {  
  background: #b3f9ff;  
  color:black;
  }  
  .btn-group.btn-group-toggle{
    width:100%;
  
  }
  .btn-secondary{
    color:black;
    background-color:white;
  }
  .btn-secondary:hover{
    background-color:white;
    color:black;
  }
  input#litepicker{
    margin:15px;
    border:none;
    outline:none;
  }
  select{
    margin: 20px;
    border: none;
    outline: none;
    width: 80%;
  }
  .form-check-inline .form-check-input{
    margin-right:1rem;
  }
 .plan{
    text-align: center;
    margin: 6px 0 26px;
    font-family: Klarna Display,Helvetica Neue,Arial,Helvetica,sans-serif;

}
.form-floating>.form-control{
  margin: 10px 10px 10px 1px;
}
.rotate {
    -moz-transition: all .5s linear;
    -webkit-transition: all .5s linear;
    transition: all .5s linear;
}
.rotate.up {
    -moz-transform:rotate(180deg);
    -webkit-transform:rotate(180deg);
    transform:rotate(180deg);
}
.form-check input {
  vertical-align: middle;
}
.form-check-inline .form-check-input {
  margin-left: 6px;
}
.row{
  margin-right: 1px;
    margin-left: -1px;

}
.col-md-4.border.sed{
  padding-top: 5px;
    padding-bottom: 10px;
    margin: 20px;
}
.diva{
  display:flex;
}
button.btn.btn-primary.dropdown-toggle{
  background: white;
    color: black;
    width: 119%;
    border: none;
}





</style>
<script>
  var i=0;
  var j=0;
  var k=0;
  function buttonClick() {
      display()
      i++;
      document.getElementById('inc').value = i;
  }
   function buttonClick1() {
      display1()
      if(i<=0)
      {
          alert("Guests can not be less than 0");
      }
      else
      {
          i--;
       document.getElementById('inc').value = i;
      }
  }
  function buttonClick2() {
      display()
      j++;
      document.getElementById('incval').value = j;
  }
   function buttonClick3() {
      display1()
      if(j<=0)
      {
          alert("Guests can not be less than 0");
      }
      else
      {
          j--;
       document.getElementById('incval').value = j;
      }
  }
  function buttonClick4() {
      display()
      k++;
      document.getElementById('incvall1').value = k;
  }
   function buttonClick5() {
      display1()
      if(k<=0)
      {
          alert("Guests can not be less than 0");
      }
      else
      {
          k--;
       document.getElementById('incvall1').value = k;
      }
  }
 
  function display(){
        document.getElementById("myval").innerHTML= 1+i+j+k;
    }
    function display1(){
        document.getElementById("myval").innerHTML= i+j+k-1;
    }

    

  
	
		function btnToggle() {
			document.getElementById("Dropdown").classList.toggle("show");
		}
		
		document.getElementById("Dropdown").addEventListener('click', function (event) {
			alert("click outside");
			event.stopPropagation();
		});
		
		
	</script>	
</body>

</html>						



  </script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="row border mt-4" >
    <div class="col-md-4 "></div>
    
    <div class="col-md-4 border sed" >
        <h1 class="plan">Itinerary planner
</h1>

        <div class="form-floating mb-3" id="addDes" >
            <input type="name" class="form-control" id="floatingInput" placeholder="Enter destination (country, region, or city)">
            <label for="floatingInput" id="lab">Enter destination (country, region, or city)</label>
        </div>

        <button type="button" class="btn btn-link" onclick="NewDes()">+ Add destination</button>

        <div class="row " style="height: 50px;">
          <div class="col-md-8 border">
            <input type="text" name="datetimes" id="litepicker" placeholder="Date Range" />

        
</div>
          <div class="col-md-4 border">
          
         <div class="dropdownmenu">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" data-bs-auto-close="false" onClick="btnToggle()" class="dropbutton"> <div  id="myval" value="0">0</div>Travellers
    
  <span class="caret"></span></button>
  <div id="Dropdown" class="dropdownmenu-content" >

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
      <li>
        <div class="btn-group" role="group" aria-label="Basic example">
          <LABEL>Adults:</LABEL>&nbsp;&nbsp;&nbsp;

        <button type="button" class="btn btn-primary" onclick="buttonClick1();">-</button>
        <input type="text" id="inc" value="0"></input>
        <button type="button" class="btn btn-primary" onclick="buttonClick();">+</button>
        </div>
</li>
      <li><div class="btn-group" role="group" aria-label="Basic example">
        <LABEL>Teens:</LABEL>&nbsp;&nbsp;&nbsp;&nbsp;

        <button type="button" class="btn btn-primary" onclick="buttonClick3();">-</button>
        <input type="text" id="incval" value="0"></input>
        <button type="button" class="btn btn-primary" onclick="buttonClick2();">+</button>
      </div>
      
      </li>
      <li>
        <li><div class="btn-group" role="group" aria-label="Basic example">
          <LABEL>Kids:</LABEL>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
          <button type="button" class="btn btn-primary" onclick="buttonClick5();">-</button>
          <input type="text" id="incvall1" value="0"></input>
          <button type="button" class="btn btn-primary" onclick="buttonClick4();">+</button>
        </div>
      </li>
      <li><button type="button" class="close">Close&times;</button></li>

    </ul>
    </div>
  </div>
   
        
          </div>
        </div>
        <div class="collapse12">
        <a data-target="#demo" data-toggle="collapse">

          Activities preferences  (optional)<div class="fa fa-chevron-down rotate"></div>    </a>
      
      <div class="collapse out" id="demo">
        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin:15px 20px 15px 5px;">  
          <label class="btn btn-secondary active">  
            <input type="radio" name="options" id="professor" checked> Popular  
          </label>  
          <label class="btn btn-secondary">  
            <input type="radio" name="options" id="designer" > Balanced  
          </label>  
          <label class="btn btn-secondary">  
            <input type="radio" name="options" id="tester" > Hidden gems   
          </label>  
          </div>
          <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin:15px 20px 15px 5px;">  
            <label class="btn btn-secondary active">  
              <input type="radio" name="options" id="professor" checked> Slow & easy  
            </label>  
            <label class="btn btn-secondary">  
              <input type="radio" name="options" id="designer" > Medium  
            </label>  
            <label class="btn btn-secondary">  
              <input type="radio" name="options" id="tester" > Fast-paced   
            </label>  
             
            </div>
            <div class="diva">
<div>            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Culture</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Outdoors</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
              <label class="form-check-label" for="inlineCheckbox3">Relaxing</label>
            </div>
  </div>
  <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Romantic</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Beaches</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
              <label class="form-check-label" for="inlineCheckbox3">Historic</label>
            </div>
  </div>
  <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Museums
</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Shopping</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
              <label class="form-check-label" for="inlineCheckbox3">Wildlife</label>
            </div>
      </div>
  </diV>
        <button class="see">See your trip</button> 

    </div>
  
    <div class="col-md-4 "></div>

  </div>
</div>
</body>

<script>
      const container = document.getElementById('addDes');
      
  


    function NewDes(){
        let div=document.createElement('div');
        div.classList.add("form-floating");

      
      let input = document.createElement('input');
      input.setAttribute("id","floatingInput");
      input.classList.add("form-control");

      
      // var x = document.createElement("INPUT");
      // x.setAttribute("type", "name");
      // x.classList.add("form-control");

          container.appendChild(input);
    }


    let input = document.getElementById('litepicker');
let now = new Date();
let picker = new Litepicker({
  element: input,
  format: 'DD MMM YYYY',
  singleMode: false,
  numberOfMonths: 2,
  numberOfColumns: 2,
  showTooltip: true,
  scrollToDate: true,
  startDate: new Date(now).setDate(now.getDate() - 1),
  endDate: new Date(now),
  setup: function(picker) {
    picker.on('selected', function(date1, date2) {
      console.log(`${date1.toDateString()}, ${date2.toDateString()}`)
    })
  }
});
$(".rotate").click(function () {
    $(this).toggleClass("up");
})
</script>


</html>
