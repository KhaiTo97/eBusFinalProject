<?php
include_once "/home/s3568988/public_html/setting/config.php";
include_once "/home/s3568988/public_html/setting/mysql_config.php";
?>

<div class="container">
  <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Keyboard</a>
                    <a href="#" class="list-group-item">Keycap</a>
                    <a href="#" class="list-group-item">Others</a>
                    
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keyboard/filco3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/keycap/carbon2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://mekong1.rmit.edu.vn/~s3568988/page/mainpage/items/img/others/zealio3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
<?php
// SQL Select Item
/* From This 
$a = mysqli_query($connect5, "SELECT * FROM cc");
$b = mysqli_num_rows($a);
if ($b > 0){
	while ($c = mysqli_fetch_array($a)){
		$vl[0] = $a['Column GI do'];
		$vl[1] = $a['Column GI do'];
		$vl[2] = $a['Column GI do'];
		$vl[3] = $a['Column GI do'];
		
		$thisdisplay = '<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">'.$vl[0].'</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com '.$vl[1].'</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
';
	
		$finaldisplay += $thisdisplay;
	}
}else{
	$finaldisplay = "There is no item to get";	
}

echo $finaldisplay;	

To This*/
/*$numberOfItem = 1;

$display = '
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


';

for($x = 0; $x < $numberOfItem; $x++){
echo $display; 	
}

*/
?>
<?php
include_once $phppath_s."page/mainpage/items/item_list.php";
include_once $phppath_s."page/mainpage/items/cart_template.php"
?>                    

                    

                </div>

            </div>

        </div>

</div>