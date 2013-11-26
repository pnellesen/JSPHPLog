<?php
/*
 * Created on Nov 25, 2013 by Pat Nellesen (pat@pnellesen.com)
 *
 * Simple logger to write Javascript error messages to system Error log file.
 * Expects JSNLog (http://js.jsnlog.com/) to be implemented in web page code.
 * 
 */
 $jslog_input = json_decode($HTTP_RAW_POST_DATA,true);
 $jslog_msg = $jslog_input["lg"][0]["m"];
 $jslog_timestamp = $jslog_input["lg"][0]["t"];
 error_log("[JSPHPLog]: $jslog_msg", 0);
 echo(json_encode(array('log_status','success')));
?>