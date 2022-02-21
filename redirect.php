<?php
  //Partner id here:
  $pid = 348;
  
  //settings:
  $chunkx = '?pid=';
  $domainName = "http://paperhelp.org/";
  $domainUrl = ($_GET["url"] == "admin.paperhelp.org") ? "http://admin.paperhelp.org" : $domainName.$_GET["url"];
  $url = $domainUrl . $chunkx . $pid;
  HEADER("Location: {$url}");

  //insert to .htaccess: RewriteRule ^ext/([^/]*)$ redirect.php?url=$1 [L]
?>
