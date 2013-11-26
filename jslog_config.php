<?php
/*
 * Created on Nov 25, 2013
 *
 * This file automatically includes the JSNLog Javascript 
 * and creates the JSNLog configuration parameters
 * Include this script on any page/site you wish
 * implement JSNLog on. Needs to be before the JSNLog loggers are initialized
 */
 $jsnlog_opts = Array(
 	"src" => "/lib/jsnlog.min.js",// Location of the jsnlog Javascript file
 	"url" => "jslog_logger.php"// URL to send the logs to
 );
 ?>
 <script type="text/javascript" src="<?php echo($jsnlog_opts["src"]);?>"></script>
 <script language="javascript">
  	var appender = JL.createAjaxAppender();
  	appender.setOptions({
  		"url":"<?php echo($jsnlog_opts["url"]);?>"
  	});
  	JL().setOptions({
  		"appenders": [appender]
  	});
 </script>