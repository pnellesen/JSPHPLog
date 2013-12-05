<script type="text/javascript" src="jsnlog.min.js"></script>
<?php
/*
 * Created on Nov 25, 2013
 *
 * This file automatically includes the JSNLog Javascript 
 * and creates the JSNLog configuration parameters
 * Include this script on any page/site you wish
 * implement JSNLog on. Needs to be before the JSNLog loggers are initialized
 */
$JLKeys = parse_ini_file("jsnlog.ini.php",true);
$JLCfg = array_values($JLKeys);
$appender_ids = array();
$js_output = "";

if (is_array($JLCfg) && count($JLCfg) > 0) {
	$js_output = "<script language=\"javascript\">\n";		
	foreach(array_keys($JLKeys) as $key => $item) {
	 	if (array_key_exists('type',$JLCfg[$key]) and $JLCfg[$key]['type'] == "appender") {
		 	$js_output .= "var " . $item . "= JL.createAjaxAppender();\n";
		 	if (array_key_exists('options',$JLCfg[$key]) && count($JLCfg[$key]['options']) > 0) {
		 		$js_output .= $item . ".setOptions(".json_encode($JLCfg[$key]['options']).");\n";
		 	}
		 	array_push($appender_ids,$item);
	 	} elseif (array_key_exists('type',$JLCfg[$key]) and $JLCfg[$key]['type'] == "logger") {
	 		//echo ("Got a logger: " . $item . "\n");
	 	}
 	}	
}
$js_output .= "JL().setOptions({
		\"appenders\": [" . implode(",",$appender_ids) . "]
	});\n";
$js_output .= "</script>\n";
echo($js_output);
//print_r($JLCfg);
?> 