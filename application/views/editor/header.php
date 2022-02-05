<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>E-Review!</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.css">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="welcome" class="logo">
              <h4>E-Review <img src="<?php echo base_url()?>assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Status</a></li>
              <!--<li class="scroll-to-section"><a href="#features">Brief Info</a></li> -->
              <li class="scroll-to-section"><a href="#about">Task Asigned</a></li>
              <li class="scroll-to-section"><a href="#services">Task & Payment</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Reviewers Available</a></li>
              <li class="scroll-to-section">
              <div id="arraysize" style="display: none;">
              <?php
              $print = $this->CI->selectedRoles();
              echo htmlspecialchars($print);
              ?>
              </div>
              <button id="selection" class="dropbtn" onclick="dropdown();"> Switch Mode </button>
              <div id="dropdown-content" class="hide">
                  <a class="hide2" href="editorctl">Editor</a>
                  <a class="hide2" href="reviewerctl">Reviewer</a>
            </li> 
              <li class="scroll-to-section"><div class="main-blue-button"><a href="#buttons"><?php echo $this->session->userdata('logged_in')["namalengkap"]; ?></a></div></li>      
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
          var div = document.getElementById("arraysize"); 
          var ArraySize = div.textContent;
            if(ArraySize == 2){
              $("#selection").show();
            }
            else{
              $("#selection").hide();
            }
        });
        var drop = document.getElementById("dropdown-content");
        function dropdown(){
          if(drop.className=="hide"){
            drop.className="show";
            }
          else{
            drop.className="hide";
            }
          }
      </script>
  </header>  
<!-- ***** Header Area End ***** -->