<?php 
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_lap_futsal";
  
  // Create connection
  $conn = mysqli_connect($host, $username, $password, $dbname);

  $lap =  $_GET['nama_lapangan'] ;
    $sql = "SELECT * FROM lapangan_futsal WHERE nama_lapangan = '$lap'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            ?>


<form action="update_lapangan.php" method="post" enctype="multipart/form-data">
    
        <div>
            <label>Nama Lapangan</label>
            <input type="text" name="nama_lapangan" value="<?php echo $lap ;?>">
            <input type="hidden" name="lap" value="<?php echo $lap ;?>">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text"name="alamat"  value="<?php echo $row['alamat']?>">
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga" value="<?php echo $row['harga'] ?>">
        </div>
            <br><br>
        <input class="btn btn-primary" type="submit" value="Tambah">
    </form>

    <?php 
       }}
    
    ?>