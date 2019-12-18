<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
        <title>Pencarian</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>
     body {
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
}   
h3 {
    font-weight: 500;
}
.container {
    left: 50%;
    position: absolute;
    top: 7.5%;
    transform: translate(-50%, -7.5%);
}
input[type=text] {
    border: 2px solid #bdbdbd;
    font-family: 'Roboto', Arial, Sans-serif;
    font-size: 15px;
    font-weight: 400;
    padding: .5em .75em;
    width: 250px;
}
input[type=text]:focus {
    border: 2px solid #757575;
    outline: none;
}
.autocomplete-suggestions {
    border: 1px solid #999;
    background: #FFF;
    overflow: auto;
}
.autocomplete-suggestion {
    padding: 2px 5px;
    white-space: nowrap;
    overflow: hidden;
}
.autocomplete-selected {
    background: #F0F0F0;
}
.autocomplete-suggestions strong {
    font-weight: normal;
    color: #3399FF;
}
.autocomplete-group {
    padding: 2px 5px;
}
.autocomplete-group strong {
    display: block;
    border-bottom: 1px solid #000;
}

	 </style>
 <style>

#status2{
display:none;
}
  </style>
    </head>
    <body>
	<div class="container">
  <div class="row">
   <form role="form" method="post">
  <div class="form-group">
    <label>Kota asal</label>
    <input type="text" class="form-control" value="JAKARTA">
  </div>
  <div class="form-group">
    <label>Kota tujuan</label>
    <input type="text" class="form-control"  id="buah" name="kota" placeholder="Kota Asal" required>
  </div>
  	<script>
			
			 function statusaksi(){
		if(document.getElementById('status').value == 'barang'){
            document.getElementById('status2').style.display = "inline";
        }else{
            document.getElementById('status2').style.display = "none";
        }
		   }

	
			</script>
				<div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  	<select  class="form-control" id="status" name="status" onchange="statusaksi()" required>
					<option value="">Status</option>
					<option value="motor-kecil">Motor Kecil</option>
					<option value="motor-besar">Motor Besar</option>
					<option value="barang">Barang</option>
					<select>
                </div>
<div id="status2">	 
 <div class="form-group">
 <label>Nama</label>
		 <div class="form-group">
    <label>KG</label>
    <input type="number" class="form-control" name="kg" min="20">
  </div>
 </div>			 
 </div>	
 <button type="submit" class="btn btn-primary" name="kirim">Cari</button>
</form>
</div>
<div class="row">
	 <?php
// Deklarasi variable untuk koneksi ke database.
$host     = "localhost";    // Server database
$username = "root";         // Username database
$password = "";             // Password database
$database = "lancar"; // Nama database

// Koneksi ke database.
$conn = new mysqli($host, $username, $password, $database);

if (isset($_POST["kirim"])) {
// menangkap data yang di kirim dari form
$kota = $_POST['kota'];
$status = $_POST['status'];


if ($status === 'motor-kecil') {
	$tps=mysqli_query($conn,"SELECT * FROM  tbl_tujuan_kendaraan where kota_tujuan='$kota'");
                            while($sa=mysqli_fetch_array($tps)){
							$kode=$sa['kode'];
							$estimasi=$sa['estimasi'];
							$kota=$sa['kota_tujuan'];
							$motor_kecil=$sa['motor_kecil'];
							}

echo "Kode:".$kode.'</br>';							
echo "Kota".$kota.'</br>';
echo "Motor Kecil:".$motor_kecil.'</br>';
echo "Estimasi:".$estimasi.'</br>';
}	  
elseif ($status === 'motor-besar') {
$tps=mysqli_query($conn,"SELECT * FROM  tbl_tujuan_kendaraan where kota_tujuan='$kota'");
                            while($sa=mysqli_fetch_array($tps)){
							$kode=$sa['kode'];
							$estimasi=$sa['estimasi'];
							$kota=$sa['kota_tujuan'];
							$motor_besar=$sa['motor_besar'];
							}

echo "Kode:".$kode.'</br>';							
echo "Kota".$kota.'</br>';
echo "Motor Besar:".$motor_besar.'</br>';
echo "Estimasi:".$estimasi.'</br>';


}
elseif ($status === 'barang') {
$kg = $_POST['kg'];
$tps=mysqli_query($conn,"SELECT * FROM  tbl_tujuan_kendaraan where kota_tujuan='$kota'");
                            while($sa=mysqli_fetch_array($tps)){
							$kode=$sa['kode'];
							$estimasi=$sa['estimasi'];
							$kota=$sa['kota_tujuan'];
							$harga=$sa['harga'];
							}

echo "Kode:".$kode.'</br>';							
echo "Kota".$kota.'</br>';
echo "Berat:".$kg.'</br>';
echo "Harga:".$harga * $kg.'</br>';
echo "Estimasi:".$estimasi.'</br>';


}
?>
<div class="form-group">
<a href="./" class="btn btn-warning" >Cari Ulang</a>
</div>
<?php }
?>  
  
</div>
</div>
      </body>
    <!-- Memanggil jQuery.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Memanggil Autocomplete.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
   <script type="text/javascript">
            $(document).ready(function() {
                // Selector input yang akan menampilkan autocomplete.
                $( "#buah" ).autocomplete({
                    serviceUrl: "auto.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#buah" ).val("" + suggestion.buah);
                    }
                });
            })
        </script>
 
</html>