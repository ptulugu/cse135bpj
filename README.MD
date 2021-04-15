README

Login for apache server:
Username: grader
Password: cse135Password

Link to website:
https://cse135bpj.site

Details of Github auto deploy setup:
TODO

Login info for logging into site:
Username: grader
Password: cse135Password

Summary of changes to HTML file in DevTools after compression:
We did not change any of the HTML file because our compression was
enabled by default. We made sure it was compressed by using DevTools,
navigating to the Network tab, refreshing the page and checking the
files' response header "Content-Encoding", which says gzip.

Summary of removing 'server' header:
We installed the Apache mod_security module and changed the Apache
configuration file's ServerTokens to Full and SecServerSignature to
"CSE135 Server". We then restarted the webserver.


Analytics configuration:
Username: grader
Password: cse135Password
