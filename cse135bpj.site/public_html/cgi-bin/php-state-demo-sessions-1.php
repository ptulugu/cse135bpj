<?php

session_start();
$name = null;
if(isset($_SESSION['named'])) {
    $name = $_SESSION['named'];
    //echo "test3";
} else {
    if(!empty($_POST['username'])) {
        $_SESSION['named'] = $_POST['username'];
        $name = $_SESSION['named'];
        //echo "test2";
    } else {
        //echo "test";
    }
}


print "<html>";
print "<head>";
print "<title>PHP Sessions</title>";
print "</head>";
print "<body>";

print "<h1>PHP Sessions Page 1</h1>";

if ($name){
	print("<p><b>Name:</b> $name");
}else{
	print "<p><b>Name:</b> You do not have a name set</p>";
}
print "<br/><br/>";
print "<a href=\"/cgi-bin/php-state-demo-sessions-2.php\">Session Page 2</a><br/>";
print "<a href=\"/php-cgiform.html\">PHP Form</a><br />";
print "<form style=\"margin-top:30px\" action=\"/cgi-bin/php-state-demo-destroy-sessions.php\" method=\"get\">";
print "<button type=\"submit\">Destroy Session</button>";
print "</form>";

print "</body>";
print "</html>";
?>