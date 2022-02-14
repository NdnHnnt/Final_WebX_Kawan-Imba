<div id="">
	<img class="title-img" src="<?php echo base_url() ?>assets/images/home_6.svg">
</div>
<div class="row cust-text cont1">
	<?php
	if (sizeof($this_user) > 0) {
		foreach ($this_user as $item) {
	?>
			<div class="col-sm-4" style="padding-left: 0;">
				<img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url() ?>img/Users/<?php echo $item['user_pic']; ?>">
			</div>
			<div class="col-sm-8 cust-text" style="padding-left: 0;">
				<div class="row" style="margin: 0;">
					<h1 class="font-weight-bold">
						<?php echo $item['user_nama']; ?>
					</h1>
				</div>
				<div class="flex-container">
					<div class="row" style="margin: 0;">
						<i class="fas fa-map-marker-alt" style="font-size: 1.25rem;"></i> &nbsp;&nbsp;
						<h5>
							<?php if ($item['user_loc'] != NULL) {
								echo $item['user_loc'];
							} else {
								echo "Belum Mengatur Lokasi";
							} ?>
						</h5>
					</div>
				</div>
				<div class="row" style="margin: 14px 0 22px 0;">
					<p style="font-size: 18px; margin-bottom: 0;">
						<?php if ($item['user_des'] != NULL) {
							echo $item['user_des'];
						} else {
							echo "Belum Mengatur Deskripsi";
						} ?>
					</p>
				</div>
				<a target="_blank" href="https://www.instagram.com/<?php echo $item['user_insta']; ?>" class="flex-container cust-link5" style="margin-bottom: 0.5rem;">
					<div>
						<i class="fab fa-instagram cust-contact-icon" style="font-size: 25px;"></i>
					</div>
					<div class="cust-contact-label" style="align-self: center">
						<?php if ($item['user_insta'] != NULL) {
							echo $item['user_insta'];
						} else {
							echo "Belum Mengatur Profil Instagram";
						} ?>
					</div>
				</a>
				<a target="_blank" href="https://wa.me/<?php echo $item['user_wa']; ?>" class="flex-container cust-link5" style="margin-bottom: 0.5rem;">
					<div><i class="fab fa-whatsapp cust-contact-icon" style="font-size: 25px;"></i></div>
					<div class="cust-contact-label" style="align-self: center">
						<?php if ($item['user_wa'] != NULL) {
							echo $item['user_wa'];
						} else {
							echo "Belum Mengatur Kontak WhatsApp";
						} ?>
					</div>
				</a>
				<a href="" class="flex-container cust-link6" style="margin-bottom: 0.5rem;">
					<div><i class="fab fa-telegram-plane cust-contact-icon" style="font-size: 25px;"></i></div>
					<div class="cust-contact-label" style="align-self: center">
						<?php if ($item['user_telegram'] != NULL) {
							echo $item['user_telegram'];
						} else {
							echo "Belum Mengatur Kontak Telegram";
						} ?>
					</div>
				</a>

				<a href="<?php echo $item['user_shop']; ?>" class="flex-container cust-link6">
					<div><i class="fas fa-shopping-bag cust-contact-icon" style="font-size: 25px;"></i></div>
					<div class="cust-contact-label" style="align-self: center">
						<?php if ($item['user_shop'] != NULL) {
							echo $item['user_shop'];
						} else {
							echo "Belum Mengatur Tautan Toko";
						} ?>
					</div>
				</a>
			</div>
			<br>
	<?php
		}
	} ?>
</div>
<br>
