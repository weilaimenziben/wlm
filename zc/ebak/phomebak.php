<?php
require('class/connect.php');
require('class/db_sql.php');
require('class/functions.php');
require LoadLang('f.php');
$phome=$_GET['phome'];
if(empty($phome))
{$phome=$_POST['phome'];}
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$link=db_connect();
$empire=new mysqlquery();
if($phome=="DoEbak")//初使化备份表
{
	Ebak_DoEbak($_POST);
}
elseif($phome=="BakExe")//备份表(按文件)
{
	$t=$_GET['t'];
	$s=$_GET['s'];
	$p=$_GET['p'];
	$mypath=$_GET['mypath'];
	$alltotal=$_GET['alltotal'];
	$thenof=$_GET['thenof'];
	$fnum=$_GET['fnum'];
	$stime=$_GET['stime'];
	Ebak_BakExe($t,$s,$p,$mypath,$alltotal,$thenof,$fnum,$stime);
}
elseif($phome=="BakExeT")//备份表(按记录)
{
	$t=$_GET['t'];
	$s=$_GET['s'];
	$p=$_GET['p'];
	$mypath=$_GET['mypath'];
	$alltotal=$_GET['alltotal'];
	$thenof=$_GET['thenof'];
	$fnum=$_GET['fnum'];
	$auf=$_GET['auf'];
	$aufval=$_GET['aufval'];
	$stime=$_GET['stime'];
	Ebak_BakExeT($t,$s,$p,$mypath,$alltotal,$thenof,$fnum,$auf,$aufval,$stime);
}
elseif($phome=="ReData")//恢复数据
{
	$add=$_POST['add'];
	$mypath=$_POST['mypath'];
	Ebak_ReData($add,$mypath);
}
else
{
	printerror("ErrorUrl","history.go(-1)");
}
?>