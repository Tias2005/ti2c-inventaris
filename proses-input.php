<?php  include "config.php";  

if(isset($_POST['ok'])){	 	
 			 
    $no = $_POST['no'];	 		
    $nama_merk = $_POST['nama_merk'];	 		
    $warna = $_POST['warna'];	
    $jumlah = $_POST['jumlah'];	 			 	
 			 		
    $sql = "INSERT INTO printer (no, nama_merk, warna, jumlah) VALUE ('$no', '$nama_merk', '$warna', '$jumlah')";	 	
    $query = mysqli_query($db, $sql);	 		
 			 			
    if( $query ) {	 				
        
        header('Location: index.php?status=sukses');	 		
    } else {	 			
        	 		
        header('Location: index.php?status=gagal');	 			
    }	 				
} else {	 				
    die("Akses dilarang...");	 				
}	 
 					