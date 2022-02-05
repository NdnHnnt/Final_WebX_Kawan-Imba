<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat" id="buttons">
                      <h6>Task Requested</h6>
                      <h4>
                        0
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Task on Work</h6>
                      <h4>
                        0
                      </h4>
                      <h10><a href=#>Click here to see reviewer</a></h10>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Username</h6>
                      <h4>
                      <?php echo $this->session->userdata('logged_in')["username"]; ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>
                      Reviewer Mode <br> Welcome! <br>
                      <?php echo $this->session->userdata('logged_in')["namalengkap"]; ?>
                    </h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#">Edit Profile</a>
                    </div>
                  </div>
                  <br> <br> <br> 
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                        <a href="Welcome/logout"> Log Out </a>
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
                  <h4>Assign Task</h4>
                  <div class="line-dec"></div>
                  <p>First thing that you need to do is upload your paper <a href="#services">here</a>, so the reviewer can fix it </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Keep yourself updated</h4>
                  <div class="line-dec"></div>
                  <p>Once you've requested a task, you can see the progress of your paper <a href="#about"> here </a>. Don't forget to check it!
                  </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Check your file!</h4>
                  <div class="line-dec"></div>
                  <p>Once the reviewers are done with your paper, they will send you the reviewed paper along with their bank account and price </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Pay</h4>
                  <div class="line-dec"></div>
                  <p>Please upload the proof of your transaction <a href="#">here</a> and wait until the reviewer approves it</p>
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
            <h6>Penugasan</h6>
            <h2>Berikut <em>ini</em> adalah <span>tugas</span></h2>
          </div>
          <table border="1">
            <tr>
              <td>ID Penugasan</td>
              <td>ID Editor</td>
              <td>Tanggal Penugasan</td>
              <td>Judul</td>
              <td>Keywords</td>
              <td>Penulis</td>
              <td>File Artikel</td>
              <td>Date Created</td>
              <td>Date Updated</td>
            </tr>
              <?php $i = 0;
              if (sizeof($Penugasan)>0){
                foreach($Penugasan as $item){
                    $i++; ?>
            <tr>
                <!-- harus sama dengan yang ada di database -->
                <td><?php echo $item['id_penugasan']; ?></td> 
                <td><?php echo $item['ID_Editor']; ?></td> 
                <td><?php echo $item['Tanggal_Penugasan']; ?></td>
                <td><?php echo $item['Judul']; ?></td>
                <td><?php echo $item['Kata_Kunci']; ?></td>
                <td><?php echo $item['Authors']; ?></td>
                <td><?php echo $item['File_Artikel']; ?></td> //di Controller
                <td><?php echo $item['Date_Created']; ?></td>
                <td><?php echo $item['Date_Updated']; ?></td>
            </tr>
            <?php }
              } else { ?>
            <tr>
                <td colspan="5"><?php echo 'Tidak terdapat penugasan'; ?></td>
            </tr>
            <?php } ?>
          </table>
          <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">SEO Dream</a> is free digital marketing CSS template provided by TemplateMo website. You are allowed to use this template for your business websites. Please DO NOT redistribute this template ZIP file on any Free CSS collection websites. You may contact us for more information. Thank you.</p>
          <div class="main-green-button"><a href="#">Discover company</a></div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Submit Review</h6>
            <h2>Please Click the <span>Button</span> Below for <em>Uploading</em> the Reviewed Paper</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
            <div class="main-green-button scroll-to-section"><center>
            <a href="reviewerctl/submitReview">Submit Review</a>
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
            <h6>Reviewers Available</h6>
            <h2>Here is <em>Our</em> Available <span>Reviewers</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <table class="reviewer_table">
                <th>
                  <td style="text-align: left;">Reviewer ID</td>
                  <td style="text-align: center;"> Name </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($reviewers)>0){
                    foreach ($reviewers as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td style="text-align: center;"> <?php echo $item['id_reviewer'] ?> </td>
                  <td style="text-align: center;"> <?php echo $item['nama'] ?> </td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td colspan="5"> <?php echo "Tidak ditemukan data" ?> </td>
                <tr>
                <?php } ?> 
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>