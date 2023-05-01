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

}
.collapse12{
  margin:15px;
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
</style>
<script>
   

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
  <div class="row border mt-4" style="height: 500px;">
    <div class="col-md-4 border">dsfds</div>
    <div class="col-md-4 border " >
        <h1 class="plan">Itinerary planner
</h1>

        <div class="form-floating mb-3" id="addDes" >
            <input type="name" class="form-control" id="floatingInput" placeholder="Enter destination (country, region, or city)">
            <label for="floatingInput">Enter destination (country, region, or city)</label>
        </div>

        <button type="button" class="btn btn-link" onclick="NewDes()">+ Add destination</button>

        <div class="row " style="height: 50px;">
          <div class="col-md-8 border">
            <input type="text" name="datetimes" id="litepicker" placeholder="Date Range" />

        
</div>
          <div class="col-md-4 border">
          <select>
<?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
          </div>
        </div>
        <div class="collapse12">
        <a data-target="#demo" data-toggle="collapse">

          Activities preferences  (optional) <i class="fa fa-chevron-down"></i>    </a>
      
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
            <div class="form-check form-check-inline">
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
      
      </div>
        <button class="see">See your trip</button> 

    </div>

  </div>

</body>

<script>
      const container = document.getElementById('addDes');


    function NewDes(){
      
      let input = document.createElement('input');
      input.setAttribute("id","floatingInput");
      input.placeholder = 'Enter destination (country, region, or city)';


 
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
</script>


</html>