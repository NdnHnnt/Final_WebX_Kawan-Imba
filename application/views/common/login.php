<div class="row">
    <br><img class="title-img" src="<?php echo base_url()?>assets/images/index_16.svg">
</div>


<div>
  <div class="container-fluid center_div font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). 'index.php/welcome/checkingLogin')?>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-2 col-form-label col-form-label">Email Bisnis<span style="color: red;">*</span></label>
        <div class="col-sm-7" style="align-items: flex-end;">
          <input type="text" class="form-control" id="email" name="email" pattern="[^ @]*@[^ @]*" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label col-form-label">Kata Sandi<span style="color: red;">*</span></label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Masuk ke Swakarya"> <br>
    </div>
  </form>
  </div>
  <p align="center">Belum punya akun bisnis? masuk di<a href="<?php echo base_url() . 'index.php/welcome/signUp'; ?>"/> sini </a></p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!--
<div>
    <div class="center_div cust-text col-6" align="center">
      <?php echo form_open_multipart(base_url() . 'index.php/welcome/checkingLogin' ); ?>
        <table>
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
        </table>
        <input type="submit" value="Log in"> <br>
      <p align="center">Belum punya akun bisnis? Daftar di <a href="<?php echo base_url() . 'index.php/welcome/signUp'; ?>"/> sini </a></p>
      </div>
  <div>
-->              