<?php
   include "common/css.php"

?> 
     <!-- FIRST SECTION START -->
<body> 
        <?php
            include "common/header.php"
        ?> 


        <div class = "main_heading px-sm-4 px-3" style="background-color: #7f1721!important;">
            <h2 class="text-capitalize text-light py-3">Wallet History</h2>
        </div>      

        <div class="container-sm">
            <form  method="post" action="#" class=" mt-sm-4 ">
               <div class="border border-secondary rounded p-sm-3 p-2 input_section">
                   <div class="form-group">
                     <label for="exampleFormControlInput1" class="font-weight-bold  text-left">From Date</label>
                     <input type="date" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter Here " name="amount">
                   </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1" class="font-weight-bold text-left">End Date</label>
                    <input type="date" class="form-control border-dark " id="exampleFormControlInput1" placeholder="Enter Here " name="amount">
                  </div>
                  
                  <div class="form-group text-center form_btn mt-3 border ">
                    <a  href="#" class =" btn font-weight-bolder text-light">Search</a>
                  </div>
               </div>
            </form>
        </div>

</body>
</html>