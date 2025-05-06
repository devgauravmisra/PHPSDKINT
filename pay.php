<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
<body onload="payment()">
   <?php
      require "config.php";
      
      $orderDetails = array(
      
           'order_id' => 'OrderId_'.rand(),
           'order_amount' => $_POST['orderamount'],
           'order_note' => $_POST['ordernote'],
           'order_currency' => 'INR',
      );
      
      $customer_details = array(
           'customer_name' => $_POST['customername'],
           'customer_phone' => $_POST['mobile_number'],
           'customer_email' => $_POST['customeremail']
          
      );
     
      $order_meta = array(
            'return_url' => 'http://localhost:8888/v3apisdk/success.php?order_id={order_id}',
             'notify_url' => 'https://webhook.site/84cc1ef7-0e3c-4e36-9072-a607599c3857',
      
      );
      $custid = 'customer_'.rand();
      $custphone =   $customer_details['customer_phone'];
      $custname = $customer_details['customer_name'];
      $custemail= $customer_details['customer_email'];
      $cashfree = new \Cashfree\Cashfree();
      $create_orders_request = new \Cashfree\Model\CreateOrderRequest();
      $create_orders_request->setOrderAmount($orderDetails['order_amount']);
      $create_orders_request->setOrderCurrency("INR");
      $customer_details = new \Cashfree\Model\CustomerDetails();
      $customer_details->setCustomerId("$custid");
      $customer_details->setCustomerPhone($custphone );
      $customer_details->setCustomerEmail($custemail );
      $customer_details->setCustomerName( $custname );
      $create_orders_request->setCustomerDetails($customer_details);
      $create_orders_request->setOrderMeta($order_meta);
      try {
          $result = $cashfree->PGCreateOrder($x_api_version, $create_orders_request);
         
         $session =  $result['0']['payment_session_id'];
      } catch (Exception $e) {
          echo 'Exception when calling PGCreateOrder: ', $e->getMessage(), PHP_EOL;
      }
      ?>  
   <h4>Loading.....</h4>
   <span hidden class="order-token">Payment Session Id :</span> <input type="hidden" placeholder="order_token" id="paymentSessionId" value="<?php echo"$session";?>" class="inputText">

   <script>
      function payment() {
          const cashfree = Cashfree({
          mode:"sandbox" //or production
      });
      
      let checkoutOptions = {
          paymentSessionId: document.getElementById("paymentSessionId").value,
          redirectTarget: "_self " //optional (_self or _blank)
      }
      cashfree.checkout(checkoutOptions)
      };
   </script>
</body>