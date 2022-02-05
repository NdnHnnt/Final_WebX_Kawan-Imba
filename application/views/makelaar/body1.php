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
                      <h6>Total user registered</h6>
                      <h4>
                        <?php
                        echo $this->CI->getUserNum();
                        ?>
                      </h4>
                      <h10><a href=#user>Click here to see user</a></h10>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Total task requested</h6>
                      <h4>
                      <?php
                        echo $this->CI->getTaskNum();
                        ?>
                      </h4>
                      <h10><a href=#tasks>Click here to see tasks</a></h10>
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
                      Makelaar Mode <br> Welcome! <br>
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

  <div id="user" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo base_url()?>assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>Users</h6>
            <h2>Here is the <em>List</em> of All<span> Users</span> in <br> E-Review</h2>
          </div>
          <div>
          <table  class="table1">
                <th>
                  <td class="table1">User ID</td>
                  <td class="table1">Username </td>
                  <td class="table1">Name</td>
                  <td class="table1">Email</td>
                <tr>
                  <?php $i=0;
                  if (sizeof($users)>0){
                    foreach ($users as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"><?php echo $item['id_user'] ?></td>
                  <td class="table1"><?php echo $item['username'] ?></td>
                  <td class="table1"> <?php echo $item['nama'] ?> </td>
                  <td class="table1"> <?php echo $item['email'] ?> </td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td colspan="5"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>
              <br>
          </div>
          <div class="main-green-button"><a href="makelaarctl/getDataUsers">See the Editors and Reviewers</a></div>
        </div>
      </div>
    </div>
  </div>

 