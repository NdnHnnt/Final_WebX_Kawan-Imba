<body>

	<div class="content">

		<div>
			<br><img class="title-img" src="<?php echo base_url() ?>assets/images/index_16.svg">
		</div>


		<div>
			<div class="container-fluid center_div cust-text col-6" align="center">
				<?php echo form_open_multipart(base_url() . 'index.php/welcome/checkingLogin') ?>
				<div class="form-group row">
					<label for="inputEmail" class="col-sm-3 col-form-label cust-form-label">Email Bisnis<span style="color:red">*</span></label>
					<div class="col-sm-9">
						<input type="email" class="form-control form-control-lg cust-form-input" name="email" id="email" placeholder="E-mail Bisnis" required="required">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-3 col-form-label cust-form-label">Kata Sandi<span style="color:red">*</span></label>
					<div class="col-sm-9">
						<input type="password" class="form-control form-control-lg cust-form-input" name="password" id="password" placeholder="Kata Sandi" required="required">
					</div>
				</div>
				<input class="btn cust-button4 btn-lg" type="submit" value="Masuk ke Swakarya">
				</form>
				<br>
			</div>
			<p align="center" style="color: #383E56; font-weight: bold; font-size: 24px;">Belum punya akun Swakarya? Daftar di <a class="cust-link3" href="<?php echo base_url() . 'index.php/welcome/signUp'; ?>" /> sini </a>
			</p>
		</div>
		<div>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</div>

		<div class="push"></div>

	</div>

	<footer class="footer flex-shrink-0 cust-footer">
		<div class="container cust-footer">
			<br>
			<div class="row cust-footer">
				<div class="col-lg-4 col-md-6 cust-footer">
					<h5><strong>Kawan Imba</strong></h5>
					<p class="small">Sebuah kelompok mahasiswa yang ingin membantu usaha UMKM dalam
						mengikuti
						perkembangan teknologi.</p>
				</div>
				<div class="col-lg-2 col-md-6 cust-footer">
					<h5 class="mb-3"><strong>Bisnis Anda</strong></h5>
					<ul class="list-unstyled text-muted small">
						<li><a class="cust-link" href="#">Profil Bisnis Anda</a></li>
						<li><a class="cust-link" href="#">Lihat Dashboard</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 cust-footer">
					<h5 class="mb-3"><strong>Acara</strong></h5>
					<ul class="list-unstyled text-muted small">
						<li><a class="cust-link" href="#">Acara Anda</a></li>
						<li><a class="cust-link" href="#">Cari Acara</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 cust-footer">
					<h5 class="mb-3"><strong>Ikuti Kami</strong></h5>
					<ul class="list-unstyled text-muted small">
						<li><a class="cust-link" href="#">Instagram</a></li>
						<li><a class="cust-link" href="#">Twitter</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>
<!--
    <div>
        <div class="center_div cust-text col-6" align="center">
          <?php echo form_open_multipart(base_url() . 'index.php/welcome/checkingLogin'); ?>
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
