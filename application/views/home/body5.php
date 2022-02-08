<body>
  <div class="row" id="">
    <a class="back-img" href="<?php echo base_url()?>index.php/homectl"><img src="<?php echo base_url()?>assets/images/back.svg"></a>
  </div>
  <div class="row half-line" id="">
    <br><br>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_4.svg">
  </div>
  <div class="row"><center>
        <div class="col-lg-6">
            <?php echo form_open_multipart(base_url() . 'index.php/homectl/editProfile/');?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" >
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="bidangIlmu" class="col-sm-2 col-form-label">Ganti Bidang Ilmu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bidang" name="bidang" >
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="rekening" class="col-sm-2 col-form-label">Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rekening" name="rekening" >
                        </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3"> 
                                <img src="http://localhost/ereview/img/Users/" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <label for="Gambar" class="form-label"></label>
                                        <input class="form-control" type="file" id="gambar" name="gambar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end"></div>
                    <div class="col-sm">
                        <input class="btn btn-primary" type="submit" value="Upload">
                    </div>
            </form>
        </div>
    </div>
  <div class="row">
    <br>
  </div>
  
  

