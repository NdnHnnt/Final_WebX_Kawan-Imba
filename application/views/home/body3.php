<div id="acara-anda">
	<img class="title-img" src="<?php echo base_url() ?>assets/images/home_1.svg">
</div>
<div class="row cont3">
	<?php $i = 0;
	if (sizeof($my_events) > 0) {
		foreach ($my_events as $item) {
			$i++; ?>
			<div class="card card-cust4">
				<img class="card-img-top card-head-cust1" src="<?php echo base_url() ?>/img/Events/<?php echo $item['event_pic'] ?>" alt="${item.title}">
				<div class="card-body card-body-cust1 text-center">
					<h5 class="card-title font-weight-bold">
						<?php echo $item['event_name'] ?>
					</h5>
					<p class="card-text">
						<?php echo $item['event_date'] ?>
						<br>
						<?php echo $this->CI->getEvType($item['event_type']); ?>
						<br>
						<?php echo $item['event_loc'] ?>
					</p>
					<a href="<?php echo base_url() ?>index.php/homectl/specificEvent/<?php echo $item['event_id'] ?>" class="btn font-weight-bold cust-button7" style="color:#383E56">Lihat Detail</a>
				</div>
			</div>
	<?php }
	} else {
	} ?>
</div>
<br>
