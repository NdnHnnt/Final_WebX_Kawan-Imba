<div id="contact" class="contact-us section" color="white">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" method="post" action="<?php echo base_url(). 'index.php/Welcome/signingUp';?>">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Contact Us</h6>
                  <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="nama" name="nama" id="nama" placeholder="Name" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="username" name="username" id="username" placeholder="Username" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="password" name="password" id="password" placeholder="Password">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <input type="checkbox" id="editor" name="roles[]" value="1" checked/>Editor <br>
                        <input type="checkbox" id="editor" name="roles[]" value="2"/>Reviewer
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                        <input type="file" id="userfile" name="userfile" width="50"/></td>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Sign Up</button>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">info@company.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">+001-002-0034</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?php echo base_url()?>assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">26th Street, Digital Villa</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
              <div class="col-lg-9">
              <div class="row" align="center">
              <?php echo form_open_multipart(base_url(). "index.php/Welcome/signingUp")?> 
                <table id="custom">
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" id="nama" name="nama" width="100"/></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>
                      <input type="text" id="username" name="username" width="100"/></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>
                      <input type="password" id="password" name="password" width="100"/></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                      <input type="text" id="email" name="email" width="100"/></td>
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
                      <input type="file" id="userfile" name="userfile" width="50"/></td>
                  </tr>
                </table>
                    <input type="submit" value="Sign-Up"> <br>
                    <p align="center">Alreade have an account? please <a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> Log In </a></p>
              </div>
              </div>