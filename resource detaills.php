<!DOCTYPE html>
<html>
<head>
	<title>vehicles</title>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/vehicles.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/vehicles media.css">
	<link rel="stylesheet" type="text/css" href="Boot-css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Boot-css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Resource detail media.css">

</head>
<body style="background-color:#f3f0f0;">



<!-- Header section -->
<div class="row" style="height: 60px; background-color: #02384a;">

	<div class="col-md-6">
		<div class="topbar">
			<img src="images/logo.png">
			
		</div>
	</div>

	<div class="col-md-6">
		<div class="quick-post">
			<a href="#"><button>Quick Post</button></a>
			
		</div>
		
	</div>
	
</div>

<!--  Data categories -->


<div class="row">

	<div class="container" style=" margin-top: 3%;">

		<div class="row">
			<!-- Left Section -->

			<div class="col-md-8" id="formsection" style="height: 1100px;  background-color: white; ">

			<!-- 	<div class="row">

					<div class=" col-md-4">

						<div class="select-categories" style="background-color: #ffc300;">
							<img src="images/ca1.png"><span>Select-categories</span>
							
						</div>
						
					</div>



					<div class=" col-md-4">

						<div class="select-categories" style="background-color: grey;">
							<img src="images/ca2.png"><span>Provide Resource Details</span>
							
						</div>
						
					</div>




					<div class=" col-md-4">

						<div class="select-categories" style="background-color: grey;">
							<img src="images/ca3.png"><span>Contact Details</span>
							
						</div>
						
					</div>
					
				</div> -->


				<br><br>



				<div class="section-pareshan">

					<div class="select-categoriesA" style="background-color: grey;">
								<img src="images/ca1.png" ><span>Select-categories</span>
								
					</div>


					<div class="select-categoriesA" style="background-color: #ffc300;">
								<img src="images/ca2.png"><span>Provide Resource Details</span>
								
					</div>


					<div class="select-categoriesA" style="background-color: grey;">
								<img src="images/ca3.png"><span>Contact Details</span>
								
					</div>
					
				</div>
						

  


				<!-- corde for 3 sections copied from vehicles.html -->

<!-- 				<div class="row" style="margin-top: 2%; margin-left: 4%;">
					<div class=" col-md-6">

						<div class="container_section">

						<img src="images/m1.png"><span>Vehicles</span>
						
					</div>


					<div class="container_section">

						<img src="images/m2.png"><span style="color: blue;">Social</span>
						
					</div>


					<div class="container_section">

						<img src="images/m3.png"><span>Digital Media</span>
						
					</div>
						
					</div>
					
				</div> -->


<!-- Form for information collection -->


<div class="data_input">

	<h3>Provide Vehicle details</h3>

	<span>*Mandatory fields</span><br><br><br>

	<!-- form work start -->

	<form action="" method="post" enctype="multipart/form-data">

		<label>Vehicle Type :</label>
		<select name="vehiclesType">
			<option value="Private VVehicle" >Private Vehicle</option>
			<option value="Commercial Vehicles">Commercial Vehicle</option>
		</select>
		<br>

		<label >Sub Category :</label>
		<select name="subcategory">
			<option>Car</option>
			<option>Bus</option>
			<option>Others</option>
			<option>Auto RickShow</option>
		</select>
		<br>

		<label >make :</label>
		<select name="make">
			<option>Chevrolet</option>
			<option>Datsun</option>
			<option>Fiat</option>
			<option>Force motors</option>
			<option>Ford</option>
			<option>Honda</option>
			<option>Hyundai</option>
			<option>Mahindra</option>
			<option>Maruti</option>
			<option>Nisan</option>
			<option>Renault</option>
			<option>Skoda</option>
			<option>Tata</option>
			<option>Toyota</option>
			<option>Volkswagen</option>
			<option>others</option>
		</select>
		<br>

			
		
		
			<div>
            <label>Type :</label>
            <span class="ml-3"></span>
              <b>Hatchback</b>
               <input type="radio" name="cartype"  value="hatchback"  checked="checked">
                <img src="images/hatchback.svg" alt="" height="80" width="80"/>
                  
                
              <span class="ml-5"></span>
              <b>Sedan</b>
                <input type="radio" name="cartype"value="sedan" >
                <img src="photos/sedan.svg" alt="" height="80" width="80" />

                
            </div>




		<br>

		<label>Vehicle condition:</label>
		<select name="condition">
			<option>Excellent</option>
			<option>Good</option>
			<option>Average</option>
		</select>
		<br>



		<label>Region :</label>
		<select name="Region">
			<option>All </option>
			<option>All India</option>
			<option>Banglore</option>
			<option>Delhi NCR</option>
			<option>Mumbai</option>
			<option>Others</option>
			<option>Pune</option>
			<option>Singaspore</option>
		</select>



		<br>
		<label>vehicle image:</label>
		<input type="file" name="uploadfile">

		<br>

		<label>Additional <br>Information :</label>
		<textarea name="msg"></textarea>

		<center>
		<table>
			<tbody>
				<h6>Average Monthly Rates</h6>

				<tr>
					<th>Bumper</th>
					<th>Bumper + Doors </th> &nbsp;&nbsp;&nbsp;
					<th>Full Vehicles</th>
				</tr>

				<tr>
					<td>Rs 1500-2000</td>
					<td>Rs 700</td>
					<td>Rs 2500-3000</td>
				</tr>
			</tbody>
		</table>
		</center>

		<a href=""><center><input type="submit" name="insert" value="Submit" style="width: 150px; margin-left: 40%; margin-top: 5%; height: 40px; background-color: #03A9F4; color: black; font-weight: bold; border-radius: 50px;"></center></a>
		
	</form>
	
</div>







				<!-- End of left section -->
			</div>





	





			<!-- right Section -->


			<div class="col-md-4" id="right" style="margin-top: -.8%;">
				<div class="text_boxsection">

					<i><p>My Car now earns Rs 2500 per<br> month :)"</p></i>
					<img src="images/test1.png">
					
				</div>



				<div class="text_box">

					<i><p>GlobalAdGuru enabled me to<br> advertise my small business<br> as i wanted!!</p></i>
					<img src="images/test2.png">
					
				</div>



				<div class="text_box">

					
					<i><p>"Now I make 10,000 per year<br> by adding some stickers on<br> my car"</p></i>

					<img src="images/test3.png">
					
				</div>




				
			</div>
			
		</div>
		
	</div>





	
</div>







<!-- Footer section -->
<div class="footer" style="margin-top: 2%;">


<div class="row">
	<div class="col-md-6">
		<a href="#">signin or Register</a>
		<a href="#">AboutGlobalAdGuru</a>
		<a href="#">Safety Tips</a>
		<a href="#">Ad Posting Rules</a><br>

		<a href="#">Help</a>
		<a href="#">Our Services</a>
		<a href="#">Contact US</a>
		<a href="#">Terms of use</a>
		<a href="#">Privacy Policy </a>
		
	</div>	
<!-- Social media and Copy right -->

	<div class="col-md-6 col-md-4" id="social_media" style="text-align: center;">

		<div class="container_Social">
			<i class="fab fa-facebook-f"></i>

		</div>

		<div class="container_Social" style="margin-left: 7%;">
			<i class="fab fa-twitter"></i>
			
		</div>

		<div class="container_Social" style="margin-left: 15%;">
			<i class="fab fa-google-plus-g"></i>
			
		</div>

		<div class="container_Social" style="margin-left: 23%;">
			<i class="fab fa-linkedin-in"></i>
			
		</div>

		<br>

		<p>© Copyright 2014 GlobalAdGuru Pvt Ltd</p>

		
	</div>

</div>


</div>



<!-- Php Codes -->

<?php
$conn=mysqli_connect("localhost","root","","jatingiit");
$db=mysqli_select_db($conn,'jatingiit');

if (isset($_POST['insert'])) {

	 $Vtype = $_POST['vehiclesType'];
	 $subcategory=$_POST['subcategory'];
	 $make=$_POST['make'];

	 $cartype=$_POST['cartype'];

	 $condition=$_POST['condition'];
	 $Region=$_POST['Region'];

	 $messages=$_POST['msg'];

	 $filename = $_FILES['uploadfile']['name'];
  $tempname = $_FILES['uploadfile']['tmp_name'];
  $folder ="imagecar/".$filename;
  move_uploaded_file($tempname,$folder);



	 $query = "INSERT INTO `userscardata` (`VehicleType`,`SubCategory`,`make`,`cartype`,`condition`,`Region`,`information`,`image`) VALUES ('$Vtype','$subcategory','$make','$cartype','$condition','$Region','$messages','$folder')";
	 $query_run = mysqli_query($conn,$query);

	 if ($query_run){
	 ?>
	 <script>
	 	window.location = 'contact.php';
	 </script>

	 

	 <?php
	 }
	 else{
	 	echo "not working";
	 }


}




?>


</body>
</html>