  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Reviewers Available</h6>
            <h2>Here is <em>Our</em> Available <span>Reviewers</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <table class="table1">
                <th class="table1">
                  <td class="table1">Reviewer ID</td>
                  <td class="table1"> Name </td>
                  <td class="table1"> Bidang Ilmu </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($reviewers)>0){
                    foreach ($reviewers as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"> <?php echo $item['id_reviewer'] ?> </td>
                  <td class="table1"> <?php echo $item['nama'] ?> </td>
                  <td class="table1"> <?php echo $item['bidang_ilmu'] ?> </td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td class="table1" colspan="5"> <?php echo "Tidak ditemukan data" ?> </td>
                <tr>
                <?php } ?> 
              </table>
            </div>
            <div class="item">
              <table sclass="table1">
                <tr class="table1">
                  <td class="table1">ID Ilmu</td>
                  <td class="table1"> Bidang Ilmu </td>
                <tr>
                  <td class="table1">1</td>
                  <td class="table1">Sosial dan Humaniora</td>
                <tr>
                  <td class="table1">2</td>
                  <td class="table1">Hukum</td>
                <tr>
                  <td class="table1">3</td>
                  <td class="table1">Alam</td>
                <tr>
                  <td class="table1">4</td>
                  <td class="table1">Komputer</td>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>