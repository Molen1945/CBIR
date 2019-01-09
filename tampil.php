<?php
//output.php
$dir = "retrieved/";

if($opendir = opendir($dir))
{
	$nama = array();
while(($file=readdir($opendir)) !==FALSE)
{
	if ($file!="."&&$file!=".."){
array_push($nama, $file);

//echo $nama[3]."<br>";
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.jeweltheme.com/inventory/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2017 02:26:36 GMT -->
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
<body>
    <!-- MAIN -->
 <div class="inv-header  inv-header2 ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <div class="inv-top-menus">
                    <div class="inv-top-menu">
                    </div>
                    <div class="top-menu-item top-menu-item-lang">
                    </div>
                    <div class="top-menu-item top-menu-item-lang">
                    </div>
                    <div class="top-menu-item top-menu-item-log">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 padd-lr0">
                <div class="wpc-navigation clearfix">
                    <div class="inv-logo">
                        <a href="index.html">
                            <img src="gambar/Logo2-Fix.png" alt="theme logo">
                        </a>
                    </div>
                    <nav>
                        <ul class="main-menu">
                            <li class="menu-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item active-menu-item">
                                <a href="listing.html">Listings</a>
                            </li>
                            <!-- <li class="menu-item ">
                                <a href="directory_explore.html">Explore</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog.html">Pages</a>
                            </li> -->
                            <li class="menu-item">
                                <a href="how-it-works.html">How It Works</a>
                            </li>
                        </ul>
                        <div class="nav-menu-icon"><i></i></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preload -->
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="first_object"></div>
<div class="object" id="second_object"></div>
<div class="object" id="third_object"></div>
</div>
</div>
</div>
<!-- //////////////////////// -->
<!--<div class="inv-listing2-map margin-lg-t140">
    <div class="wpc-map" data-lat="40.7143528" data-lng="-74.0059731" data-zoom="10" data-style="style-1" data-string="WPC string"></div>
</div>-->
        <div class="col-xs-2">
        </div>
            <div class="col-xs-8" style="padding:10px;margin-bottom:10px;margin-top:10px">
                <br/><br/><br/><br/><br/><br/><br/>
                <form style="padding:10px;margin-bottom:10px;margin-top:10px" onsubmit="return submitdata();" class="inv-start-form" method="post" name="contactform" action="proses.php" enctype="multipart/form-data">
                    <!--<label for="key" style="width:45%;">
                        <input id="key" type="text" style="width:100%;" placeholder="Masukkan Citra Query. . ." name="file_path" disabled="disabled">
                    </label>-->
                    <label for="key" >
                          <input style="background:#DCDCDC;width:20px;padding-top:20px;" type="file" name="fileToUpload" id="file" required>
                    </label>
                    <button style="margin-left:10px" type="submit" name="submit" id="btn"><i class="icon-magnifier icons"></i>Search Now</button>
                </form>              
            </div>
        <div class="col-xs-2">
        </div>
<div class="bg7">
    <div class="inv-listing-result inv-listing-result-js2 listpage inv-listing-result-style1">
        <div class="container padd-lr0">
         	<div class="inv-filter-item" data-value='100'>
                <div class="col-lg-4 col-sm-6 change-block-size">
                <div style="font-size:35px;">Query :</div> <br>
                    <div class="inv-places2-item">
                        <div class="inv-places2-head"><img src="uploads/Gambar.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <header class="inv-listing-header">
                        <h6 ><span>20 </span>Results Found</h6>
                        <div style="padding-top:15px;" class="inv-list-btn">
                            <a href="#" class="fa fa-th-list" data-list="inv-listing-result-style2"></a>
                            <a href="#" class="fa fa-th active" data-list="inv-listing-result-style1"></a>
                        </div>
                    </header>
                </div>
                <!--<div class="col-xs-12">
                    <div class="inv-filter-item" data-value='100'>
                        <div class="change-block-size col-lg-4 col-sm-6">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[0];?> " alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="change-block-size col-lg-4 col-sm-6">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[1];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[2];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[3];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[4];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[5];?> " alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[6];?>" alt=""></div>                
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[7];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[8];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[9];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[10];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[11];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[12];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[13];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[14];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[15];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[16];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[17];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                     <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[18];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[19];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                        <div class="col-lg-4 col-sm-6 change-block-size">
                            <div class="inv-places2-item">
                                <div class="inv-places2-head"><img src="retrieved/<?php echo $nama[20];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>-->
               	<div  class="col-xs-12">
               		<div class="inv-filter-item" data-value='100'>
               			<div class="col-lg-4 col-sm-6">
               				<div><img src="retrieved/<?php echo $nama[0];?>" alt=""></div> <br>
               			</div>
					</div>
					<div class="inv-filter-item" data-value='100'>
						<div class="col-lg-4 col-sm-6 change-block-size">
							<div><img src="retrieved/<?php echo $nama[1];?>" alt=""></div> <br>
						</div>
					</div>
					<div class="inv-filter-item" data-value='100'>
						<div class="col-lg-4 col-sm-6 change-block-size">
							<div><img src="retrieved/<?php echo $nama[2];?>" alt=""></div> <br>
						</div>	
					</div>
					<div class="inv-filter-item" data-value='100'>
						<div class="col-lg-4 col-sm-6 change-block-size">
							<div><img src="retrieved/<?php echo $nama[3];?>" alt=""></div> <br>
						</div>
					</div>
					<div class="inv-filter-item" data-value='100'>
						<div class="col-lg-4 col-sm-6 change-block-size">
 							<div><img src="retrieved/<?php echo $nama[4];?>" alt=""></div> <br>
 						</div>
 					</div>
 					<div class="inv-filter-item" data-value='100'>
 						<div class="col-lg-4 col-sm-6 change-block-size">
                 			<div><img src="retrieved/<?php echo $nama[5];?> " alt=""></div> <br>
                 		</div>
                 	</div>
                 	<div class="inv-filter-item" data-value='100'>
                 		<div class="col-lg-4 col-sm-6 change-block-size">
                   			<div><img src="retrieved/<?php echo $nama[6];?>" alt=""></div> <br>
                   		</div>  
                   	</div>
                   	<div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">              
                   			<div><img src="retrieved/<?php echo $nama[7];?>" alt=""></div> <br>
                   		</div>
                   	</div>
                   	<div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">
                   			<div><img src="retrieved/<?php echo $nama[8];?>" alt=""></div> <br>
                   		</div>
                   	</div> 
                   	<div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">
                   			<div><img src="retrieved/<?php echo $nama[9];?>" alt=""></div> <br>
                   		</div>
                   	</div>
                   	<div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[10];?>" alt=""></div> <br>
                    	</div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[11];?>" alt=""></div> <br>
                    	</div>
                    </div>
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[12];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[13];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[14];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[15];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[16];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[17];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                    	<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[18];?>" alt=""></div> <br>
                    	</div>
                    </div> 
                    <div class="inv-filter-item" data-value='100'>
                   		<div class="col-lg-4 col-sm-6 change-block-size">
                    		<div><img src="retrieved/<?php echo $nama[19];?>" alt=""></div> <br>
                    	</div>
                    </div>       
           		</div>
           	</div>
            <!--<div class="row">
                <div class="col-md-12">
                    <div class="text-center margin-lg-t55 margin-lg-b150 margin-sm-b100"><a href="#" class=" inv-btn2">More Results</a></div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- //////////////////////// -->
<!-- FOOTER -->
<div class="inv-copy bg-12">
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-xs-12">
                <span>&#169; CBIR-Content Based Images Retrieval 2017  | Developed By Maulana&Yustina Designed By Maulana</span>
                <nav class="soc-net">
                    <ul>
                        <li>
                            <a href="#"><img src="gambar/p1.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="gambar/p2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="gambar/p3.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="gambar/p4.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="gambar/p5.png" alt=""></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
    <!-- Scripts project -->
    <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- count -->
    <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbFz5lDPCTfnGzNrFB-fIfmZ69O41g-G8&amp;signed_in=true&amp;libraries=places,visualization"></script>
    <!-- swiper -->
    <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
    <!-- jQuery Responsive Thumbnail Gallery Plugin -->
    <script type="text/javascript" src="assets/js/responsivethumbnailgallery.js"></script>
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <!-- popup -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- rating -->
    <script type="text/javascript" src="assets/js/jquery.raty-fa.js"></script>
    <!-- izotop -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- slider -->
    <script type="text/javascript" src="assets/js/nouislider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.matchHeight.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
    <!-- sixth block end -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKhre23Aeb68ktJsbu0cxQOepgoVjDchskJunijMpEPML4oIuCxu1uHbRFkw5MYKcvsGQ9MBOdDrlBuogUWCbSOzDYZrvBHvfTxZ5IEUsF13MvQB6CKJnfBIa84f26yhwEagsXV3pKvPqu4rP2O2FfpIablJVLDQRytkgn18uiBPebpnW3RwTlZDDpzyYA0HOB1AzwPGd4bSazTU4R9eXSTZHB8B5B9aVKL57DIH1y0o%2fJarmd8MWBZt%2fTMnYJpBAHfasPrWIKE4MaZ9n%2bqwoSuKDvgMBHtbOLfNs4tq9ZJyOGVmOLnkuB9wfqzsFx1NQWYe%2fwDrxzXeDIgwr798a6%2fTvIEFwxMzax3UIJb%2fcdShHy97rOeMlREDH6bCYuKB72eGHMzSqtAPu4lZv7DjSKIzY%2f6S%2bWsH%2f3mCC19ad%2bCCPDVWUfBnqIazXZrGoc0%2bnvEvvvDfFZxei1fze%2f2nPeh3fR5WT7o6Uxh2uAlo5t8HWYeQrNG22isfQRTA8wpPkmMesaOGmhzgoeR3BZQROqDQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
function submitdata() { 
    var name = $('#file').val().split('\\').pop();
    var fuData = document.getElementById('file');
    var size = fuData.files[0].size;
    name=name.split('.')[1];
    if(size<500000){
        if(name=="JPG" || name=="jpg" || name=="PNG" || name=="png" || name=="JPEG" || name=="jpeg"){
        }
        else{
            alert("Query Is Not An Images!");
            return false;
        }
    }else{
        alert("Sorry, Your Query Is Too Large!");
            return false;
    }
}
</script>
</body>
<!-- Mirrored from demos.jeweltheme.com/inventory/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2017 02:27:11 GMT -->
</html>
