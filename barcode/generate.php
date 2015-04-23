<?php 
    $num = (int)isset($_GET['num']) ? $_GET['num'] : '10';

   	$date = new DateTime();
    $barcode  = $date->getTimestamp()*99;
 //   $str2 = substr($str, 4);
    for($i=0; $i<$num; $i++)
    {
    	?>
    	<img src="test_1D.php?barcode=<?php echo substr(($barcode+$i)."", 2); ?>" /><br/><br/>
    	<?php
    }
 ?>