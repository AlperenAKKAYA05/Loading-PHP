<?php

error_reporting(0);

$dosya="loading.txt";

$d = fopen($dosya, r);
$bilgi = fread($d, filesize($dosya));

if($bilgi==100){
$yeni= 0;
fclose($d);
}
else{
$yeni= $bilgi+1;
fclose($d);
}

$d = fopen($dosya, w);
    fwrite($d, $yeni);
    fclose($d);

$i = $yeni;
   
?>
<style type="text/css">
	.outter{
		height: 25px;
		width: 500px;
		border:solid 1px #000;
	}
	.inner{
		height: 25px;
		width: <?php echo $i ?>%;
		border-right:solid 1px #000;
		background-color: lightblue;
	}
	.text{
		padding-left: 5px;
		padding-top: 4px;
	}
</style>
<div class="outter">
	<div class="inner">
		<div class="text">%<?php echo $i; ?>
		</div>
	</div>
</div>

