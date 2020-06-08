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
	<link rel="stylesheet" type="text/css" href="css/displayuserdata.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

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



<!-- Options -->




<!-- Content -->

<div class="container" style="margin-top: 2%; ">

<!-- division for left pannel filters -->


<!-- <img src="images/ban.jpg" class="img-fluid" width="40" style="margin-left: 18em;"><img src="images/banA.jpg" width="40" class="img-fluid" style="margin-left: 2em;"> -->
<select style="position: absolute; right: 8.6%; top: 15%; height:40px; width: 200px;">
	<option>Most Recent Post</option>
	<option>Price Low to high</option>
	<option>Price High to low</option>
</select>


<div class="row" style="margin-top: 8%;">

	<div class="col-lg-3 text-center" id="images-extra">
<!-- 		<h1>Good morning</h1> -->
	<img src="images/boost yourself as a brand.png" class="img-fluid">
	<br>

	<img src="images/get your money macnet.png" class="img-fluid">
	<br>


	<img src="images/just place ads on your cars.jpg" class="img-fluid">
	<br>

	<img src="images/let global ad guru.png" class="img-fluid">
	<br>

	<img src="images/Red car theme.png" class="img-fluid">
	<br>
	</div>


<!--  
$sqlcar="SELECT * FROM ``carsdata";
       	$query_rundata=mysqli_query($coss,$sqlcar)
       	while($row = mysqli_fetch_array($res_data)){
       	 -->



   	

<!-- Division -->

	<div class="col-lg-9">

<!-- Php code -->

<?php
$conn=mysqli_connect("localhost","root","","jatingiit");
$db=mysqli_select_db($conn,'jatingiit');




$sql = "SELECT * FROM  `userscardata`";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){

?>

		
		<div class="outer-Box" style="border: solid;">

				<div class="image-from-user">
					<img src="<?php echo $row['image']?>" width=140>
					
				</div>

				<div class="text">

					<h4>Advertising on my Car</h4>
					<p><?php echo $row['information']?></p>
					
				</div>


				<div class="rate">
					<h5>Rs 500/month</h5>
					<h6>Bumpers+doors</h6>	
				</div>

			<div class="bottom-bar">

				<div class="bottom-bar-data"><span id="contact">&nbsp;<button id="view" style="
				color: #02026e; font-weight: bold; background-color: white; border: none; border-radius: 50px; width: 100px;">View more</button></div>


				
			</div>

			<br>



		<!-- Data to display after click -->

		<div class="click-data" style="margin-top: 20%; margin-left: 5%; ">
			<ul>
				<li>Region Driven:<span><?php echo $row['Region']?></span></li>
				<li>What You offer:<span>vehicle is parked in gurgaon</span></li>
				<li>Phone Number<span><?php echo $row['contact']?></span></li>
				<li>Address<span><?php echo $row['Address']?></span></li>
				<li>Sub-category:<span>Car</span></li>
				<li>Make<span><?php echo $row['make']?></span></li>
				<li>Model:<span><?php echo $row['cartype']?></span></li>
			</ul>
			
		</div>	
			
		</div>



		<!-- Jqueies Code -->

<script type="text/javascript">

	$(document).ready(function(){

		$("#view").click(function(){

			$(".outer-Box").css("height","400px");
			$(".image-from-user").css("top","5%");
			$(".text").css("top","5%");
			$(".image-from-user").css("top","5%");
			$(".click-data").css("marginTop","18%");

		});

		$("#view").dblclick(function(){

			$(".outer-Box").css("height","230px");
			$(".click-data").css("marginTop","20%");

		});

	});
	

</script>

<?php
}
mysqli_close($conn);
?>


<!-- Pagination -->


	<div class="container">

		<ul class="pagination pagination-lg">
			<li class="page-item"><a href="" class="page-link">Previous</a></li>
			<li class="page-item active"><a href="" class="page-link">1</a></li>
			<li class="page-item"><a href="" class="page-link">2</a></li>
			<li class="page-item"><a href="" class="page-link">3</a></li>
			<li class="page-item"><a href="" class="page-link">Next</a></li>
			
		</ul>
		
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


</body>
</html>
