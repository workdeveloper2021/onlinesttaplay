<!DOCTYPE html>
<html>


  <header class="pre_header">
    <div class= "main_header bg-dark px-lg-4"  >
       <div class="container-fluid ">
 
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                   <!-- Brand -->
                   <a class="navbar-brand" href="#"><img src="<?= base_url()?>assets/image/logo.jpeg" alt="image" width = "80px"></a>
                 
                   <!-- Toggler/collapsibe Button -->
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                 
                   <!-- Navbar links -->
                   <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" >
                     <ul class="navbar-nav p-2">
                      <li class="nav-item">
                         <a class="nav-link text-light" href="<?= base_url()?>"><i class="fa fa-home pr-1" aria-hidden="true"></i><span> Home</span></a>
                      </li>
                      <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#">Wallet</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item " href="<?= base_url('add')?>"><i class="fa fa-plus-circle pr-1" aria-hidden="true"></i> Add Points</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-exchange pr-1" aria-hidden="true"></i> Withdraw Fund</a>
                            <a class="dropdown-item" href="<?= base_url('statemant')?>"><i class="fa fa-history pr-1" aria-hidden="true"></i> Wallet Statemant</a>
                            <a class="dropdown-item" href="<?= base_url('transfer')?>"><i class="fa fa-crosshairs pr-1" aria-hidden="true"></i> Transfer Points</a>
                          </div>
                      </li>
 
                      <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#"> My History</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item " href="<?= base_url('bid_his')?>"><i class="fa fa-history pr-1" aria-hidden="true"></i> Bid History</a>
                            <a class="dropdown-item" href="<?= base_url('winning')?>"><i class="fa fa-history pr-1" aria-hidden="true"></i> Winning History</a>
                          </div>
                      </li>
 
                      <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#"> Bank Account</a>
                          <div class="dropdown-menu">
                             <a class="dropdown-item " href="<?= base_url('paytm')?>"><i class="fa fa-credit-card pr-1" aria-hidden="true"></i> Manage PayTM</a>
                             <a class="dropdown-item" href="<?= base_url('phonepe')?>"><i class="fa fa-credit-card pr-1" aria-hidden="true"></i> Manage phonePe</a>
                            <a class="dropdown-item" href="<?= base_url('googlepay')?>"><i class="fa fa-credit-card pr-1" aria-hidden="true"></i> Manage Google Pay</a>
                          </div>
                      </li>
 
                      <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#">Others</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('game_rate')?>"><i class="fa fa-gamepad pr-1" aria-hidden="true"></i> Game Rate </a>
                            <a class="dropdown-item" href="<?= base_url('profile')?>"><i class="fa fa-user-circle-o pr-1" aria-hidden="true"></i> My profile </a>
                            <a class="dropdown-item" href="#"><i class="fa fa-compass pr-1" aria-hidden="true"></i> How To Play</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share-alt pr-1" aria-hidden="true"></i>  Share With Friends</a>
                            <a class="dropdown-item" href="<?= base_url('password')?>"><i class="fa fa-circle-o-notch pr-1" aria-hidden="true"></i> Change Password</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-lock pr-1" aria-hidden="true"></i> Logout</a>
                          </div>
                        </li>  
                       
                     </ul>
                   </div>
                 </nav>
                </div>
             </div>
       </header>
 
       <!-- END HEADER -->   