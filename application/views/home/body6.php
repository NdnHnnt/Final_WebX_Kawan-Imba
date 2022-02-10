<body>
  <div class="row" id="">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_6.svg">
  </div>
  <div class="row cust-text" style="padding-left: 3%;">
  <?php
    if (sizeof($this_user)>0){
      foreach ($this_user as $item) {
        ?>
    <div class="col-sm">
        <img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Users/<?php echo $item['user_pic']; ?>" >
    </div>
    <div class="col-sm cust-text">
      <div class="row">
        <h1 class="font-weight-bold"><?php echo $item['user_nama']; ?></h1>
      </div>
      <div class="row">
       <i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;
       <h5 class="font-weight-bold">
         <?php if($item['user_loc'] != NULL){
           echo $item['user_loc'];
           }
           else {
             echo "Belum Mengatur Lokasi";
           } ?>
      </h5>
      </div><br>
      <div class="row">
        <p>
        <?php if($item['user_des']!= NULL){
           echo $item['user_des'];
           }
           else {
             echo "Belum Mengatur Deskripsi";
           } ?>
        </p>
      </div> 
      <div class="container-fluid" >
        <div class="row" >
            <a target="_blank" href="https://www.instagram.com/<?php echo $item['user_insta'];?>" class="fab fa-instagram cust-link2" style="font-size: 25px;"></a>
            <p style="font-family: 'Amiko';">&nbsp;<?php if($item['user_insta'] != NULL){
           echo $item['user_insta'];
           }
           else {
             echo "Belum Mengatur Profil Instagram";
           } ?>
            </p>
          &nbsp;
        </div>
        <div class="row" >
          <a target="_blank" href="https://wa.me/<?php echo $item['user_wa'];?>" class="fab fa-whatsapp cust-link2" style="font-size: 25px;"></a>&nbsp;
          <p style="font-family: 'Amiko';"><?php if($item['user_wa'] != NULL){
           echo $item['user_wa'];
           }
           else {
             echo "Belum Mengatur Kontak WhatsApp";
           } ?>
          </p>
          &nbsp;
        </div>
        <div class="row" >
          <a href=""class="fab fa-telegram-plane cust-link2"style="font-size: 25px;"></a>&nbsp;
          <p style="font-family: 'Amiko';"><?php if($item['user_telegram'] != NULL){
           echo $item['user_telegram'];
           }
           else {
             echo "Belum Mengatur Kontak Telegram";
           } ?>
           </p>
          &nbsp;
        </div>
        <div class="row" >
          <a href="<?php echo $item['user_shop']; ?>" class="fas fa-shopping-bag cust-link2"style="font-size: 25px;"></a>&nbsp;
          <p style="font-family: 'Amiko';"><?php if($item['user_shop'] != NULL){
           echo $item['user_shop'];
           }
           else {
             echo "Belum Mengatur Tautan Toko";
           } ?>
          </p>
        </div>

      </div>
      <br>
      <?php
    } 
  } ?>
    </div>
  </div>
  <div class="row">
    <br>
  </div>
  
  

