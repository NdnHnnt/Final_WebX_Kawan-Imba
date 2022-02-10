<body>
  <div class="row" id="">
    <a class="back-img" href="<?php echo base_url()?>index.php/homectl"><img src="<?php echo base_url()?>assets/images/back.svg"></a>
  </div>
  <div class="row half-line" id="">
    <br><br>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_5.svg">
  </div>
  <div>
  <div class="container-fluid center_div font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). "index.php/homectl/editProfile")?>
      <div class="form-group row">
        <label for="nama_bisnis" class="col-sm-2 col-form-label col-form-label">Nama Bisnis</label>
        <div class="col-sm-7" >
          <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $this->session->userdata('logged_in')["user_nama"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-2 col-form-label col-form-label">Email Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;">
          <input type="text" class="form-control" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $this->session->userdata('logged_in')["user_email"];?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label col-form-label">Kata Sandi Baru</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label col-form-label">Lokasi Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="location" name="location" placeholder="<?php echo $this->session->userdata('logged_in')["user_loc"]; ?>">
        </div>
      </div>
<!--
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label col-form-label">Lokasi Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="location" name="location" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label col-form-label">Lokasi Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="location" name="location" required>
        </div>
      </div>
-->
      <div class="form-group row">
        <label for="instagram" class="col-sm-2 col-form-label col-form-label"><i class="fab fa-instagram cust-link2"> </i> Instagram</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="<?php echo $this->session->userdata('logged_in')["user_insta"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="whatsapp" class="col-sm-2 col-form-label col-form-label"><i class="fab fa-whatsapp cust-link2"> </i > WhatsApp</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="whatsapp" name="whatsapp"  placeholder="<?php echo $this->session->userdata('logged_in')["user_wa"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="telegram" class="col-sm-2 col-form-label col-form-label"><i class="fab fa-telegram-plane cust-link2"> </i> Telegram</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="telegram" name="telegram"  placeholder="<?php echo $this->session->userdata('logged_in')["user_telegram"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="link" class="col-sm-2 col-form-label col-form-label"><i class="fas fa-shopping-bag cust-link2"> </i> Tautan Toko</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="link" name="link"  placeholder="<?php echo $this->session->userdata('logged_in')["user_shop"]; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="descr" class="col-sm-2 col-form-label col-form-label">Deskripsi Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="des" name="des"  placeholder="<?php echo $this->session->userdata('logged_in')["user_des"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="Gambar" class="col-sm-2 col-form-label col-form-label">Foto Profil Bisnis</label>
        <div class="col-sm-7" style="align-items: flex-end;">
          <input type="file" id="gambar" name="gambar"/>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Update"> <br>
      </div>
  </form>
  </div>
  <p align="center">Sudah punya akun bisnis? masuk di<a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> sini </a></p>
  <br>
  </div>
  <div class="row">
    <br>
  </div>
  
  

