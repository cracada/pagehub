<?php
if($_POST["act"]=="cal") {
	$nhour=$_POST["nhour"];
	$nmin=$_POST["nmin"];
	$shour=$nhour;
	$smin=$nmin;
	$c=9999-($nhour . $nmin);
	echo "<span class='pwd'> ". $c * $c."</span>";
}else{
	$shour=date("G");
	$smin=date("i");
}
echo "<br><br>";
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<title>PASSWD GEN</title>
<meta name="viewport" content="width=device-width">
<style>
body{font-size: 36px;text-align:center;background-color:#fdfcf8;}
select{font-size:48px;line-height:1.5em;min-width:147px;}
.pwd{font-size:48px;color:#ff0000;font-weight:700;line-height:1.5em}
.sub{height:76px;font-size:48px;vertical-align:bottom;min-width:311px;-webkit-appearance: none;border-radius: 10;background-color:#ddd;}
</style>
<body>

<form method="post" action="">
<input type="hidden" name="act" value="cal">
<select name="nhour">
<!--option value="<?php echo $shour;?>"><?php echo $shour;?></option-->
<?php
for ($x=1; $x<=24; $x++) {
	if($x==$shour) {
		$sx="selected";
	}else{
	$sx="";
	}
	echo "<option value='".$x."' ".$sx.">".$x."</option>";
}
?>
</select>
<select name="nmin">
<!--option value="<?php echo $smin;?>"><?php echo $smin;?></option-->
<?php
for ($y=1; $y<=60; $y++){
	if($y==$smin) {
		$ssy="selected";
	}else{
	$ssy="";
	}
	if($y < 10){
		$sy="0".$y;
	}else		{
		$sy=$y;
	}
//	echo "<option value='".$sy."'>".$sy."</option>";
	echo "<option value='".$sy."' ".$ssy.">".$sy."</option>";
}
?>
</select>
<input type="submit" class="sub" value="查询" style="margin-top:20px;">
</form>


</body></html>