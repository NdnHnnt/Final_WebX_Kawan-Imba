<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo base_url()?>assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>Sign Up Succeed</h6>
            <h2>Please <em>Log In</em> to Use Our <span>Services</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>
                <?php
                  echo $this->CI->viewListUsers() ;
                ?>
                </h4>
                <h6>User Registered</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>
                <?php
                  echo $this->CI->viewListEditors() ;
                ?>
                </h4>
                <h6>Editor Registered</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>
                <?php
                  echo $this->CI->viewListReviewers() ;
                ?>
                </h4>
                <h6>Reviewer Registered</h6>
              </div>
            </div>
          </div>
          <p>
              We are grateful to have you here^^
            </p>
          <div class="main-green-button"><a href="<?php echo base_url() . 'index.php/welcome/login'; ?>">Log In</a></div>
        </div>
      </div>
    </div>
  </div>
