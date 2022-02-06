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
              