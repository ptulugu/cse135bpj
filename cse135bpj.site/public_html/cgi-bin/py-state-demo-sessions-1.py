#! /usr/bin/env python
import os
import sys

if __name__ == '__main__':
    print("Cache-Control: no-cache")

    username = ""
    
    # for line in sys.stdin:
    #     username = line
    # name = ""
    # if(len(username) > 0):
    #     if(username[0] == 'u'):
    #         name = username.split("=")[1]

    for line in sys.stdin:
        username = line.split("=")

    name = ""
    if(username and username[0] == "username"):
        name = username[1]

    if(len(name) > 0):
        print("Content-type: text/html")
        print("Set-Cookie: " + name + "\n")
    else:
        print("Content-type: text/html\n")

    print("<html><head><title>Python Sessions</title></head>\
           <body><h1>Python Sessions Page 1</h1>\
           <hr/>")
    print("<table>")

    if(len(name) > 0):
        print("<tr><td>Cookie:</td><td>" + name + "</td></tr>")
    elif(os.environ['HTTP_COOKIE'] != None):
        cookie = os.environ['HTTP_COOKIE']
        print("<tr><td>Cookie:</td><td>" + cookie.split(";")[0] + "</td></tr>")
    else:
        print("<tr><td>Cookie:</td><td>None</td></tr>")

    print("</table>")

    print("<br/>")
    print("<a href=\"/cgi-bin/py-state-demo-sessions-2.py\">Session Page 2</a>")
    print("<br/>")
    print("<a href=\"/py-state-demo.html\">Python CGI Form</a>")
    print("<br/><br/>")

    print("<form action=\"/cgi-bin/py-state-demo-destroy-sessions.py\" method=\"get\">")
    print("<button type=\"submit\">Destroy Session</button>")
    print("</form>")

    print("</body></html>")