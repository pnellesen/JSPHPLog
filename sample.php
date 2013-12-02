<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
<head>
  <title> </title>
 </head>
 <body>
 <p>Sample JSPHPLog Code. Configures the logger then submits a log message.</p>
 <!-- Include the JSNLog Javascript on the page, and set up the parameters -->
  <?php include "jsnlog.config.php";?>
  <script language="javascript">
  	JL().info("Info message sent from JSNLog");
  	JL().trace("Trace message sent from JSNLog");//Won't be sent with default config'
  	JL().warn("Warn message sent from JSNLog");
  	JL().error("Error message sent from JSNLog");
  </script>
 </body>
  
</html>
