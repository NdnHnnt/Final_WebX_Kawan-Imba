<body>
  <div class="row half-line" id="">
    <br><br>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_8.svg">
  </div>
<?php foreach ($this_event as $item)     {  ?>
<div class="row cust-text" style="padding: 2%;">
  <div class="col-sm-5">
    <img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Events/<?php echo $item['event_pic']?>" >
  </div>
  <div class="col-sm font-weight-bold" style="font-family: 'Amiko';">  
  
<?php echo form_open_multipart(base_url(). "index.php/homectl/editEvent/".$item['event_id']);?>
      <div class="form-group row">
        <label for="nama_bisnis" class="col-sm-3 col-form-label col-form-label">Nama Acara</label>
        <div class="col-sm-8" >
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Acara" value ="<?php echo $item['event_name']?>" required>
        </div>
      </div>

      <div class="form-group row">
      <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Tanggal Mulai</label>
        <div class="input-group date col-sm-8" style="align-items: flex-end;">
          <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
          </div>
        <input id ="tanggal-mulai" placeholder="Tanggal Acara Dimulai" type="text" class="form-control datepicker" name="tanggal-mulai" value="<?php echo $item['event_date_start'];?>" required>
        </div>
      </div>

      <div class="form-group row">
      <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Tanggal Akhir</label>
        <div class="input-group date col-sm-8" style="align-items: flex-end;">
          <div class="input-group-addon">
           <span class="glyphicon glyphicon-th"></span>
          </div>
        <input id ="tanggal-akhir" placeholder="Tanggal Acara Berakhir" type="text" class="form-control datepicker" name="tanggal-akhir" value="<?php echo $item['event_date_end'];?>" required>
        </div>
      </div>
      <!-- <div class="form-group row">
        <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Tanggal Berlangsung</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Acara" value ="<?php echo $item['event_date']?>"required>
        </div>
      </div> -->
      <div class="form-group row">
        <label for="cat1" class="col-sm-3 col-form-label col-form-label">Tipe Acara</label>
        <div class="btn-group col-sm-8" style="text-align: flex-end;">
          <select class="btn btn-secondary btn-lg dropdown-toggle form-control"  name="type" id="type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">  
              <option class="dropdown-item form-control" id=type name=type value="1"> Tidak Langsung </option>
              <option class="dropdown-item form-control" id=type name=type value="2"> Langsung </option>
              <option class="dropdown-item form-control" id=type name=type value="3"> Langsung & Tidak Langsung </option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="email_bisnis" class="col-sm-3 col-form-label col-form-label">Lokasi Acara</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Acara" value ="<?php echo $item['event_loc']?>"required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Deskripsi Acara</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="des" name="des" placeholder="Deskripsi Acara" value ="<?php echo $item['event_des']?>"required>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label col-form-label">Nomor Kontak</label>
        <div class="col-sm-8" style="align-items: flex-end;" >
          <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Telepon yang Dapat Dihubungi" value ="<?php echo $item['event_contact']?>" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="Gambar" class="col-sm-3 col-form-label col-form-label">Foto Acara</label>
        <div class="col-sm-8" style="align-items: flex-end;">
          <input type="file" id="gambar" name="gambar"/>
        </div>
      </div>
     <div class="container-fluid center_div" align="center">
      <input class="btn cust-button4" type="submit" value="Ubah Acara"> <br>
      </div>
  </form>
  <?php } ?>
  <p><br>*Foto Poster Acara maksimal berukuran 1000x1000 dan nama file tidak menggunakan spasi.</p>
</div>
  </div>
  <div class="row">
    <br>
  </div>
 

