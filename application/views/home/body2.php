  <div class="row" id="cari-mitra">
    <img class="title-img" src="<?php echo base_url()?>assets/images/home_2.svg">
  </div>
  <div class="row">
  <?php $i=0;
    if (sizeof($other_user)>0){
      foreach ($other_user as $item) {
        $i++; ?>
    <div class="card" style="width: 18rem; padding: 2%">
      <img class="card-img-top" src="<?php echo base_url()?>/img/Users/<?php echo $item['user_pic'] ?>" alt="${item.title}">
      <div class="card-body">
        <h5 class="card-title"><?php echo $item['user_nama'] ?></h5>
        <p class="card-text"><?php echo $item['user_loc'] ?></p>
        <a target="_blank" href="#<?php echo $item['user_id']?>" class="btn btn-primary" style="background-color: rgb(33, 133, 99);">Read more</a>
      </div>
    </div>
  
  <?php } 
    }
  else { ?>
  <p>data isnt found</p>
  <?php } ?>
  </div>

  

