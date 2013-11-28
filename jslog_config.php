<?php
/*
 * Created on Nov 25, 2013
 *
 * This file automatically includes the JSNLog Javascript 
 * and creates the JSNLog configuration parameters
 * Include this script on any page/site you wish
 * implement JSNLog on. Needs to be before the JSNLog loggers are initialized
 */
 if (isset($_SERVER["JLAppenderCfg"])) {
	$JLAppenderCfg = json_decode($_SERVER["JLAppenderCfg"],true);// User server ENV variable if found;
 }
 if (isset($_SERVER["JLLoggerCfg"])) {
 	$JLLoggerCfg = json_decode($_SERVER["JLLoggerCfg"],true);// User server ENV variable if found;
 }
 ?>
 <script type="text/javascript" src="/lib/jsnlog.min.js"></script>
 <script language="javascript">
  	var appender = JL.createAjaxAppender();
  	<?php
  	$js_output = "";
  	if (isset($JLAppenderCfg) && count($JLAppenderCfg["appenderOpts"]) > 0) {
  		$js_output = "appender.setOptions(".json_encode($JLAppenderCfg["appenderOpts"]).");\n";
  	}
  	echo($js_output);
  	?>
  	JL().setOptions({
  		"appenders": [appender]
  	});
 </script>
 