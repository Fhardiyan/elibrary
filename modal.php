<?php
    $koneksi = new mysqli("localhost","root","","db_perpustakaan");
    $sql = $koneksi->query("select * from tb_buku");
    while ($data= $sql->fetch_assoc()) {
?>
<!-- Modal Search -->
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <form class="w3-container">
              <div class="w3-section">
                <label><b>Kategori</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Kategori">
                <label><b>Penerbit</b></label>
                <input class="w3-input w3-border" type="text" placeholder="Penerbit">
                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Search</button>
              </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            </div>
          </div>
        </div>

    <!-- Modal Detail View -->
          <div id="detail" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
              <span onclick="document.getElementById('detail').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <div class="w3-row">
              <div class="w3-quarter w3-container">
              <img src="upload/<?php echo $data['fotobuku'];?>" width="200" height="200">
              </div>
              <div class="w3-threequarter w3-container" style="text-align:left; color: black;">
                <label><b>Kategori</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder='<?php echo $data['kategori'];?>' disabled>
                <label><b>Penerbit</b></label>
                <input class="w3-input w3-border" type="text" placeholder='<?php echo $data['penerbit'];?>' disabled>
              </div>
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="document.getElementById('detail').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            </div>
          </div>
        </div>

           <?php  } ?>