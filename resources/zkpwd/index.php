<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<title>PASSWD GEN</title>
<meta name="viewport" content="width=device-width">
<style>
body{font-size: 36px;text-align:center;background-color:#fdfcf8;}
select{font-size:48px;line-height:1.5em;min-width:147px;}
.pwd{font-size:68px;color:#ff0000;font-weight:700;line-height:1.5em;padding:5px 12px;margin:5px 5px; background-color:#ddc;border:1px solid #bbb;}
.sub{height:76px;font-size:48px;vertical-align:bottom;min-width:311px;-webkit-appearance: none;border-radius: 10;background-color:#ddd;}
</style>
<body onLoad="calp();">
<br>
<form method="post" name="zk" action="">
<input type="hidden" name="act" value="cal">
<select name="nhour" onchange="calp()">
<!--option value="<?php echo $shour;?>"><?php echo $shour;?></option-->
<?php
$shour=date("G");
$smin=date("i");
for ($x=1; $x<=24; $x++) {
	if($x==$shour) {
		$sx="selected";
	}else{
	$sx="";
	}
	echo "<option value='".$x."' ".$sx.">".$x."</option>";
}
?>
</select>:
<select name="nmin" onchange="calp()">
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
</form>
<br>
<script>
function calp(){
	var h=document.zk.nhour.value;
	var m=document.zk.nmin.value;
	var c=((9999-(h + m))*(9999-(h + m)));
	//alert(c);
	p.innerText=c;
}
</script>
<div><span id="p" class="pwd">0</span></div>
</body></html>