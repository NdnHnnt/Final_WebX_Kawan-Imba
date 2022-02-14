<div class="row">
    <br><img class="title-img" src="<?php echo base_url()?>assets/images/index_15.svg">
</div>

  <div>
  <div class="container-fluid center_div font-weight-bold" style="font-family: 'Amiko';">        
  <?php echo form_open_multipart(base_url(). "index.php/Welcome/signingUp")?>
      <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label cust-form-label">Nama Bisnis<span
            style="color:red">*</span></label>
          <div class="col-sm-9">
            <input type="text" class="form-control form-control-lg cust-form-input" id="username"
          name="username" placeholder="Nama Bisnis" required="required">
          </div>
      </div>
      <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label cust-form-label">Email Bisnis<span
            style="color:red">*</span></label>
          <div class="col-sm-9">
            <input type="email" class="form-control form-control-lg cust-form-input" id="email" name="email"
            placeholder="E-mail Bisnis" required="required">
          </div>
      </div>
      <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label cust-form-label">Kata Sandi<span
          style="color:red">*</span></label>
          <div class="col-sm-9">
            <input type="password" class="form-control form-control-lg cust-form-input" id="password"
            name="password" placeholder="Kata Sandi" required="required">
          </div>
      </div>
      <div class="form-group row">
        <label for="userfile" class="col-sm-3 col-form-label cust-form-label">Foto Profil Bisnis<span
          style="color:red">*</span></label>
        <div class="col-sm-9">
          <input type="file" id="userfile" name= "userfile" required="required" oninvalid="noFile()" hidden>
          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg cust-form-input"
            placeholder="Pilih Foto Profil Bisnis" id="file-chosen" disabled>
              <div class="input-group-append">
                <label class="input-group-text" for="userfile">Cari File</label>
              </div>
          </div>
          <span class="nofile-alert" id="nofile-choosen"></span>
          <script>
            const actualBtn = document.getElementById('userfile');
            const fileChosen = document.getElementById('file-chosen');
            actualBtn.addEventListener('change', function () {
              fileChosen.placeholder = this.files[0].name
            })
            function noFile() {
              const nofileChosen = document.getElementById('nofile-choosen');
              nofileChosen.textContent = "Silakan pilih foto profil bisnis terlebih dahulu";
            }
          </script>
        </div>
      </div>
      <div class="container-fluid center_div" align="center">
        <input class="btn cust-button4" type="submit" value="Daftarkan Bisnis Saya"> <br>
      </div>
      </form>
  </div>
  <p align="center"><br> *Foto Profil Bisnis maksimal berukuran 1000x1000 dan nama file tidak menggunakan spasi.<br>Sudah punya akun bisnis? masuk di<a href="<?php echo base_url() . 'index.php/welcome/login'; ?>"/> sini </a></p>
  </div>

  <div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
  </div>

  <div class="push"></div>
