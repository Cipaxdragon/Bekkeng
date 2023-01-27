<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome to E-Futsal</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
         *{
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         }
         body{
         background-color:	#778899;
         /* background: linear-gradient(to right, navy,white); */
         padding:0;
         margin:0;
         }
         ::-webkit-scrollbar {
         width: 9px;
         }
         ::-webkit-scrollbar-thumb {
         background: linear-gradient(to bottom, #4b0082, #87ceeb);
         }
         .navbar{
         text-decoration: none;
         position: fixed;
         top: 0;
         left: 0;
         height:80px;
         width: 100%;
         z-index: 1;
         /* background-image: linear-gradient(to right,blue,purple); */
         background-color: 	#2F4F4F;
         box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
         text-align:center;
         /* color: #000000; */
         text-decoration: none;
         color:white;
         }
         .material-symbols-outlined{
         transform: translate(-500%, -500%);
         animation: rotate360 1s linear infinite;
         }
         /* Define the @keyframes for the animation */
         @keyframes rotate360 {
         0% {
         transform: rotate(0deg);
         }
         100% {
         transform: rotate(360deg);
         }
         }
         /*  */
         .navbar li:hover {
         text-decoration: none;
         color: red;
         list-style: none;
         }
         ul >li {
         list-style: none;
         display: inline-block;
         float: left;
         margin : 20px;
         text-decoration:none;
         }
         .carousel-inner{
         align-items:center;
         margin-top:7%;
         margin-left:270px;
         height:500px;
         width:1000px;
         border-color:red;
         border-radius:5px;
         }
         .kata{
         margin-top:20px;
         text-align:center;
         color:white;
         text-transform:uppercase;
         }
         span{
         color:red;
         }
         .icon
         {
         margin-left:850px;
         } 
         .image-flep{
         background-size:cover;
         }
         .card{
         display: inline-block;
         margin-top:30px;
         border-radius:5px;
         }
         .card-img-top{
         height: 300px;
         width: 481px;
         }
         .conten {
         margin-left:100px;
         margin-right:100px;
         }
         h5{
         background-color:red;
         width:100%;
         text-align:center;
         border-radius:50px;
         color:white;
         }
         @media only screen and (max-width: 600px) {
         .navbar {
         height: 60px;
         }
         .card-img-top {
         height: 200px;
         width: 300px;
         }
         .icon {
         margin-left: 600px;
         }
         }
         .about{
         box-shadow: 5px 5px 10px #000;
         background-color: rgba(0, 0, 0, 0.5);
         height:300px;
         width:750px;
         color:white;
         text-align:center;
         font-size:10px;
         margin-left:350px;
         margin-top:50px;
         border-radius:10px;
         }
         .about > h{
         margin-top:50px;
         align-items:center;
         text-align:center;
         }
         .contact{
         background-color:black;
         padding:0;
         height:120px;
         right:150px;
         color:white; 
         display: flex;
         justify-content: space-between;
         overflow-x: hidden;
         }
         .contact > ul{
         margin-left:550px;
         }
         /* ------------------------- */
         /* ------------------------------------ */
      </style>
   </head>
   <body>
      <!-- Carousel content -->
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function(){
           $('.carousel').carousel({
             interval: 3000
           });
         });
      </script>
      <!-- ====================================NAVBAR============================================================ -->
      <div class="navbar">
         <!-- Humberger-->
         <ul>
         <li class= "ball"><span class="material-symbols-outlined fa-100x">sports_soccer</span>
            </span>
         </li>
         <li><a href ="#link_home">Home</a></li>
         <li ><a href ="#link_lapangan">Daftar Lapangan</a></li>
         <li><a href ="#link_about">About</a>
         <li>
            <a href ="#link_contact">Contact</a>
            <!-- <li class="icon">
               <div>
                  <span class="material-symbols-outlined">
                  account_circle
                  </span>
               </li>
               <li>
                   <span class="material-symbols-outlined">
                   logout
                   </span>
               </div>
               </li>    -->
            <!-- Halaman Awal -->
      </div>
      <id="link_home">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="Asset/Bg/01.jpg" class="d-block w-100" alt="Gambar 1">
      </div>
      <div class="carousel-item">
      <img src="Asset/Bg/02.jpg" class="d-block w-100" alt="Gambar 2">
      </div>
      <div class="carousel-item">
      <img src="Asset/Bg/03.jpg" class="d-block w-100" alt="Gambar 3">
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Sebelumnya</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Berikutnya</span>
      </a>
      <h1 class="kata">Choose a Field and <span>Show Your Skills<span></h1>
      </div>
      </a>
      </div>
      <br><br><br> <br><br><br>  
      </div> 
      <!-- =======================================CONTEN LAPANGAN======================================== -->
      <div id ="link_lapangan">
      <br><br><br><br>
      <div class ="conten">
      <h5>Daftar Lapangan</h5>
      <div class="card-deck">
      <!-- ======================= -->
      <?php
         include_once 'koneksi_database.php';
         $username = $_GET['username'];
         $sql = "SELECT * FROM lapangan_futsal";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
         ?>
         <div class="card">
            <img class="card-img-top" src="Asset/List Lapangan/<?php echo $row["foto"]?>" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title"><?php echo $row["nama_lapangan"]?></h5>
               <p class="card-text"><?php echo $row["alamat"]?></p>
            </div>
            <div class="card-footer">
               <small class="text-muted">Rp.<?php echo $row["harga"]?>/Jam</small>
            </div>
            <?php 
               
             $sts=  $row['status'];
               if($sts == "terpakai"){
                  echo "terpakai";
               }else{
                  echo '<a href="checkin.php?nama_lapangan=' . $row["nama_lapangan"] . '&username=' . $username . '">Sewa</a>';
               }
            ?>
         </div>
      <?php 
         }
         } else {
         }
         $conn->close();
         ?>
      </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <!-- ================================================ABOUT================================================================= -->
      <div class ="about" id ="link_about">
      <br><br><br><br><br>
      <h5><span>e-Futsal Arena<br></span>
      Informasi Lapangan Futsal Untuk Bermain dengan Strategis
      </h1>
      <br>
      <p>
      Web e Futsal Arena adalah sebuah website yang dapat membantu para pecinta olahrga futsal <br>dalam menemeukan lokasi ternyamannya dalam bermain bola futsal,
      dimana dapat mengatur jadwal bermain <br>dan dapat melakukan pemesanan secara online sehingga lebih efisien
      </p>
      </div>
      <br><br><br><br><br><br><br><br><br>
      <div class ="contact"id ="link_contact">
      <h1>Contact Me</h1><br>
      <ul>
      <li ><a href ="https://www.instagram.com/muhhh_irfaaan/"target="_blank">Instagram </a></li>
      <li><a href ="email.com"target="_blank">Email</li>
      <li><a href ="whatsapp.com"target="_blank">WhatsApp</li>
      <li ><a href ="maps.com"target="_blank">Samata </li>
      </ul>
      </div>
   </body>
</html>