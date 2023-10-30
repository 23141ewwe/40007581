<?
$sdate = '2023-06-01';
$edate = '2023-10-13';

if( @$_GET['sdate'] ) $sdate = @$_GET['sdate'];
if( @$_GET['edate'] ) $edate = @$_GET['edate'];

$sdate_time = strtotime($sdate);
$edate_time = strtotime($edate);
$randTxt = "";
$i = 0;

$nums = @$_GET['nums'];
if( !$nums ) $nums = "10";

$randArr = array();
while( $i <= $nums ) {
	array_push($randArr, date("Y-m-d 12:30:00", rand($sdate_time, $edate_time)));
	//echo "<br>";
	$i++;
}
sort($randArr);

foreach( $randArr as $v ) {
	echo $v."<br>";
}

?>
<form action="" method="GET">
	<input type="text" name="sdate" value="<?=$sdate?>" placeholder="시작일">
	<input type="text" name="edate" value="<?=$edate?>" placeholder="종료일">
	<input type="text" name="nums" value="<?=$nums?>" placeholder="랜덤값갯수">
	<input type="submit" value="확인">
</form>