;<?php exit();// Kills parser, nothing else is sent to screen if viewed in browser ?>

; Configuration file for JSPHPLog. Will set up default logger/appenders and their options
; see JSNLog (http://js.jsnlog.com/) documentation for additional information

; --------------------------------------------------------------------------------
; Default Javascript Appender setup. Will be used for all non-named Javascript Loggers.
; --------------------------------------------------------------------------------
[appender] 
type="appender" ;type field is required. Can be "appender","logger","JL", or "server"
options[url]="jsnlog.logger.php";

; Add additional Javascript Appender options as shown below (Default values indicated)
;options[level]="TRACE"
;options[userAgentRegex]=''
;options[ipRegex]=''
;options[disallow]=''
;options[storeInBufferLevel]="ALL"
;options[sendWithBufferLevel]="OFF"
;options[bufferSize]=0
;options[batchSize]=1

; ---------------------------------------------
; You can add additional Javascript  appenders as desired.
; ---------------------------------------------
;[appender_1] 
;type="appender" 
;options[url]="jsnlog.logger.php"
;options[batchSize]=2
;options[level]=4000

;[appender_2] 
;type="appender"
;options[url]="jsnlog.logger.php"
;options[batchSize]=4
;options[level]=2000

; ----------------------------------------------------------------------------------------------------------
; You can also add additional Javascript loggers and logger options. Note that the Javascript Logger calls 
; must reference the correct logger if named loggers are used (i.e. "JL('logger_1').info('Info message');")
; ----------------------------------------------------------------------------------------------------------
;[logger_1] 
;type="logger"
;appenders=appender_1,appender_2 ; Used to tell loggers which appenders to use.
;options[level]=''
;options[userAgentRegex]=''
;options[ipRegex]=''
;options[disallow]=''
;options[onceOnly]=''

; ------------------------------------
; Set Global options for all Javascript Loggers
; ------------------------------------
;[JL]
;type="JL"
;options[enabled]=true ; "true" or "false"
;options[maxMessages]=1
;options[clientIP]=""
;options[requestId]=""

; --------------------------------------------------------------------------------
; Set options to be used in jsnlog.logger.php. Things like whether or not to send emails, etc.
; --------------------------------------------------------------------------------
;[server]
;type="server"
;msg_type="0" ;see PHP "error_log" documentation for message type options
;destination="" ;see PHP "error_log" documentation for destination options
;extra_headers="" ;see PHP "error_log" documentation for extra header options