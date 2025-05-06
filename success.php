<?Php 
   require "config.php";
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>V4 API</title>
   </head>
   <body style="background-color: #6933d3; color:white !important;">
     
    <div>
     <?php 
         $cashfree = new \Cashfree\Cashfree();
         $orderid = $_REQUEST['order_id'];
         $x_api_version = "2022-09-01";
         $order_ids =  $orderid;
         try {
         $result = $cashfree->PGFetchOrder($x_api_version, $order_ids);
         
         $orderEntity = $result[0];
         
         $orderStatus = $orderEntity->getOrderStatus();
         if( $orderStatus == "PAID"){
         
             echo "Transaction completed successfully and order status is Paid" ;
             echo "<br>";
             $orderAmount = $orderEntity->getOrderAmount(); 
             echo "Order Amount: $orderAmount";
             echo "<br>";
             $orderId = $orderEntity->getOrderId();
             echo "Order Id:  $orderId";
         }else{
         
             echo "Something went wrong" ;
             echo "<br>";
             $orderAmount = $orderEntity->getOrderAmount(); 
             echo "Order Amount: $orderAmount";
             echo "<br>";
             $orderId = $orderEntity->getOrderId();
             echo "Order Id:  $orderId";
         }
         echo $orderStatus; 
         } catch (Exception $e) {
         echo 'Exception when calling PGFetchOrder: ', $e->getMessage(), PHP_EOL;
         }?>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>