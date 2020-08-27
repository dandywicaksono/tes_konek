<!DOCTYPE html>
<html>
   <head>
      <title>Luas dan Keliling</title>
   </head>
      
      <body>
         <form method = 'post' action = '<?php echo $_SERVER['PHP_SELF']; ?>'>
	    <table style="width: 300px">
	       <tr>
	          <td><strong>PANJANG</strong></td>
		  <td><strong>LEBAR</strong></td>
	       </tr>
	       <tr>
		   <td><input type="text" name="panjang"  /></td>
	           <td><input type="text" name="lebar" /></td>
	       </tr>
	       <tr>
		   <td><br />
	               <label>
		          <input type="submit" name="submit" value="HITUNG">
		       </label>
		   </td>
		</tr>
	     </table>
	  </form>

	  <div id="hasil">
	     <?php
		error_reporting (E_ALL ^ E_NOTICE);
          ?>

	     <?php

		$panjang  = $_POST['panjang'];
		$lebar    = $_POST['lebar'];

		$luas	  = $panjang * $lebar;
		$keliling = (2 * $panjang) + (2 * $lebar);
		
		if ($panjang==null){
			$bangun = "";
		}else if($panjang==$lebar){
			$bangun = "Persegi";
		}else {
			$bangun = "Persegi Panjang";
		}

		echo ("<BR>");
		echo "Jenis Bangun adalah $bangun";
		echo ("<BR>");
		echo "Panjang = $panjang";
		echo ("<BR>");
		echo "Lebar = $lebar";
		echo ("<BR>");
		echo "Luas Bangun = $luas";
		echo ("<BR>");
		echo "Keliling Bangun = $keliling";
	     ?>
	  </div>
      </body>
</html>