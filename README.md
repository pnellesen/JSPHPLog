JSPHPLog
========

PHP Server side implementation for JSNLog (http://js.jsnlog.com/)

Uses the "error_log" command to save the log message from the JSNLog AJAX request to the default error log.

Example output:
[Tue Nov 26 15:43:22 2013] [error] [client xxx.xxx.xxx.xxx] [JSPHPLog]: This message sent from JSNLog, referer: http://*client site*/JSPHPLog/sample.php

Configuration options
  
  Using Apache2 "SetEnv" directive inside \<VirtualHost\>:
  
    <VirtualHost *:80>
    ...
    SetEnv JSLogConfig {"src":"jsnlog.min.js","appenderOpts":{"url":"jslog_logger.php","batchSize":3}}
    </VirtualHost>
    
  jslog_config.php will look for the $_SERVER["JSLogConfig"] variable and will set up the JSNLog Javascript accordingly.
