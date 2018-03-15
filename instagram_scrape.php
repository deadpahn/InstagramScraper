<?
//must be manually create by inspecting the elements of the instagram page
$jsonFile = file_get_contents("./scrapeme.json", true);

$arrJson = json_decode($jsonFile, true);

foreach($arrJson as $key => $value){
	if($key =="media"){
		foreach($value as $nodeKey => $nodeValue){
			if($nodeKey =="nodes"){
				foreach($nodeValue as $imageKey => $imageValue){
					$newFileName = 1;
					$file_location = explode("?ig_cache_key", $imageValue["display_src"]);
					 echo "wget '{$file_location[0]}';\n";
				}
			}
		}
	}
}

?>
