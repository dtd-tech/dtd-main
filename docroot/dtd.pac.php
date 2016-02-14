<?php
/**
 * @file
 * Simple file that generates a Proxy Auto-config file (PAC)
 * Based on the ip adddress and port the script is being called as.
 */
# First some headers to make it's correctly handled by browsers.
header("Content-type: application/x-ns-proxy-autoconfig");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sun, 26 Apr 1981 05:00:00 GMT");
?>
// select on the URL
function FindProxyForURL(url, host){
  // Match all URLS ending in .dtd and send them right here.
  if (shExpMatch(host, "*dtd"))
    return "PROXY <?php echo $_SERVER['SERVER_ADDR'] . ":" . $_SERVER['SERVER_PORT']; ?>"
  ;
  // Everything else can just be fetched directly.
  return "DIRECT";
}
