#! /usr/bin/env python
import os
import sys

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Set-Cookie: None")
    print("Content-type: text/html\n\n")

    print("<html><head><title>Python Session Destroyed</title></head>\
         <body><h1>Python Session Destroyed</h1>\
         <hr/>")

    print("<a href=\"/cgi-bin/py-state-demo-sessions-1.py\">Back to Page 1</a>")
    print("<br/>")
    print("<a href=\"/cgi-bin/py-state-demo-sessions-2.py\">Back to Page 2</a>")
    print("<br/>")
    print("<a href=\"/py-state-demo.html\">Python CGI Form</a>")
    print("<br/><br/>")

    print("</body></html>")