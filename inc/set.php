<?php 

	
	$url		=	'/menu/test/';

	//$lan = str_replace('/','',$_SERVER['REQUEST_URI']);

	$lan = explode('/',$_SERVER['REQUEST_URI']);
	$lan = $lan[count($lan)-1];

	$lan = in_array($lan, ['tr','en','ar']) ? $lan : 'tr';

	$langs = $langs[$lan];





	function _e($e,$d=0){
		
		echo '<pre>';
			print_r($e);
		echo '<pre>';	

		if($d) die();
	}


	
	function path($file='',$don=false){

		global $url ;
		
		if( isset($don) && $don==true) 
		{
			$a= $url.'dist/'.$file;
			return $a;
		}
		else
		{
			
			echo $url.'dist/'.$file;
		}
	}
	


	function lan($key,$out=false){
		
		global $langs;
		

		$str = $langs[$key] ?? 'err:'.$key;

		if($out) return $str;

		
		echo $str;
	}



	
	
	
?>