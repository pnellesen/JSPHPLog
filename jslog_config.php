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
 	"src" => "/lib/jsnlog.min.js",// Location of the jsnlog Javascript file,
 	"apndOpts" => Array (
 		"url" => "jslog_logger.php",// URL to send the logs to
 		"batchSize" => 3
 	)
 );
 ?>
 <script type="text/javascript" src="<?php echo($jsnlog_opts["src"]);?>"></script>
 <script language="javascript">
  	var appender = JL.createAjaxAppender();
  	<?php if (count($jsnlog_opts["apndOpts"]) > 0) {?>
  	appender.setOptions({
	 <?php foreach($jsnlog_opts["apndOpts"] as $k => $v) {?>
	  "<?php echo($k)?>":"<?php echo($v)?>",
	 <?php }?>
  	});
  	<?php }?>
  	JL().setOptions({
  		"appenders": [appender]
  	});
 </script>
 