;<?php exit();// Kills parser, nothing else is sent to screen if viewed in browser ?>

; Configuration file for JSPHPLog. Will set up default logger/appenders and their options
; see JSNLog (http://js.jsnlog.com/) documentation for additional information

[appender_1]
type="appender" ;type field is required. Can be "appender" or "logger"
options["url"]="jsnlog.logger.php"

; add additional JSNLog Appender options as shown below
; options["batchSize"]=2
; options["level"]=2000

;[appender_2] ; can add additional appenders as desired.
;type="appender"
;options[url]="jsnlog.logger.php"
;options[batchSize]=3
;options[level]=2000
 

;[logger_1] ; can also add additional loggers and logger options as needed
;type="logger"

;options['level']=2000