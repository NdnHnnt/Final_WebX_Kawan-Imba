<body>
  <div class="row half-line" id="">
    <br><br>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_5.svg">
  </div>
<div class="row cust-text" style="padding: 2%;">
  <div class="col-sm-5">
    <img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Users/<?php echo $this->session->userdata('logged_in')["user_pic"]; ?>" >
  </div>
  <div class="col-sm font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). "index.php/homectl/editProfile")?>
      <div class="form-group row">
        <label for="nama_bisnis" class="col-sm-3 col-form-label col-form-label">Nama Bisnis</label>
        <div class="col-sm-8" >
          <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $this->session->userdata('logged_in')["user_nama"]; ?>" value="<?php echo $this->session->userdata('logged_in')["user_nama"]; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Email Bisnis</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="text" class="form-control" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $this->session->userdata('logged_in')["user_email"];?>" value="<?php echo $this->session->userdata('logged_in')["user_email"]; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Kata Sandi Baru</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Lokasi Bisnis</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="location" name="location" placeholder="Kota, Provinsi" value="<?php echo $this->session->userdata('logged_in')["user_loc"]; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="cat1" class="col-sm-3 col-form-label col-form-label">Kategori </label>
        <div class="btn-group col-sm-8" style="text-align: flex-end;">
          <select class="btn btn-secondary btn-lg dropdown-toggle form-control"  name="cat1" id="cat1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">  
            
            <?php foreach ($cat as $item) { ?>
              <option class="dropdown-item form-control" id=cat1 name=cat1 value="<?php echo $item['cat_id']; ?>"> <?php echo $item['cat_des']; ?> </option>
            <?php } ?>
            
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="instagram" class="col-sm-3 col-form-label col-form-label"><i class="fab fa-instagram cust-link2"> </i> Instagram</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Username Instagram" value="<?php echo $this->session->userdata('logged_in')["user_insta"]; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="whatsapp" class="col-sm-3 col-form-label col-form-label"><i class="fab fa-whatsapp cust-link2"> </i > WhatsApp</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="whatsapp" name="whatsapp"  placeholder="Kontak WhatsApp" value="<?php echo $this->session->userdata('logged_in')["user_wa"]; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="telegram" class="col-sm-3 col-form-label col-form-label"><i class="fab fa-telegram-plane cust-link2"> </i> Telegram</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="telegram" name="telegram"  placeholder="Kontak Telegram" value="<?php echo $this->session->userdata('logged_in')["user_telegram"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="link" class="col-sm-3 col-form-label col-form-label"><i class="fas fa-shopping-bag cust-link2"> </i> Tautan Toko</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="link" name="link"  placeholder="Tautan Online Shop" value="<?php echo $this->session->userdata('logged_in')["user_shop"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="descr" class="col-sm-3 col-form-label col-form-label">Deskripsi Bisnis</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="des" name="des"  placeholder="<?php echo $this->session->userdata('logged_in')["user_des"]; ?>" value="<?php echo $this->session->userdata('logged_in')["user_des"]; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="Gambar" class="col-sm-3 col-form-label col-form-label">Foto Profil Bisnis</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="file" id="gambar" name="gambar"/>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Update"> <br>
      </div>
  </form>
  </div>
  </div>
  <div class="row">
    <br>
  </div>
 

