<?php include "config.php"; ?>  
<!DOCTYPE html>	 
<html>	 
 	
<head>		
    <title>Inventaris</title>	 
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background.jpg');
            color: #000080;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #000080;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .tabel-list {
            width: 80%;
            margin: 0 auto;
        }
        .tabel-list th, .tabel-list td {
            border: 1px solid #000080;
            padding: 8px;
            text-align: left;
            background-color: #ddd;
        }
        .tabel-list th {
            background-color: #000080;
            color: white;
        }
        .tabel-list tr:hover {
            background-color: #ddd;
        }
        .list {
            margin-bottom: 10px;
        }
    </style>
</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>LIST PRODUK</h3>	 	
    </header>	 		
 
    <br> 
 			
    <table class="tabel-list">	 		
    <thead>	 
        
        <div class="list">
        <tr>	 					
            <th>No</th>	 		
            <th>Nama Merk</th>	 		
            <th>Warna</th>
            <th>Jumlah</th>	 
            			
        </tr>	
        </div>

    </thead>	 		
    <tbody>	 			
 
 <?php	 				
        $sql = "SELECT * FROM printer";	 
        $query = mysqli_query($db, $sql);	 	
 		
        while($printer = mysqli_fetch_array($query))
        {	echo "<tr>";	 	
 		
            echo "<td>".$printer['no']."</td>";	 	
            echo "<td>".$printer['nama_merk']."</td>";	 	
            echo "<td>".$printer['warna']."</td>";	 	 	
            echo "<td>".$printer['jumlah']."</td>";	 		 
 
            echo "</tr>";			
        }	 			
        ?>	 			
 				
    </tbody>	 
    </table>
 				
    </body>	 				
</html>	 					