<body>
  
  <div class="row cust-text" style="padding: 2%;">
    <div class="col-sm">
        <img class="cust-img4" width="100%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Users/<?php echo $this->session->userdata('logged_in')["user_pic"];?>" >
    </div>
    <div class="col-sm cust-text">
      <div class="row">
        <h1 class="font-weight-bold"><?php echo $this->session->userdata('logged_in')["user_nama"]; ?></h1>
      </div>
      <div class="row">
       <i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;
       <h5 class="font-weight-bold">
         <?php if($this->session->userdata('logged_in')["user_loc"] != NULL){
                echo $this->session->userdata('logged_in')["user_loc"],  " | ";
              }
              else {
             echo "Belum Mengatur Lokasi | ";
              } 
              if($this->session->userdata('logged_in')["user_cat1"] != NULL){
                echo $this->CI->getCat($this->session->userdata('logged_in')["user_cat1"]);
              }
              else {
                echo "Belum Mengatur Kategori ";
              } ?></h5>
      </div><br>
      <div class="row">
        <p>
        <?php if($this->session->userdata('logged_in')["user_des"] != NULL){
           echo $this->session->userdata('logged_in')["user_des"];
           }
           else {
             echo "Belum Mengatur Deskripsi";
           } ?>
        </p>
      </div>
      <div class="row" style="font-size: 30px;">
        <a href="" class="fab fa-instagram cust-link2"></a>&nbsp;
        <a href="" class="fab fa-whatsapp cust-link2"></a>&nbsp;
        <a href="" class="fab fa-telegram-plane cust-link2"></a>&nbsp;
        <a href="" class="fas fa-shopping-bag cust-link2"></a>
      </div>
      <br>
      <div class="row">
        <a href="<?php echo base_url()?>index.php/homectl/edit" class="btn font-weight-bold cust-button5">Ubah Profil</a>
      </div>
      <p class="half-line">&nbsp;</p>
      <div class="row">
      <a href="Welcome/logout" class="btn font-weight-bold cust-button6">Keluar</a>
      </div>
    </div>
  </div>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_1.svg">
  </div>
  <div style="padding-left: 3%;">
  <div class="row">
  <?php $i=0;
    if (sizeof($my_events)>0){
      foreach ($my_events as $item) {
        $i++; 
        if ($i < 4){?>
    <div class="card cust-ran1" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Events/<?php echo $item['event_pic'] ?>" alt="${item.title}">
      <div class="card-body card-cust1 text-center ">
        <h5 class="card-title font-weight-bold"><?php echo $item['event_name'] ?></h5>
        <p class="card-text"><?php echo $item['event_date'] ?><br>
        <?php echo $this->CI->getEvType($item['event_type']) ?> <br>
        <?php echo $item['event_loc'] ?></p>
        <a href="<?php echo base_url();?>index.php/homectl/specificEvent/<?php echo $item['event_id'];?>" class="btn font-weight-bold cust-button7" style="color:#383E56">Lihat Detail</a>
      </div>
    </div>
    <?php }
    } 
  }
  else { 

  }?>
    <div class="card cust-ran1" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Events/default.jpg">
      <div class="card-body card-cust1 text-center ">
        <h5 class="card-title font-weight-bold">Cari Acara Lain</h5>
        <p class="card-text">Lihat acara lain yang terdaftar dalam Swakarya</p>
        <a href="<?php echo base_url()?>index.php/homectl/viewTheEvents" class="btn font-weight-bold cust-button7" style="color:#383E56">Lihat Acara Lain</a>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <br>
  </div>
  
  

