;<?php exit();// Kills parser, nothing else is sent to screen if viewed in browser ?>

; Configuration file for JSPHPLog. Will set up default logger/appenders and their options
; see JSNLog (http://js.jsnlog.com/) documentation for additional information

[appender] ; Default appender setup. Will be used for all non-named loggers.
type="appender" ;type field is required. Can be "appender","logger","JL", or "server"
options[url]="jsnlog.logger.php";

;add additional JSNLog Appender options as shown below (Default values indicated)
;options[level]="TRACE"
;options[userAgentRegex]=''
;options[ipRegex]=''
;options[disallow]=''
;options[storeInBufferLevel]="ALL"
;options[sendWithBufferLevel]="OFF"
;options[bufferSize]=0
;options[batchSize]=1


;[appender_1] ;You can add additional appenders as desired.
;type="appender" 
;options[url]="jsnlog.logger.php"
;options[batchSize]=3
;options[level]=2000

;[appender_2] 
;type="appender"
;options[url]="jsnlog.logger.php"
;options[batchSize]=4
;options[level]=4000

 
; You can also add additional loggers and logger options. Note that the Logger calls in your Javascript
; must reference the correct logger if named loggers are used (i.e. "JL('logger_1').info('Info message');")
;[logger_1] 
;type="logger"
;appenders=appender_1,appender_2 ; Used to tell loggers which appenders to use.
;options[level]=2000
;options[userAgentRegex]=''
;options[ipRegex]=''
;options[disallow]=''
;options[onceOnly]=''

;Set Global options for all Loggers
;[JL]
;type="JL"
;enabled="true" ; "true" or "false"
;options[maxMessages]=0
;options[clientIP]=""
;options[requestId]="10001110101"

;Set options to be used in jsnlog.logger.php. Things like whether or not to send emails, etc.
;[server]
;type="server"