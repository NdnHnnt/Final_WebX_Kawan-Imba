<br>
<br>
<br>
<br>
<table style="border: 1px solid blue">
                <th>
                  <td style="text-align: left;">Task ID</td>
                  <td style="text-align: center;"> Reviewer ID </td>
                  <td style="text-align: center;"> Title </td>
                  <td style="text-align: center;"> Keywords </td>
                  <td style="text-align: center;"> Download File </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($task)>0){
                    foreach ($task as $item2) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td style="text-align: center;"> <?php echo $item2['id_penugasan'] ?> </td>
                  <td style="text-align: center;"> <?php echo $item2['id_reviewer'] ?> </td>
                  <td style="text-align: center;"> <?php echo $item2['judul'] ?> </td>
                  <td style="text-align: center;"> <?php echo $item2['kata_kunci'] ?> </td>
                  <td style="text-align: center;"> <a href="<?php echo base_url() ,"../../ereview/berkas/", $item2['file_penugasan']; ?>">Download File</a></td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td colspan="5"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>