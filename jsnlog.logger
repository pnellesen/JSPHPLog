<?php
/*
 * Created on Nov 25, 2013 by Pat Nellesen (pat@pnellesen.com)
 *
 * Simple logger to write Javascript error messages to system Error log file.
 * Expects JSNLog (http://js.jsnlog.com/) to be implemented in web page code.
 *
 * To process this file as .php, you will need to add a <FilesMatch> directive
 * in your Apache configuration file such as:
 * <FilesMatch "\jsnlog.logger$">
 *        SetHandler application/x-httpd-php
 *   </FilesMatch>
 * 
 * Alternatively, you can rename this file with a .php extension and add a SetEnv "url" option. See README.md or
 * JSNLog documentation for more details
 */
 $jslog_input = json_decode($HTTP_RAW_POST_DATA,true);
 if (array_key_exists("lg",$jslog_input)) {
 	 foreach($jslog_input["lg"] as $msgItem) {
	 	 $jslog_msg = $msgItem["m"];
		 error_log("[JSPHPLog]: $jslog_msg", 0);
 	 }
	 $msg = "success";	
 } else {
 	$msg = "failure - no [lg] element found in request";
 }
 echo(json_encode(array('result',$msg)));// return a success/fail message;
?>
