#! /usr/bin/env python
import os
import sys

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n\n")

    print("<html><head><title>Python Sessions</title></head>\
         <body><h1>Python Sessions Page 2</h1>\
         <hr/>")
    print("<table>")

    if(os.environ['HTTP_COOKIE'] != None):
        cookie = os.environ['HTTP_COOKIE']
        print("<tr><td>Cookie:</td><td>" + cookie.split(";")[0] + "</td></tr>")
    else:
        print("<tr><td>Cookie:</td><td>None</td></tr>")

    print("</table>")

    print("<br/>")
    print("<a href=\"/cgi-bin/py-state-demo-sessions-1.py\">Session Page 1</a>")
    print("<br/>")
    print("<a href=\"/py-cgiform.html\">Python CGI Form</a>")
    print("<br/><br/>")

    print("<form action=\"/cgi-bin/py-state-demo-destroy-sessions.py\" method=\"get\">")
    print("<button type=\"submit\">Destroy Session</button>")
    print("</form>")

    print("</body></html>")