<?php
    include_once 'koneksi_database.php';
    $nama     = $_GET['nama_lapangan'];
    $username = $_GET['username'];
    $sql = "SELECT * FROM lapangan_futsal WHERE nama_lapangan = '$nama'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>

<!DOCTYPE html>
<html>
<head>
    <title>Check In Pesanan</title>
</head>
<body>
    <h1>Check In Pesanan</h1>
    <form action="insertpesan.php" method="post">
        <label for="username">Penyewa : </label>
        <input type="text" id="nama_lapangan" name="username" value="<?php echo $username ?>"readonly><br>
        <label for="nama_lapangan">Lapangan : </label>
        <input type="text" id="nama_lapangan" name="nama_lapangan" value="<?php echo $row["nama_lapangan"]?>" readonly><br>
        <input type="text" id="foto" name="foto" value="<?php echo $row["foto"]?>" readonly><br>
        <label for="alamat">Alamat : </label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row["alamat"]?>" readonly><br>
        <label for="jam">Sewa Berapa Jam : </label>
    <input type="number" id="jam" name="jam" oninput="calculateTotal()"><br>
    <p>Total : <span id="total_harga_1"></span></p>
    <input type="hidden" id="total_harga" name="total_harga" readonly><br>
    <input type="submit" value="Submit">
</form>

<script>
    function calculateTotal() {
        var perjam = <?php echo $row["harga"]?>;
        var jam = document.getElementById("jam").value;
        var total = perjam * jam;
        var totalrp = "Rp " + total;
        document.getElementById("total_harga_1").innerHTML = totalrp;
        document.getElementById("total_harga").value = total;
    }
    document.getElementById("jam").addEventListener("input", function(){
    if(this.value < 1){
        this.value = 1;
    }else if(this.value > 5){
        this.value = 5;
    }
});

</script>


</body>
</html>
<?php 
}
}
?>