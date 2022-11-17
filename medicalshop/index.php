<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>
<body class="container">
    <h1 class="text-center text-danger mb-5"
    style="font-family: 'Abril Fatface',cursive;">SOUMYADIP'S ONLINE MEDICAL BOOKING STORE</h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'online_medical');

$query="SELECT  `Name`,`Medicine`, `Med_img`, 'Price', 'Discount' FROM `online_medical` order by Email_ID ASC" ;
$queryfire=mysqli_query($con,$query);
$num=mysqli_num_rows($queryfire);
if($num>0){
    while($product=mysqli_fetch_array($queryfire)){
        ?>
       <div class="col-lg-3 col-md-3 col-sm-12">
        <form>
            <div class="card">
                <h6 class="card-title"> <?php echo $product['Medicine']; ?> </h6>
                <div class="card-body">
                    <img src="<?php echo $product['Med_img']; ?>" alt="phone" class="img-fluid">
                <h6>&#8377; <?php echo $product['Price']; ?>
                <span><?php echo $product['Discount'];?></span></h6>   
    </div>
    </div>
    </form>
    </div> 
<?php   
}
}
?>
</div>
</body>
</html>