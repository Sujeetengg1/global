<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</style>
</head>
<body>
    

<?php

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
        } 
        else
        {
            $pageno = 1;
        }
        $no_of_records_per_page = 12;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","jatin","jatin","jatin");
        
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM new";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


        

        $sql = "SELECT * FROM `new` ORDER BY `vehicle_count`  DESC LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){

        

    




?>
       

<div class="container-fluid card col-md-3 my-3 bg-white text-dark">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="1" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><img src="<?php echo $row['images']?>" height="180"/>   <title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>
        <div class="card-body">
            <h5 class="card-title panel-title"><?php echo $row['vehicle_make'].' '.'In'.' '.$row['car_condition'].' '.'Condition'.''?></h5>
                     </div>
  
        <ul class="list-group">
            <li class=" list-group-item panel-title list-group-item-action ">Vehicle type :<?php echo $row['vehicle_type'] ?></li>
                <li class=" list-group-item panel-title">Catogery :<?php echo $row['vehicle_subcat']?></li>
                    <li class="list-group-item panel-title">Sub Catogery :<?php echo $row['vehicle_make']?></li>
                        <li class="list-group-item panel-title">Type :<?php echo $row['car_type_val']?></li>
                            <li class="list-group-item panel-title">Region :<?php echo $row['audience_region']?></li>
                                <li class="list-group-item panel-title">Average km :<?php echo $row['avg_km_per_month']?></li>
                                    <li class="list-group-item panel-title">Condition :<?php echo $row['car_condition']?></li>
                                <li class="list-group-item panel-title">Name :<?php echo $row['contact_name']?></li>
                            <li class="list-group-item panel-title">Email :<?php echo $row['contact_email']?></li>
                        <li class="list-group-item panel-title">Number :<?php echo $row['contact_number']?></li>
                    <li class="list-group-item panel-title">Address :<?php echo $row['address']?></li>
                                                                     
                   

            <!-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
            </div> -->
        </ul>
    </div>
</div>


<?php
}

?>
    
    </div>



<div class="footer col-md-12">
    <ul class="pagination pagination-lg">
        <div class="col-md-4"></div>
            <li><a href="?pageno=1">First</a></li>
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a> </li>
                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
            </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</div>


</body>
</html>
