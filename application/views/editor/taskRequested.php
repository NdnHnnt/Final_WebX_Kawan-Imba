<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>See the reviewed task</h6>
            <h2>Here are the list of<span> tasks </span>that have been<em> reviewed</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
            <table class="table1">
                <th class="table1">
                  <td class="table1"> Reviewer ID </td>
                  <td class="table1"> Title </td>
                  <td class="table1"> Keywords </td>
                  <td class="table1"> File </td>
                  <td class="table1"> Reviewed File </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($tasks)>0){
                    foreach ($tasks as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"> <?php echo $item['id_reviewer'] ?> </td>
                  <td class="table1"> <?php echo $item['judul'] ?> </td>
                  <td class="table1"> <?php echo $item['kata_kunci'] ?> </td>
                  <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/downloadFile/',$item['file_penugasan']; ?>" target="_blank">
                 Download </a></td>
                 <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/downloadFile/',$item['filereview']; ?>" target="_blank">
                 Download Reviewed File </a></td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td class="table1" colspan="7"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>
              </div>
        </div>
    </div>
    </div> 
