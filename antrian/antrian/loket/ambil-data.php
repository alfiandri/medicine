<?php
require_once 'db.php';

$sql = mysqli_query($koneksi, "SELECT * FROM `antrian_loket`");
while ($loket = mysqli_fetch_assoc($sql)) {
?>
    <div class="col-md-4">
        <div class="card">
            <div class="row text-center">
                <div class="col-sm-12" style="background-color: #023047; color:aliceblue; padding:10px;">
                    <h3>LOKET 1 - PENDAFTARAN</h3>
                    <h4>Nomor Antrian</h4>
                    <div class="nomor" style="width: 100%; height: 400px; background-color:white; color:#ffb703; justify-content: center; align-items: center; display: flex;">
                        <span style="font-size:150px;"><?php echo $loket['loket'] . "-" . $loket['nomor']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
