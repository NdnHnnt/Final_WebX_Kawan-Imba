<div class="row">
    <br><img class="title-img" src="<?php echo base_url()?>assets/images/index_15.svg">
</div>

  <div>
  <div class="container-fluid center_div font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). "index.php/Welcome/signingUp")?>
      <div class="form-group row">
        <label for="nama_bisnis" class="col-sm-2 col-form-label col-form-label">Nama Bisnis<span style="color: red;">*</span></label>
        <div class="col-sm-7" >
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
      </div>
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
      <div class="form-group row">
        <label for="Gambar" class="col-sm-2 col-form-label col-form-label">Foto Profil Bisnis<span style="color: red;">*</span></label>
        <div class="col-sm-7" style="align-items: flex-end;">
          <input type="file" id="userfile" name="userfile"required/>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Daftarkan Bisnis Saya"> <br>
    </div>
  </form>
  </div>
  <p align="center"><br> *Foto Profil Bisnis maksimal berukuran 1000x1000 dan nama file tidak menggunakan spasi.<br>Sudah punya akun bisnis? masuk di<a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> sini </a></p>
  <br>
  <br>
  </div>