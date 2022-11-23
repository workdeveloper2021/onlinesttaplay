
<?php
   include "common/css.php"

?> 
     <!-- FIRST SECTION START -->
<body class="add_full"> 
        <?php
            include "common/header.php"
        ?> 

      <!-- FIRST SECTION START -->
      <section class="first_section">
         <div class = "slider_div">
            <div id="demo" class="carousel slide" data-ride="carousel">

               <!-- Indicators -->
               <ul class="carousel-indicators">
                 <li data-target="#demo" data-slide-to="0" class="active"></li>
                 <li data-target="#demo" data-slide-to="1"></li>
               </ul>
             
               <!-- The slideshow -->
               <div class="carousel-inner index_img">
                 <div class="carousel-item active">
                   <img src="<?= base_url();?>assets/image/laxmi1.jpg" alt="Los Angeles" class="img-fluid ">
                 </div>
                 <div class="carousel-item">
                   <img src="<?= base_url();?>assets/image/laxmi2.jpg" alt="Chicago"  class="img-fluid "> 
                 </div>
               </div>
             
               <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#demo" data-slide="prev">
                 <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#demo" data-slide="next">
                 <span class="carousel-control-next-icon"></span>
               </a>
             </div>
         </div>
      </section>
       <!-- FIRST SECTION END -->


      <section class = "second_section ">
         <div class = " bg-dark py-4">
            <div class= "container ">
               <div class="text-center contect pb-2"><a href ="wallet" class="font-weight-bold text-light"><i class="fa fa-whatsapp text-success pr-1" aria-hidden="true"></i> +91 70144 85150</a></div>
               <div class="row">
                  <div class="col-xl-3 col-md-4 col-6 my-2 intro_box">
                     <div class = "text-light border rounded p-2 text-center"><i class="fa fa-stack-overflow pr-1" aria-hidden="true"></i> Starline</div>
                  </div>
                  <div class="col-xl-3 col-md-4 col-6 my-2 intro_box">
                     <div class = "text-light border rounded p-2 text-center" > <i class="fa fa-phone-square pr-1" aria-hidden="true"></i> Wallet </div>
                  </div>
                  <div class="col-xl-3 col-md-4 col-6 my-2 intro_box">
                     <div class = "text-light border rounded p-2 text-center" ><i class="fa fa-plus-circle pr-1" aria-hidden="true"></i> Add Fund
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-4 col-6 my-2 intro_box">
                     <div class = "text-light border rounded p-2 text-center" > <i class="fa fa-cloud-download pr-1" aria-hidden="true"></i> Withdraw</div>
                  </div>
               </div>
            </div>
         </div>

   <div class="container">
      <div class = "game_contant">
         <div class = "row">

            <div class = "col-xl-3 col-md-4 col-6  my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6  my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6  my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6  my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-success text-light small m-0 record" >market is open. enjoy !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class = "col-xl-3 col-md-4 col-6 my-2 px-2">
               <div class="  text-uppercase border rounded p-2 text-center  bg-light">
                  <div class="heading_slide">
                     <p class=" small font-weight-bold m-0 py-2"> OPEN BID CLOSE TIME: 09:25 AM </p>
                     <span>STAR MORNING</span>
                     <h4 class="text-danger font-weight-bold">690-56-466</h4>
                  </div>
                  <p class = "bg-danger text-light small m-0 record" >market closed for today !</p>
                  <div class="row align-items-center mt-2 pl-2">
                     <div class="col-3">
                        <i class="fa fa-bar-chart text-primary icon_text" aria-hidden="true"></i>
                     </div>
                     <div class="col-9">
                        <p class="border border-primary rounded m-0 btn_text"> 
                           <a href="#" class="btn text-capitalize text-dark font-weight-bold small"><i class="fa fa-gamepad pr-1 text-info" aria-hidden="true"></i>play game</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>






</body>
</html>