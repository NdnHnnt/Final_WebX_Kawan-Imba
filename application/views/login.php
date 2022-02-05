<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div>
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6><br>Join Us</h6>
                  <h2>You should <span>log in</span> to <em>the systen</em> before you can submit or review to any article</h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div align="center">
                    <?php echo form_open_multipart(base_url() . 'index.php/welcome/checkingLogin' ); ?>
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" id="username" name="username" width="100" required/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" id="password" name="password" width="100" required/></td>
                            </tr>
                        </table>
                <input type="submit" value="Log in"> <br>
                <p align="center">Don't have an account? please <a href="<?php echo base_url() . 'index.php/welcome/signUp'; ?>"/> Sign up </a></p>
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