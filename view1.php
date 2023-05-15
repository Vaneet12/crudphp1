<?php
include("connection3.php");
session_start();
$userprofile= $_SESSION['user_name'];

$id= $_GET['id'];

$query="SELECT * FROM `form` where id='$id'";
$data=mysqli_query($con,$query);
$total= mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
$language=$result['rr'];
$language1=explode(",",$language);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD operation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="title">
User profile       </div>
        <div class="form">
            <div class="input_field">
                <label for="">Location: <?php echo $result['location']; ?></label>               

                 </div>

            <div class="input_field">
                <label for="">Locations:<?php echo $result['locations']; ?></label>
            </div>

            <div class="input_field">
                <label for="">Duration:<?php echo $result['duration']; ?></label>
            </div>


            

            <div class="input_field">
                <label for="">Rating: <?php
                        if($result['options']=='Popular'){
                            echo "Popular";
                        }
                        ?>
                        <?php
                        if($result['options']=='Balanced'){
                            echo "Balanced";
                        }
                        ?></label>
                 <?php
                        if($result['options']=='Hidden gems'){
                            echo "Hidden-gems";
                        }
                        ?></label>
                
            </div>



            <div class="input_field">
                <label for="">Pace: <?php
                        if($result['r2']=='Slow & easy'){
                            echo "Slow-&-easy";
                        }
                        ?>
                        <?php
                        if($result['r2']=='Medium'){
                            echo "Medium";
                        }
                        ?></label>
                 <?php
                        if($result['r2']=='Fast-paced'){
                            echo "Fast-paced";
                        }
                        ?>
                        
                    
                    </label>
                
            </div>


            

            <div class="input_field" >
                <label for="" style="margin-right:100px;">Checklist:  <?php

if(in_array('Culture',$language1)){
    echo "Culture ";
}
?>
<?php

if(in_array('Outdoors',$language1)){
    echo "Outdoors ";
}
?>
<?php

if(in_array('Relaxing',$language1)){
    echo "Relaxing ";
}
?>

<?php

if(in_array('Romantic',$language1)){
    echo "Romantic ";
}
?>
<?php

if(in_array('Beaches',$language1)){
    echo "Beaches ";
}
?>
<?php

if(in_array('Historic',$language1)){
    echo "Historic ";
}
?>
 <?php

if(in_array('Museums',$language1)){
    echo "Museums ";
}
?>
<?php

if(in_array('Shopping',$language1)){
    echo "Shopping ";
}
?>
<?php

if(in_array('Wildlife',$language1)){
    echo "Wildlife ";
}
?>

</label>
         
                

            </div>




            <div class="input_field">
        
        </div>
</form>
    </div>

</body>

</html>