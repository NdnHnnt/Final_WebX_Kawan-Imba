<body>
  <div class="row" id="">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_6.svg">
  </div>
  <div class="row cust-text" style="padding-left: 3%;">
    <?php
    if (sizeof($this_event)>0){
      foreach ($this_event as $item) {
        ?>
    <div class="col-sm-4">
        <img class="cust-img4" width="80%" style="margin-left: auto; margin-right: auto;" src="<?php echo base_url()?>img/Events/<?php echo $item['event_pic']; ?>" >
    </div>
    <div class="col-sm cust-text">
      <div class="row">
        <h1 class="font-weight-bold"><?php echo $item['event_name']; ?></h1>
      </div>
      <div class="row">
       <i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;
       <h5 class="font-weight-bold">
         <?php echo $this->CI->getEvType($item['event_type']); ?> | <?php echo $item['event_loc']; ?>
      </h5>
      </div>
      <div class="row">
        <br>
      </div>
      <div class="row font-weight-bold">
        <p>
        <?php echo $item['event_date']; ?> 
        <br>
        Oleh: <?php echo $this->CI->getUname($item['event_creator']); ?>
        <br>
        <?php echo $item['event_des']; ?> 
        </p>
      </div> 
      <br>
      <?php
        } 
        } ?>
    </div>
    <div class="col-sm-3 cust-text">
      <?php 
        $creator = $item['event_creator'];
        $event = $item['event_id'];
        $user = $this->session->userdata('logged_in')["user_id"];
        if ($creator == $user){
          echo '<div class="row">
                  <a class="btn cust-button7 font-weight-bold col-sm-5">Edit Acara</a>
                </div>';
        }
//Halo Uli //
        if ($creator != $user){
          if ($this->CI->checkPart($user, $event) == FALSE) { ?>
            <div class="row">
              <a href="<?php echo $this->CI->participate($event); ?>" class="btn cust-button7 font-weight-bold col-sm-5" style="color: #383E56">Batalkan</a>
            </div>
          <?php } 
          else if ($this->CI->checkPart($user, $event) == TRUE){  ?>
            <div class="row">
               <a href="<?php echo $this->CI->unparticipate($event); ?>" class="btn cust-button4 font-weight-bold col-sm-5" style="color: #D4B5B0" >Daftar</a>
            </div>
          <?php } 
        } ?>
      <p class="half-line">&nbsp;</p>
      <div class="row">
        <a href="tel:<?php echo $item['event_contact']?>"class="btn cust-button8 font-weight-bold col-sm-5" >Info Kontak</a>
      </div>
      <p class="half-line">&nbsp;</p>
      <?php 
        if ($item['event_creator'] == $this->session->userdata('logged_in')["user_id"]){
          echo '<div class="row">
                  <a href="" class="btn cust-button7 font-weight-bold col-sm-5">Hapus Acara</a>
                </div>';
        }
      ?>
    </div>
  </div>
  <div class="row">
    <br>
  </div>
  
  

