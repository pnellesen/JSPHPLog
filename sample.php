<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
<head>
  <title> </title>
 </head>
 <body>
 <p>Sample JSPHPLog Code. Configures the logger then submits a log message.</p>
 </body>
  <!-- Include the JSNLog Javascript on the page, and set up the parameters -->
  <?php include "jslog_config.php";?>
  <script language="javascript">
  	JL().info("This message sent from JSNLog");
  </script>
</html>
