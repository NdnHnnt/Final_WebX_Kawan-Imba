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
           echo $this->session->userdata('logged_in')["user_loc"];
           }
           else {
             echo "Belum Mengatur Lokasi";
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
        <a href="" class="btn font-weight-bold cust-button5">Ubah Profil</a>
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
  <!--
  <?php $i=0;
    if (sizeof($event)>0){
      foreach ($event as $item) {
        $i++; ?>
  <div class="col-sm-4">
    <div class="card" style="width: 18rem; padding: 2%">
      <img class="card-img-top" src="<?php echo base_url()?>/img/Events/<?php echo $item['event_pic'] ?>" alt="${item.title}">
      <div class="card-body">
        <h5 class="card-title"><?php echo $item['event_name'] ?></h5>
        <p class="card-text"><?php echo $item['event_date'] ?></p>
        <p class="card-text"><?php echo $item['event_type'] ?></p>
        <p class="card-text"><?php echo $item['event_loc'] ?></p>
        <a target="_blank" href="homectl/event/<?php echo $item['event_id']?>" class="btn btn-primary" style="background-color: rgb(33, 133, 99);">Read more</a>
      </div>
    </div>
  </div>
  <?php } 
  }
  else { 

  }?>
  -->
  

