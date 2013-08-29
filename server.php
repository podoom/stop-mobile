<?
	if(isset($_REQUEST['stuff']))
	{
		$teste  = json_decode(file_get_contents('test.json'), true);
		if(!$teste) $teste = array();
		array_push($teste, $_REQUEST['stuff']);
		file_put_contents('test.json',json_encode($teste));
	}
?>
