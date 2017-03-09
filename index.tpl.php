<?php

if(isset($_POST['logib'])){
	ìf(	$_POST['login'] == 'rafael' &&
		$_POST['password'] == '123456'){
	}else{
			$msg = 'Senha ou usuario incorreto';
}

include_once('index.tpl.php');
?>
