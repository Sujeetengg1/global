<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Provide Vehicle Details</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="bg-light text-dark">

  <section class="container col-md-7 card bg-white text-dark">

    <form action="" method="post" enctype="multipart/form-data" id="nameform">
      <div class="card-header"><h1>Provide Vehicle Details</h1></div>
      
        

        
        <div class="form-group">
          <label for="Vehicle Type :">Vehicle Type :<b>*</b></label>
            <select name="vehicle_type" class="form-control" data-prompt-position="bottomLeft">
              <option value="">Select Vehicle</option>
              <option value="Private Vehicles" selected="selected">Private Vehicles</option>
              <option value="Commercial vehicle" >Commercial vehicle</option>
            </select>
            </div>
          
        


        
        <div class="my-2">
          <label>Category :<b>*</b></label>
            <select class="validate[required] custom-select" data-prompt-position="bottomLeft" name="vehicle_subcat" required="required">
              <option value="">Select Sub Category</option>
              <option value="Car" selected="selected">Car</option>
              <option value="Bus" >Bus</option>
              <option value="Others" >Others</option>
              <option value="Auto Rickshaw" >Auto Rickshaw</option>
            </select>             
        </div>



          
          
            <label>Make :</label>
            <select class="validate[required] custom-select" data-prompt-position="bottomLeft" name="vehicle_make" required="required">
          <?php
            $conn = new mysqli('localhost','jatin','jatin','jatin');
            $db =mysqli_select_db($conn,'jatin');
            $sql = "SELECT * FROM `selectmake` ORDER BY `name` ASC";
            $res_data = mysqli_query($conn,$sql);
              ?>
          
            
          <?php
            while($rows = $res_data->fetch_assoc()) {
            $name = $rows['name'];
            echo "<option value='$name'> $name </option>";
                } 
              ?>
            </select>


           <!--  <div class="my-4">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroup-sizing-default">Model:</span>
                </div>
              <input type="text" name="vehicle_model" class="form-control" data-prompt-position="bottomLeft" data-validation-placeholder="Enter Vehicle model number" required="required" aria-label="Default" aria-describedby="inputGroup-sizing-default"></input>
            </div> -->

        
            
            <div>
            <label>Type :<b>*</b></label>
            <span class="ml-3"></span>
              <b>Hatchback</b>
               <input type="radio" name="car_type_val" class="validate[required] radio" data-prompt-position="bottomLeft" value="hatchback" id="t_sel_1" checked="checked">
                <img src="photos/hatchback.svg" alt="" height="80" width="80"/>
                  
                
              <span class="ml-5"></span>
              <b>Sedan</b>
                <input type="radio" name="car_type_val" class="validate[required] radio" data-prompt-position="bottomLeft" value="sedan" id="t_sel_2">
                <img src="photos/sedan.svg" alt="" height="80" width="80" />

                
            </div>

          
      
          <label>Vehicle Condition :<b>*</b></label>
          <select class="validate[required] custom-select" data-prompt-position="bottomLeft" name="car_condition">
            <option value="">Select Condition</option>
            <option value="Excellent" >Excellent</option>
            <option value="Good" >Good</option>
            <option value="Fair" >Average</option>
          </select>
          

        
          <label>Average KMs per month :<b>*</b></label>
            <select class="validate[required] custom-select" data-prompt-position="bottomLeft" name="avg_km_per_month">
                <option value="">Select Average </option>
                <option value="1500+" >High ( > 1,500)</option>
                <option value="600-1500" >Medium (600-1,500)</option>
                <option value="0-600" >Low(0-600)</option>
              </select>
            

          
            <label>Region :<b>*</b></label>
              <select name="audience_region" class="validate[required]  custom-select" data-prompt-position="bottomLeft" onChange="getsubregion(this.value)" id="region_id" required="required">            
                <option value="">Select Region</option>   
                  <option value="All"     >All</option>
                  <option value="All India"     >All India</option>
                  <option value="Bangalore"     >Bangalore</option>
                  <option value="Delhi Ncr"     >Delhi Ncr</option>
                  <option value="Mumbai"     >Mumbai</option>
                  <option value="Others"     >Others</option>
                  <option value="Pune"     >Pune</option>
                  <option value="Singapore"     >Singapore</option>
              </select>




         <div class="my-4">
            <label>Upload Image</label>      
              <input type="file" name="uploadfile" />
          </div>


      <div class="my-4 form-group">
        <label for="comment">Additional Information:<b>*</b></label><br>
          <textarea name="what_you_offer" cols="" rows="" data-prompt-position="bottomLeft" data-validation-placeholder="E.g. Route details, is your vehicle parked in a crowded place etc." class="form-control">E.g. Route details, is your vehicle parked in a crowded place etc.</textarea>
      </div>



            
        <p>Average monthly rates</p>
        <div class="mb-3">
          <table border="1" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
              <td class=" text-center">Doors</td>
              <td class=" text-center">Indoor(Dangler)</td>
              <td class=" text-center">Indoor + Doors</td>
              </tr>
              <tr>
              <td class=" text-center">Rs. 2000</td>
              <td class=" text-center">Rs. 700</td>
              <td class=" text-center">Rs. 3000</td>
              </tr>
            </tbody>
          </table>
        </div>
            


        <div class="text-right">
     <input type="submit" name="insert" value="Submit" class="btn-primary">
          </div>
        </form>
</section>
</div>

<?php


$conn=mysqli_connect("localhost","jatin","jatin","jatin");
$db =mysqli_select_db($conn,'jatin');


if(isset($_POST['insert'])) 
{

$vehicle_type = $_POST['vehicle_type'];
  $vehicle_subcat = $_POST['vehicle_subcat'];
  $vehicle_make = $_POST['vehicle_make'];
  $car_type_val = $_POST['car_type_val'];
  $car_condition = $_POST['car_condition'];
  $avg_km_per_month = $_POST['avg_km_per_month'];
  $audience_region = $_POST['audience_region'];


  $filename = $_FILES['uploadfile']['name'];
  $tempname = $_FILES['uploadfile']['tmp_name'];
  $folder ="imagecar/".$filename;
  move_uploaded_file($tempname,$folder);

  $what_you_offer = $_POST['what_you_offer'];

  $query = "INSERT INTO `new` (`vehicle_count`, `vehicle_type`, `vehicle_subcat`, `vehicle_make`, `car_ty pe_val`, `car_condition`, `avg_km_per_month`, `audience_region`, `images`,`what_you_offer`) VALUES (NULL, '$vehicle_type', '$vehicle_subcat','$vehicle_make','$car_type_val', '$car_condition','$avg_km_per_month','$audience_region','$folder','$what_you_offer')";
   $query_run = mysqli_query($conn,$query);

   if ($query_run)
   {
      ?>
    <script>
       window.location = 'contact.php';
</script>
  <?php  
      }
    else
    {
      echo "query is not working";
    }


}
 ?>

</body>
</html>
