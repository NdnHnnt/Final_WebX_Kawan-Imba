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
                      <h6>Reviewer Availability:</h6>
                      <h4>
                        <?php
                        if (($this->CI->viewNumReviewers())>0)
                          echo "Available";
                        else 
                          echo "Unavailable";
                        ?>
                      </h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Reviewer Available:</h6>
                      <h4>
                        <?php
                            echo $this->CI->viewNumReviewers() ;
                        ?>
                      </h4>
                      <h10><a href=#portfolio>Click here to see reviewer</a></h10>
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
                      Editor Mode <br> Welcome! <br>
                      <?php echo $this->session->userdata('logged_in')["namalengkap"]; ?>
                    </h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                        <a href="Welcome/logout">
                          Log Out
                        </a>
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
            <h6>Tasks</h6>
            <h2>Here is the <em>List</em> of the task that <span>you've</span> requested</h2>
          </div>
          <div>
          <table class=table1 >
                <th class="table1">
                  <td class="table1">Number</td>
                  <td class="table1"> Reviewer ID </td>
                  <td class="table1"> Title </td>
                  <td class="table1"> Keywords </td>
                  <td class="table1"> File </td>
                  <td class="table1"> Status </td>
                <tr class="table1">
                  <?php $i=0;
                  if (sizeof($task)>0){
                    foreach ($task as $item) {
                    $i++; ?>
                <tr class="table1">
                  <td></td>
                  <td class="table1"> <?php echo $i ?> </td>
                  <td class="table1"><?php echo $item['id_reviewer'] ?></td>
                  <td class="table1"> <?php echo $item['judul'] ?> </td>
                  <td class="table1"> <?php echo $item['kata_kunci'] ?> </td>
                  <td class="table1"><a href="<?php echo base_url().'index.php/editorctl/downloadFile/',$item['file_penugasan']; ?>" target="_blank">
                Download</a>
                    </td>
                    <td class="table1">
                    <?php
                      $temp = $item['penugasan_status'];
                      if ($temp == 0){
                        echo "Requested";
                      }
                      elseif ($temp == 1){
                        echo "Accepted, on Progress";
                      }
                      elseif ($temp == 2){
                        echo "Rejected";
                      }
                      elseif ($temp == 3){
                        echo "Waiting for Payment";
                      }
                      elseif ($temp == 4){
                        echo "Waiting for Reviewer's Confirmation";
                      }
                      elseif ($temp == 5){
                        echo "Done";
                      }
                      ?>
                  </td>
                <tr class="table1">
                  <?php } 
                  }
                  else { ?>
                <tr class="table1">
                  <td colspan="6"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>
              <br>
          </div>
          <div class="main-green-button"><a href="#services">Request more task!</a></div>
          <br> 
          <div class="main-green-button"><a href="editorctl/viewTaskRequested">See Reviewed Task</a></div>
        </div>
      </div>
    </div>
  </div>

 