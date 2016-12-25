<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>
 
	<div class="container" >
        <?php if(@$msg){ ?>
		<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
          <?=$msg?>
        </div>
		
	<?php 	} ?>
    <div class="panel panel-default">
    <form method="post" action="" >
      <!-- Panel of the ordered items in cart -->
      <div class="panel-heading">Your order </div>
      
    
      <!-- Table -->
		<table class="table"> 
        	<thead>
            	 <tr> <th>#</th> <th>item name</th> <th>quantity</th> <th>price</th></tr> 
            </thead>
             
            <tbody> 
            <?php if ($items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
				$n = 1;
				$total = 0;
				while($item = mysqli_fetch_array($cart_data)){
					
				 ?>
                <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> </tr>
                <?php
				$n++;
				$total +=$item['price'];
				 }}?>
 
            </tbody> 
            <tfoot>
            	 <tr> <th>#</th> <th>total</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> </tr>
            </tfoot>
		</table>
        <div class="panel-heading">Please fill you order detail</div>
        
        <table class="table"> 
<!--        	<thead>
            	 <tr> <th>#</th> <th>item name</th> <th>quantity</th> <th>price</th></tr> 
            </thead>   -->
             
            <tbody> 

                <tr> <th scope="row">Name</td> <td><input type="text"  name="ship_name" placeholder="name"></td>  </tr>
                <tr> <th scope="row">Email</td> <td><input type="email"  name="email" placeholder="email"></td>  </tr>
                <tr> <th scope="row">Phone</td> <td><input type="text"  name="phone" placeholder="phone"></td>  </tr>
                <!--<tr> <th scope="row">State</td> <td><input type="text"  name="ship_state" placeholder="ship_state"></td>  </tr>-->
                <tr> <th scope="row">City</td> <td><input type="text"  name="ship_city" placeholder="ship_city"></td>  </tr>
                <tr> <th scope="row">Street</td> <td><input type="text"  name="ship_street" placeholder="ship_street"></td>  </tr>
              </tbody> 
            
		</table>
        <div class="panel-body btn-group btn-group-justified">
        <div class="panel-footer" >
        	<div class="btn-group col-md-4" role="group">
            
              <a href="cart.php"><span class="btn btn-default col-md-8" >items page</span></a>
 
          </div>
          <div class="btn-group col-md-4" role="group">
          <button type="submit" name="save_order" class="btn btn-default col-md-8"  >submit order</button>
          	
          </div>

          </div>
          </div>
          </form>
        
      </div>
    </div>
    
    </div>
