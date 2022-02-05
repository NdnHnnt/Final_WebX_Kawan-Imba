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
                        <?php echo $this->CI->viewNumTaskRequested(); ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Task on Progress</h6>
                      <h4>
                      <?php echo $this->CI->viewNumTaskOngoing(); ?>
                      </h4>
                      <h10><a href=#services>Click here to see tasks</a></h10>
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
                      <a href="reviewerctl/editProfile">Edit Profile</a>
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
                  <h4>Accept or Reject Task</h4>
                  <div class="line-dec"></div>
                  <p>First thing that you need to do as reviewer is accept or reject the task </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Review the Paper</h4>
                  <div class="line-dec"></div>
                  <p>Once you've accepted the task, you can work on it as soon as possible
                  </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Upload the Reviewed Paper</h4>
                  <div class="line-dec"></div>
                  <p>Once you've done reviewing a paper, please upload your paper <a href="#">here</a>, along with the price </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Confirm the Payment</h4>
                  <div class="line-dec"></div>
                  <p>If the editor has uploaded the proof of the transaction, <a href="">this table</a> is automatically updated along with the proof of transaction file. Please confirm the payment <a href="#">here</a></p>
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
            <h6>Task Assigned</h6>
            <h2>Here are the <em>List</em> of Requested <span>Tasks</span> by Our Editors</h2>
          </div>
          <table class="table1" border="1" ><center>
            <tr class="table1">
              <td class="table1"> ID Penugasan </td>
              <td class="table1"> Judul </td>
              <td class="table1"> Keywords </td>
              <td class="table1"> File Artikel </td>
              <td class="table1"> Status </td>
            </tr>
              <?php $i = 0;
              if (sizeof($tasked)>0){
                foreach($tasked as $item){
                    $i++; ?>
            <tr class="table1">
                <!-- harus sama dengan yang ada di database -->
                <td class="table1"><?php echo $item['id_penugasan']; ?></td> 
                <td class="table1"><?php echo $item['judul']; ?></td> 
                <td><?php echo $item['kata_kunci']; ?></td> 
                <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/downloadFile/',$item['file_penugasan']; ?>" target="_blank">
                 Download </a>
                </td>
                <td class="table1"><?php echo $item['penugasan_status']; ?></td>
                <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/acceptTask/',$item['id_penugasan'];?>" onclick="return func(0)"> Accept </a></td>
                <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/rejectTask/',$item['id_penugasan'];?>" onclick="return func(0)"> Reject </a></td>
            </tr>
            <?php }
              } else { ?>
            <tr class="table1">
                <td colspan="5"><?php echo 'Tidak terdapat penugasan'; ?></td>
            </tr>
            <?php } ?>
          </table>
          <br> <br>
          <div class="main-green-button"><a href="#">See Accepted Task</a></div>
        </div>
      </div>
    </div>
  </div>