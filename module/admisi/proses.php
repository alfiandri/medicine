<?php
include '../../db/connect.php';
if ($_GET['data'] == 'kab') {
    $no = $_GET['no'];
    $sql = mysqli_query($koneksi, "SELECT * FROM wil_kabupaten WHERE kodeprovinsi='$no' ");
?>
    <select id="kabupaten">
        <?php
        while ($items = mysqli_fetch_array($sql)) { ?>
            <option value="<?php echo $items['id']; ?>"><?php echo $items['kab']; ?></option>
        <?php } ?>
    </select>
<?php
} else if ($_GET['data'] == 'kec') {
    $no = $_GET['no'];
    $sql1 = mysqli_query($koneksi, "SELECT * FROM `wil_kecamatan` WHERE `kab_id` = '$no'");
?>
    <select id="kecamatan">
        <?php
        while ($items = mysqli_fetch_array($sql1)) { ?>
            <option value="<?php echo $items['id']; ?>"><?php echo $items['kec']; ?></option>
        <?php } ?>
    </select>
<?php
} else if ($_GET['data'] == 'kel') {
    $no = $_GET['no'];
    $sql1 = mysqli_query($koneksi, "SELECT * FROM `wil_kelurahan` WHERE `kec_id` = '$no'");
?>
    <select id="kelurahan">
        <?php
        while ($items = mysqli_fetch_array($sql1)) { ?>
            <option value="<?php echo $items['kel']; ?>"><?php echo $items['kel']; ?></option>
        <?php } ?>
    </select>
<?php
}
