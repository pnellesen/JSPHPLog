<?php
/*
 * Created on Nov 25, 2013 by Pat Nellesen (pat@pnellesen.com)
 *
 * Simple logger to write Javascript error messages to system Error log file.
 * Expects JSNLog (http://js.jsnlog.com/) to be implemented in web page code.
 *
 */
$msg = "failure - no JSNLog messages found in request";
$jslog_input = json_decode($HTTP_RAW_POST_DATA,true);
if (is_array($jslog_input) && array_key_exists("lg",$jslog_input)) {
	$msg="success";
	 $JLKeys = parse_ini_file("jsnlog.ini.php",true);
	 $log_options = array(0,'','');
	 if (is_array($JLKeys) && array_key_exists('server',$JLKeys)) {
	 	foreach($JLKeys['server'] as $key => $item) {
	 		switch($key) {
	 			case "msg_type":
	 				$log_options[0] = $item;
	 				break;
	 			case "destination":
	 				$log_options[1] = $item;
	 				break;
	 			case "extra_headers":
	 				$log_options[2] = $item;
	 				break;
	 		}
	  	}
	 }
		 foreach($jslog_input["lg"] as $msgItem) {
	 	 $jslog_msg = $msgItem["m"];
		 $log_result = error_log("[JSPHPLog]: $jslog_msg" . "\n", $log_options[0], $log_options[1], $log_options[2]);
	 }
	 if (!$log_result) $msg="failure - problem writing to error_log";	
}
echo(json_encode(array('result',$msg)));// return a success/fail message;
?>
