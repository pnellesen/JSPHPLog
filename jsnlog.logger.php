<?php
/*
 * Created on Nov 25, 2013 by Pat Nellesen (pat@pnellesen.com)
 *
 * Simple logger to write Javascript error messages to system Error log file.
 * Expects JSNLog (http://js.jsnlog.com/) to be implemented in web page code.
 *
 */
 $JLKeys = parse_ini_file("jsnlog.ini.php",true);
 $msg_type = 0;
 $destination = "";
 $extra_headers = "";
 if (is_array($JLKeys) && array_key_exists('server',$JLKeys)) {
 	foreach($JLKeys['server'] as $key => $item) {
 		switch($key) {
 			case "msg_type":
 				$msg_type = $item;
 				break;
 			case "destination":
 				$destination = $item;
 				break;
 			case "extra_headers":
 				$extra_headers = $item;
 		}
  	}
 }
 $jslog_input = json_decode($HTTP_RAW_POST_DATA,true);
 if (is_array($jslog_input) && array_key_exists("lg",$jslog_input)) {
 	 foreach($jslog_input["lg"] as $msgItem) {
	 	 $jslog_msg = $msgItem["m"];
		 error_log("[JSPHPLog]: $jslog_msg", $msg_type, $destination, $extra_headers);
 	 }
	 $msg = "success";	
 } else {
 	$msg = "failure - no [lg] element found in request";
 }
 echo(json_encode(array('result',$msg)));// return a success/fail message;
?>
