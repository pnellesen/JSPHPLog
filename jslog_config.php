<?php
/*
 * Created on Nov 25, 2013
 *
 * This file automatically includes the JSNLog Javascript 
 * and creates the JSNLog configuration parameters
 * Include this script on any page/site you wish
 * implement JSNLog on. Needs to be before the JSNLog loggers are initialized
 */
 if (isset($_SERVER["JSLogConfig"])) {
	$JSLogConfig = json_decode($_SERVER["JSLogConfig"],true);// User server ENV variable if found;
 } else {
 	$JSLogConfig = Array(
	 	"src" => "/lib/jsnlog.min.js",// Location of the jsnlog Javascript file,
	 	"appenderOpts" => Array (
	 		"url" => "jslog_logger.php",// URL to send the logs to
	 		"batchSize" => 3
	   )
	);
 }
 ?>
 <script type="text/javascript" src="<?php echo($JSLogConfig["src"]);?>"></script>
 <script language="javascript">
  	var appender = JL.createAjaxAppender();
  	<?php
  	$js_output = "";
  	if (count($JSLogConfig["appenderOpts"]) > 0) {
  		$js_output = "appender.setOptions(".json_encode($JSLogConfig["appenderOpts"]).");\n";
  	}
  	echo($js_output);
  	?>
  	JL().setOptions({
  		"appenders": [appender]
  	});
 </script>
 