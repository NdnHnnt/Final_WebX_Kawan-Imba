
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
                      <input type="password" id="password" name="password" width="100" required/></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                      <input type="text" id="email" name="email" width="100" required/></td>
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