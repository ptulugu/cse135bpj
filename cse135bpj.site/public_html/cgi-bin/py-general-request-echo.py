#! /usr/bin/env python
import sys
import os

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n")
    print("<html><head><title>General Request Echo</title></head>\
           <body><h1 align=center>General Request Echo</h1>\
           <hr/>")

    print("<table>\n")
    print("<tr><td>Protocol:</td><td>" + os.environ['SERVER_PROTOCOL'] + "</td></tr>\n")
    print("<tr><td>Method:</td><td>" + os.environ['REQUEST_METHOD'] + "</td></tr>\n")
    
    hasInput = False
    
    for line in sys.stdin:
        hasInput = True
        print("<tr><td>Message Body:</td><td> " + line + "</td></tr>\n")

    if(hasInput == False):
        print("<tr><td>Message Body:</td><td> (null)</td></tr>\n")

    print("</body></html>")