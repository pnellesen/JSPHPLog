JSPHPLog
========

PHP Server side implementation for JSNLog (http://js.jsnlog.com/)

Uses the PHP "error_log" function to save the log message from the JSNLog AJAX request to the default error log.

Example output:<br/>
[Tue Nov 26 15:43:22 2013] [error] [client xxx.xxx.xxx.xxx] [JSPHPLog]: This message sent from JSNLog, referer: http://*client site*/JSPHPLog/sample.php

<h3>Installation</h3>
  To install, simply copy "jsnlog.logger.php","jsnlog.config.php", and "jsnlog.ini.php" files to the root directory of your website, then include "jsnlog.config.php" in the PHP templates you want logging enabled on. See "sample.php" for an example. "jsnlog.config.php" sets up the JSNLog Javascript automatically.
  Note: "jsnlog.config.php" assumes the JSNLog source javascript (jsnlog.min.js) is located in the same directory.

<h3>Configuration options</h3>

  <p><b>Default</b></p>
  The default configuration will setup a single Logger and Appender, and will send Logger messages to the default error log for your server (as referenced by the PHP "error_log" function). No additional configuration is needed.
    
   <p><b>Custom configuration (simple)</b></p>
   To customize the Appenders or Logger configuration settings, you can add appender options to the "jsnlog.ini.php" file. For instance, to change change the "batchSize" or "level" options for the default appender, set up the first "[appender]" section as shown below: 

   ```
   [appender]
	type="appender"
	options[url]="jsnlog.logger.php"
	; add other appender options as well
	options[batchSize]=2
	options[level]=2000
   ```
    
  
