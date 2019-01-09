<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <meta name="author" content="">
    <meta name="description" content="Task">
    <meta name="keywords" content="">
    <title>CBIR - Content Based Images Retrieval</title>
    <link rel="shortcut icon" href="gambar/favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <!-- popup -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
//CBIRselection.php
$target_dir = "uploads/";
//$fname=$_FILES['fileToUpload']['name'];
$fname="Gambar.jpg";

$target_file = $target_dir . "Gambar.jpg";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Pengecekan Gambar atau Bukan
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "</b><br>Query - " . $check["mime"] . ".</b>";
        $uploadOk = 1;
    } else {
        echo "<b><br>Query is not an image.</b>";
        $uploadOk = 0;
    }
}
// echo "<pre>";
// Pengecekan Gambar yang axist
if (file_exists($target_file)) {
   echo "<br><b> Query image name already exists.</b>";
    $uploadOk = 1;
}
// Pengecekan Ukuran File
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<br><b>Sorry, your image is too large.</b>";
    $uploadOk = 0;
}
// Pengecekan format gambar
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   //echo "<br><b>Sorry, only JPG, JPEG, PNG & GIF images are allowed.</b>";
  
    $uploadOk = 0;
}
// Pengecekan jika $uploadOk sama dengan 0
if ($uploadOk == 0) {
    echo "<br><b>Sorry, your image was not uploaded.</b>";
    echo"<br><b>Please try again</b>";
// Coba Upload Kembali
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br><b>The image ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</b>";
    } else {
        echo "<br><b>Sorry, there was an error uploading your image.</b>";
    }
}
?> 
<body>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="first_object"></div>
<div class="object" id="second_object"></div>
<div class="object" id="third_object"></div>
</div>
</div>
</div>

<?php
//matlabcall.php  
 mkdir("temporary");    
 set_time_limit(2000);
     $v1=0;
     $v2=0;
     $v3=0;
     $v4=0;
     $v5=0;
     $v6=0;     
     $v7=0;
     $v8=8;   
  //$fname=$_GET['filename'];
   $inputDir  = "C:\\xampp\\htdocs\\CBIR";
     $command = "matlab -sd ".$inputDir." -r cbir([".$v1.",".$v2.",".$v3.",".$v4.",".$v5.",".$v6.",".$v7.",".$v8."],'".$fname."')";
  exec($command);

for($i=1; $i<=120; $i++){
  if(file_exists("temporary")) {
    flush();
    sleep(1);
  }else{
?>  
<script type="text/javascript">
// javascript refresh
window.setTimeout(function(){
    location.href="tampil.php";
},0);
</script> 
<?php   
  break;} 
}
?>
</body>
</html>
