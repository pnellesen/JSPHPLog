JSPHPLog
========

PHP Server side implementation for JSNLog (http://js.jsnlog.com/)

Uses the "error_log" command to save the log message from the JSNLog AJAX request to the default error log.

Example output:<br/>
[Tue Nov 26 15:43:22 2013] [error] [client xxx.xxx.xxx.xxx] [JSPHPLog]: This message sent from JSNLog, referer: http://*client site*/JSPHPLog/sample.php

<h3>Configuration options</h3>

  <p><b>Default</b></p>
  To use the default appender and logger, simply copy "jsnlog.logger.php","jsnlog.config.php", and "jsnlog.ini.php" files to your website root directory.
    
   <p><b>Custom configuration (simple)</b></p>
   To customize the Appenders or Logger configuration settings, you can add appender options to the "jsnlog.ini.php" file. For instance, to change change the "batchSize"
   or "level" options for the default appender, set up the first "[appender]" section as shown below: 

   ```
   [appender]
	url="jsnlog.logger.php"
	; add other appender options as well
	batchSize=2
	level=2000
	; name="appender 1"
   ```
    
  jsnlog.config.php sets up the JSNLog Javascript automatically.
