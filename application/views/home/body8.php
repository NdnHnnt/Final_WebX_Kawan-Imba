<body>
  <div class="row half-line" id="">
    <br><br>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_4.svg">
  </div>
<div class="row cust-text" style="padding: 2%;">
  <div class="col-sm-5">
    <img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Events/default2.jpg" >
  </div>
  <div class="col-sm font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). "index.php/homectl/createEvent")?>
      <div class="form-group row">
        <label for="nama_bisnis" class="col-sm-3 col-form-label col-form-label">Nama Acara</label>
        <div class="col-sm-8" >
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Acara" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Tanggal Berlangsung</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Acara" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="cat1" class="col-sm-3 col-form-label col-form-label">Tipe Acara</label>
        <div class="btn-group col-sm-8" style="text-align: flex-end;">
          <select class="btn btn-secondary btn-lg dropdown-toggle form-control"  name="type" id="type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">  
            
            <?php foreach ($eve as $item) { ?>
              <option class="dropdown-item form-control" id=type name=type value="<?php echo $item['type_id']; ?>"> <?php echo $item['type_des']; ?> </option>
            <?php } ?>
            
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Lokasi Acara</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Acara" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Deskripsi Acara</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="des" name="des" placeholder="Deskripsi Acara" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Nomor Kontak</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Telepon yang Dapat Dihubungi" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="Gambar" class="col-sm-3 col-form-label col-form-label">Foto Profil Bisnis</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="file" id="gambar" name="gambar"/>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Buat Acara"> <br>
      </div>
  </form>
  </div>
  </div>
  <div class="row">
    <br>
  </div>
 

