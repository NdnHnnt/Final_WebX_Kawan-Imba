<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Reviewers</h6>
            <h2>Here are the <span>Reviewers</span> in <em>E-Review</em></h2>
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
                  <td class="table1"> User ID </td>
                  <td class="table1"> Username </td>
                  <td class="table1"> Name </td>
                  <td class="table1"> Reviewer Status </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($reviewer)>0){
                    foreach ($reviewer as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"> <?php echo $item['id_reviewer'] ?> </td>
                  <td class="table1"> <?php echo $item['id_user'] ?> </td>
                  <td class="table1"> <?php echo $item['username'] ?> </td>
                  <td class="table1"> <?php echo $item['nama'] ?> </td>
                  <td class="table1"> <?php echo $item['reviewer_status'] ?> </td>
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