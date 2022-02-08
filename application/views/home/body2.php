  <div class="row" id="cari-mitra">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_2.svg">
  </div>
  <div style="padding-left: 3%;">
  <div class="row">
  <?php $i=0;
    if (sizeof($other_user)>0){
      foreach ($other_user as $item) {
        $i++; ?>
    <div class="card cust-ran2" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Users/<?php echo $item['user_pic'] ?>" alt="">
      <div class="card-body card-cust2">
        <h5 class="card-title font-weight-bold"><?php echo $item['user_nama'] ?></h5>
        <p class="card-text"><?php echo $item['user_loc'] ?></p>
        <a href="<?php echo $item['user_id']?>" class="btn cust-button4 font-weight-bold" style="color:#F69E7B">Lihat Bisnis</a>
      </div>
    </div>
  <?php } 
    }
  else {
  } ?>
    <div class="card cust-ran2" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Events/default.jpg">
      <div class="card-body card-cust2">
        <h5 class="card-title font-weight-bold">Cari Bisnis Lain</h5>
        <a href="tel:081233942617" class="btn font-weight-bold cust-button4" style="color:#F69E7B">Lihat Bisnis Lain</a>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <br>
  </div>

  

