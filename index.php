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
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        header h3 {
            margin: 0;
            font-size: 18px;
        }
        .menu {
            width: 200px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000080;
            border-radius: 10px;
            background-color: #ffffff;
        }
        .menu h4 {
            text-align: center;
            color: #000080;
        }
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            margin: 10px 0;
        }
        nav ul li a {
            text-decoration: none;
            color: #000080;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #0000cd;
        }
        .notif {
            text-align: center;
            margin-top: 20px;
        }
        .notif p {
            background-color: #d3d3d3;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            color: #000080;
        }
    </style>
</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>Inventaris Produk</h3>	 	
        <h1>Toko "PHONE WORLD"</h1>
    </header>	 			
 		
    <div class="menu">	 			
    <nav>	 				
        <ul>	 				
            <li><a href="form-input.php">Input Produk</a></li>	 
            <li><a href="list-produk.php">List Produk</a></li>	 	
        </ul>	 		
    </nav>
    </div>

    <?php if(isset($_GET['status'])): ?>	
        
<div class="notif">
    <p>	 
    <?php	 
        if($_GET['status'] == 'sukses'){	 
            echo "Input Produk Berhasil!";	 
        } else{
            echo "Input Produk Gagal";
        }         
        ?>
    </p>
    <?php endif; ?>
</div>

    </body>	 
</html>	 	