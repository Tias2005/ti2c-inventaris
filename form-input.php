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
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000080;
            border-radius: 10px;
            background-color: #ffffff;
        }
        .tabel p {
            margin: 10px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #000080;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #000080;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #0000cd;
        }
    </style>
    
</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>FORMULIR INPUT PRODUK</h3>	 
    </header>	
 
    <form action="proses-input.php" method="POST"> 

    <div class="tabel">
        <p>	 			
            <label for="no">No : </label>	 		
            <input type="text" name="no" id="no"/>	 
        </p>
        <p>	 			
            <label for="nama_merk">Nama Merk : </label>	 		
            <input type="text" name="nama_merk" id="nama_merk" />	 
        </p>	 	
        <p>	 		
            <label for="warna">Warna : </label>	 	
            <input type="text" name="warna" id="warna"/>  		
        </p>	 							
        <p>	 			
            <label for="jumlah">Jumlah : </label>	 		
            <input type="text" name="jumlah" id="jumlah"/>	 
        </p>	 		
        <p>	 			
            <input type="submit" value="OK" name="ok" />	 		
        </p>	
    </div>  			
 
    </form> 

    </body>	 				
</html>	 					