<?php
include('/www/cnmo/Public_share/Config.inc.php');
$list = Libs_Tu_Base::getTuInfo(array('num'=>'5000','condition'=>' and productid=0'));
if($list){
	$Html = '<table><tr><td>排序&nbsp;&nbsp;</td><td>id</td><td>标题</td><td>后台地址</td></tr>';
	$i=1;
	foreach ($list as $key=>$val){
		$url = "http://admin.cnmo.com/admincp.php?action=photo_edit&did={$val['did']}";
		$Html .= "<tr><td>{$i}</td><td>{$val['did']}&nbsp;&nbsp;</td><td>{$val['title']}</td><td><a href='{$url}' target='_blank'>后台地址</a></td></tr>";
		$i++;
	}
	$Html .= '</table>';
	echo $Html;
}else{
	echo '没有没关联的了！';
}

?>