<?php
   include "common/css.php"

?> 
     <!-- FIRST SECTION START -->
     <body class="add_full"> 
        <?php
            include "common/header.php"
        ?> 

        <div class="container-fluid ">
             <div class = "main_heading p-sm-4" >
             <div class="row align-items-center reverse_contant rev_pera">
                         <div class="col-md-8">
                             <h2 class="pt-sm-0 pt-4">Welcome to <span class="text-capitalize font-weight-bold">kalyan kuber</span> </h2>
                         </div>
                         <div class="col-md-4">
                             <p class="font-weight-bold text-success number_pera"><i class="fa fa-whatsapp text-success" aria-hidden="true"></i> <span class="text-light"> +91-70144 85150</span>
                             </p>
                         </div>
                     </div>
                <form  method="post" action="#" class="w-100 mt-4" >
                    <div class="add_input">
                        <div class="form-group ">
                            <label for="exampleFormControlInput1" class="font-weight-bold pr-1 text-success text-left label_pera">Deposit       Amount</label>
                            <input type="text" class="form-control border-light border-danger" id="exampleFormControlInput1" placeholder="Enter Here" name="name">                            
                        </div>

                      <div class="btn_div text-center">
                        <div class="row px-2">
                        <div class="col-3 px-1 mt-2">
                            <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder">500</a></div>
                        </div>
                        <div class="col-3 px-1  mt-2">
                             <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder">1000</a></div>
                        </div>
                        <div class="col-3 px-1  mt-2">
                            <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder">2000</a></div>
                        </div>
                        <div class="col-3 px-1  mt-2">
                            <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder">5000</a></div>
                        </div>
                        <div class="col-4 px-1  mt-2">
                            <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder ">10,000</a></div>
                        </div>
                        <div class="col-4 px-1 mt-2 ">
                            <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder ">50,000</a></div>
                        </div>
                        <div class="col-4 px-1  mt-2">
                             <div class=" bg-light text-dark border rounded"><a href="#" class ="btn font-weight-bolder">1,00,000</a></div>
                        </div>
                       </div>
                       </div>                  
                </div>

                    <div class="adds_radio my-4 py-2 bg-warning text-center">
                        
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Google Pay</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio2">PayTM</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio3">PhonePe</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio4">Other</label>
                        </div>
                    </div>

                    

                    <div class="form-group text-center form_btn sub_btn mt-3 border ">
                    <a  href="#" class =" btn font-weight-bolder text-dark">Proceed</a>
                  </div>
                </form>
        </div> 
    </div>  
</body>
</html>