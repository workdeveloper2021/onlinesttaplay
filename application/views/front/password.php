<?php
   include "common/css.php"

  ?> 
     <!-- FIRST SECTION START -->
<body class="transfer_full"> 
    <?php
      include "common/header.php"
    ?> 

     <!-- FIRST SECTION START -->

     <div class="">
        <div class="container-fluid ">
             <div class = "main_heading p-sm-4" >
                     
                <form  method="post" action="#" class="w-100 mt-sm-4 mt-2" >
                    <div class="form-group dark_section m-auto">
                        <label for="exampleFormControlInput1" class="font-weight-bold pr-1 text-success text-left label_pera">Change Password</label>
                        <div class ="input-group icon_section">
                            <input type="text" class="form-control border-light form_index" id="exampleFormControlInput1" placeholder="Current Password" name="number">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa  fa-eye" aria-hidden="true"></i></span>
                      </div>

                      <div class ="input-group icon_section mt-sm-3 mt-2" >
                            <input type="text" class="form-control border-light form_index" id="exampleFormControlInput1" placeholder="New Password" name="number">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa  fa-eye" aria-hidden="true"></i></span>
                      </div>
                    </div> 
                    

                    <div class="form-group text-center form_btn mt-3  ">
                    <a  href="#" class =" btn font-weight-bolder text-light">Next</a>
                  </div>
                    </form>
            </div>
        </div>   
     </div>            
</div>
</body>
</html>