<body>
  <div class="row" id="acara-anda">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_3.svg">
  </div>
  <div style="padding-left: 3%;">
  <div class="row">
  <?php $i=0;
    if (sizeof($other_events)>0){
      foreach ($other_events as $item) {
        $i++; ?>
    <div class="card cust-ran1" style="width: 18rem; padding: 2%; margin: 0.5%">
      <img class="card-img-top cust-img3" src="<?php echo base_url()?>/img/Events/<?php echo $item['event_pic'] ?>" alt="${item.title}">
      <div class="card-body card-cust1 text-center">
        <h5 class="card-title font-weight-bold"><?php echo $item['event_name'] ?></h5>
        <p class="card-text"><?php echo $item['event_date'] ?> 
        <br>
        <?php echo $this->CI->getEvType($item['event_type']); ?>
        <br>
        <?php echo $item['event_loc'] ?></p>
        <a href="<?php echo base_url().'index.php/homectl/specificEvent/'.$item['event_id']?>" class="btn font-weight-bold cust-button7" style="color:#383E56">Lihat Detail</a>
      </div>
    </div>
    <?php } 
  }
  else { 

  }?>

  </div>
  </div>
  <div class="row">
    <br>
  </div>
  
  

