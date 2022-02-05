<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>User Registered</h6>
                      <h4>
                      <?php
                        echo $this->CI->viewListUsers() ;
                      ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Reviewer Registered</h6>
                      <h4>
                      <?php
                        echo $this->CI->viewListReviewers() ;
                      ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Editor Registered</h6>
                      <h4>
                      <?php
                        echo $this->CI->viewListEditors() ;
                      ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>E-Review <br> Landing Page</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">Join Us!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo base_url()?>assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>01</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Register Yourself</h4>
                  <div class="line-dec"></div>
                  <p>Before using our service, Make sure you have an account or register yourself.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <a href="#contact">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Fill out the form </h4>
                  <div class="line-dec"></div>
                  <p>Be it an editor or reviewer, you have to fill out our form before accepting or requesting a project.</p>
                </div>
                </a>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>You're set!</h4>
                  <div class="line-dec"></div>
                  <p>Once you've done the previous task, you're set to do your things</a> a little.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Check Your Progress</h4>
                  <div class="line-dec"></div>
                  <p>Please check your tables regularly, since we'll keep you updated with it</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="skills-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="progress" data-percentage="50">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        50%<br>
                        <span>PHP</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="progress" data-percentage="20">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        20%<br>
                        <span>SQL</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="progress" data-percentage="20">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        20%<br>
                        <span>HTML & CSS</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item last-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="progress" data-percentage="10">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        10%<br>
                        <span>JavaScript</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
            <h6>About Us</h6>
            <h2>Kelompok <span>Lima</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>4</h4>
                <h6>Members</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>1</h4>
                <h6>Project</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>E-Review</h4>
                <h6>Current Project</h6>
              </div>
            </div>
          </div>
            <p>
            Kelompok Lima is formed for the purpose of fulfilling our web technology project as well as sharing our knowledge within the subject.
              <br>
            Our current members are: <br>
            - Muhammad Firdho Kustiawan (5027201005) <br>
            - Nadine Haninta (5027201014) <br>
            - Sharira Saniane (5027201016) <br>
            - Rayhan Kurnia Alunantara Wijaya (5027201030)
            </p>
          <div class="main-green-button"><a href="#contact">Participate in Our Project</a></div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>E-Review</h6>
            <h2>Discover What E-Review <span>Offer</span> To Our <em>Users</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Help you fix your paper</h4>
                  <p>Be it a student or expert, surely you need to write a good paper. Here, we'll help you with it!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Find a reliable reviewer</h4>
                  <p>You might find yourself a reliable reviewer, not closing the possibility of working together in a near future</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Seeing your paper in different view</h4>
                  <p>We tend to have different perspective about a certain topic. Here, we connect you with many people who might be interested in same topic.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Extra</h6>
            <h2>Check <em>Our</em> Sliding <span>Gallery</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 101</h4></a>
                      <span>Marketing</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 102</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-02.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 103</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-05.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 104</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-03.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 105</h4></a>
                      <span>Branding</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-06.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 106</h4></a>
                      <span>Artwork</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-04.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 107</h4></a>
                      <span>Creative</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo base_url()?>assets/images/portfolio-01.jpg" alt="">
                  <div class="hover-content">
                    <div class="inner-content">
                      <a href="#"><h4>Awesome Project 108</h4></a>
                      <span>Consulting</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div>
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6><br>Join Us</h6>
                  <h2>Fill Out The Form Below To <span>Use</span> Our <em>Services</em> Here</h2>
                </div>
              </div>
              <div class="col-lg-9">
              <div class="row" align="center">
              <?php echo form_open_multipart(base_url(). "index.php/Welcome/signingUp")?> 
                <table id="custom">
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" id="nama" name="nama" width="100" required/></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>
                      <input type="text" id="username" name="username" width="100" required/></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>
                      <input type="password" id="password" name="password" width="100" require_once/></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                      <input type="text" id="email" name="email" width="100" pattern="[^ @]*@[^ @]*" required/></td>
                  </tr>
                  <tr>
                      <td>Roles</td>
                      <td>
                        <input type="checkbox" id="editor" name="roles[]" value="1" checked/>Editor <br>
                        <input type="checkbox" id="editor" name="roles[]" value="2"/>Reviewer
                      </td>
                  </tr>
                  <tr>
                    <td>Photo</td>
                    <td>
                      <input type="file" id="userfile" name="userfile" width="50" required/></td>
                  </tr>
                </table>
                    <input type="submit" value="Sign-Up"> <br>
                    <p align="center">Alreade have an account? please <a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> Log In </a></p>
              </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">makelaar@ereview.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">+62-0888-7821-9721</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">Institut Teknologi Sepuluh Nopember Surabaya</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>