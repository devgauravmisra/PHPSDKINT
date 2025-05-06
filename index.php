<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>V4 SDK Demo</title>
   </head>
   <body style="background-color: #6933d3; color:white !important;">
      <div class="row">
         <div class="col-md-4">
            <h3 style="margin-top: 50% !important; text-align: center;">Cashfree SDK Integration Kit</h3>
         </div>
         <div class="col-md-4" style="float: right !important;">
            <div class="container" style="margin-top: 19% !important;margin-left: 25% !important;  padding: 7%; border-style: dotted; border-color: white !important; box-shadow: 1px 2px 11px 5px white !important;">
               <form method="post" action="pay.php">
                  <div class="md-4">
                     <div class="col">
                        <div class="form-outline">
                           <label class="form-label" for="form6Example2">Amount</label>
                           <input type="text" id="form6Example2" name="orderamount" class="form-control"
                              placeholder="Please enter Amount" required />
                        </div>
                     </div>
                  </div>
                  <div class="mb-4">
                     <div class="col">
                        <div class="form-outline">
                           <label class="form-label" for="form6Example1">Order Note</label>
                           <input type="text" id="form6Example1" name="ordernote" class="form-control"
                              placeholder="Please enter Order Note" required />
                        </div>
                     </div>
                     <div class="mb-4">
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example2">Customer name</label>
                              <input type="text" id="form6Example2" name="customername" class="form-control"
                                 placeholder="Please enter Customer Name" required />
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-outline">
                              <label class="form-label" for="form6Example1">Customer Email</label>
                              <input type="email" id="form6Example1" name="customeremail" class="form-control"
                                 placeholder="Please enter Customer Email" required />
                           </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form6Example1111">Customer Mobile No</label>
                        <input type="tel" id="form6Example1111" name="mobile_number" class="form-control" placeholder="Please enter Customer Mobile No" pattern="[789][0-9]{9}" title="Mobile number must start with 7, 8, or 9 and be 10 digits long." required />
                        </div>

                        </div>
                     </div>
                  </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
               </form>
            </div>
         </div>
      </div>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>