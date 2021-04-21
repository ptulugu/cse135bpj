<?php

session_start();

if(isset($_SESSION['named'])) {
    unset($_SESSION['named']);
}


print "<html>";
print "<head>";
print "<title>PHP Session Destroyed</title>";
print "</head>";
print "<body>";
print "<h1>Session Destroyed</h1>";
print "<a href=\"/php-state-demo.html\">Back to the PHP Form</a><br />";
print "<a href=\"/cgi-bin/php-state-demo-sessions-1.php\">Back to Page 1</a><br />";
print "<a href=\"/cgi-bin/php-state-demo-sessions-2.php\">Back to Page 2</a>";
print "</body>";
print "</html>";

?>