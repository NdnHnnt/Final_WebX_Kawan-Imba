  <div class="row" id="cari-mitra">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_7.svg">
  </div>
  <div style="padding-left: 3%;">
  <div class="row">
  <?php $i=0;
    if (sizeof($part)>0){
      foreach ($part as $item) {
        $i++; 
        if ($i < 4){?>
    <div class="card cust-ran2" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Users/<?php echo $item['user_pic']; ?>" alt="">
      <div class="card-body card-cust2 text-center">
        <h5 class="card-title font-weight-bold"> <?php echo $item['user_nama']; ?></h5>
        <p class="card-text">
          <?php echo $item['user_loc']; ?>
          <br>
          <?php if ($item['user_cat1']!=NULL){
                  echo $this->CI->getCat($item['user_cat1']);
                }
                else {
                  echo "Belum Menentukan Kategori";
                }
           ?>
        </p>
        <a href="<?php echo base_url()?>index.php/homectl/viewUser/<?php echo $item['user_id']?>" class="btn cust-button4 font-weight-bold " style="color:#F69E7B">Lihat Bisnis</a>
      </div>
    </div>
  <?php }
  } 
    }
  else {
  } ?>
    <div class="card cust-ran2" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Events/default.jpg">
      <div class="card-body card-cust2 text-center">
        <h5 class="card-title font-weight-bold">
          <?php
          if (sizeof($part)>3){
            echo "Dan ", sizeof($part)-3, " pendaftar lainnya";
          }
          else{
            echo "Ajak Teman Anda!";
          }
          ?>
        </h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <br>
  </div>

  

