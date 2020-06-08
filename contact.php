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
	<link rel="stylesheet" type="text/css" href="css/contact media.css">
	<link rel="stylesheet" type="text/css" href="Boot-css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Boot-css/bootstrap.min.css">

	<style type="text/css">
		label{
			font-size: 25px;
			margin-left: 15%;
		}
		input{

		}

		button{
			width: 130px;
			border: 2px solid #02384a;
			height: 40px;
			margin-left: 30%;
			border-radius: 50px;
			background-color: #ffc300;
			color: white;
			font-size: 20px;
			font-weight: bolder;
		}
	</style>


<?php  	
$conn=mysqli_connect("localhost","root","","jatingiit");
 if (mysqli_connect_errno()){
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
         die();
       }      
       $sql = "SELECT `id` FROM `userscardata` ORDER BY `userscardata`.`id`  DESC LIMIT 1";
        $res_data = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($res_data)){
                $idfield = $row['id'];
             	}
                ?>





                  





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

			<div class="col-md-8" id="left" style="height:550px;  background-color: white; ">

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


					<div class="select-categoriesA" style="background-color: grey">
								<img src="images/ca2.png"><span>Provide Resource Details</span>
								
					</div>


					<div class="select-categoriesA" style="background-color: #ffc300;">
								<img src="images/ca3.png"><span>Contact Details</span>
								
					</div>
					
				</div>


				<!-- Form Work -->
				<br>


	<form action="" method=post onsubmit="return dataconfirmation()">
		
		<label>Name</label><input type="text" name="Name" id="input1" placeholder="name" style="margin-left: 5%; width: 350px;"><br>
		<span id="statement1" style="font-size: 13px; color: red; margin-left: 15%; opacity: 0;">***Fill this field to submit data***</span><br>
		<label>Email</label><input type="" name="Email" id="input2"  placeholder="Email" style="margin-left: 6%; width: 350px;"><br>
		<label>Contact</label><input type="" name="Contact" id="input3" placeholder="Contact" style="margin-left: 2.5%; width: 350px;" ><br>
		<label>State</label>
		<select name="State" style="margin-left: 6.1%; width: 300px;">
			<option>Delhi</option>
			<option>Haryana</option>
			<option>Other</option>
			<option>Uttar Pardesh</option>
		</select><br>

		<label>City</label>
		<select name="City" style="margin-left: 8%; width: 300px;">
			<option>Select City</option>
			<option>Palwal</option>
			<option>Faridabad</option>
			<option>Gaziabaad</option>
		</select><br>
		<label>Address</label>
		<textarea name="Address" style="width: 350px; margin-left: 2%; height:100px; "></textarea>
		<pre><button>Back</button><button style="margin-left: 5%;" name="click" onclick="return dataconfirmation()" onclick="return dataconfirmation1()">Next</button></pre>

	</form>

</div>






<!-- right Section -->


			<div class="col-md-4" id="right" style="margin-top: -.8%;">
				<div class="text_box">

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



<script type="text/javascript">
	 
	function dataconfirmation(){
		var result=true;
		var a=document.getElementById("input1");	
		if ((a.value.length==0)) {
			document.getElementById("statement1").style.opacity="1";
		result=false;
		return result;

		}

	}


		
</script>

<?php

$conn=mysqli_connect("localhost","root","","jatingiit");
$connection=mysqli_select_db($conn,"jatingiit");

if(isset($_POST['click'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Contact=$_POST['Contact'];
	$State=$_POST['State'];
	$City=$_POST['City'];
	$Address=$_POST['Address'];

	// $query="INSERT INTO `userscardata`(`name`,`Email`,`contact`,`state`,`city`,`Address`) VALUES ('$Name','$Email','$Contact','$State','$City','$Address')";


$query="UPDATE userscardata SET name='$Name', Email='$Email',contact='$Contact',state='$State' ,city='$City' ,Address='$Address' WHERE id='$idfield'";
	$queryrun=mysqli_query($conn,$query);
	
	if ($queryrun){
	?>
	<script>
	 	window.location = 'Show user AD data.php';
	 </script>


<?php
}

	else {
		echo "Not working";
	}
}

?>


</body>
</html>