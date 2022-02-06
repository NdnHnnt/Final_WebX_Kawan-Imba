<div class="row">
    <br><img class="title-img" src="<?php echo base_url()?>assets/images/index_15.svg">
  </div>

  <div>
    <div class="center_div cust-text col-6" align="center">
        <?php echo form_open_multipart(base_url(). "index.php/Welcome/signingUp")?> 
          <table id="custom" align="center">
            <tr>
              <td class="font-weight-bold">Nama Bisnis<span style="color:red">*</span></td>
              <td>
                  <input type="text" id="username" name="username" width="50%" required/>
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Email Bisnis<span style="color:red">*</span></td>
              <td>
                <input type="text" id="email" name="email" width="50%" pattern="[^ @]*@[^ @]*" required/></td>
            </tr>
            <tr>
              <td class="font-weight-bold">Kata Sandi<span style="color:red">*</span></td>
              <td>
                <input type="password" id="password" name="password" width="50%" require_once/>
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Foto Profil Bisnis<span style="color:red">*</span></td>
              <td>
                <input type="file" id="userfile" name="userfile" width="50" required/></td>
              </tr>
          </table>
          <br>
          <input class="btn cust-button4"type="submit" value="Sign-Up"> <br>
          <p align="center">Sudah punya akun bisnis? masuk di<a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> sini </a></p>
    </div>
  <div>