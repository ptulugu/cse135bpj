#! /usr/bin/env python
import datetime
import os

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n")
    print("<html><head><title>Hello Python World</title></head>\
           <body><h1 align=center>Hello HTML World</h1>\
           <hr/>")
    print("Hello World<br/>")
    today = datetime.datetime.now()
    print("This program was generated at: " + today.strftime("%c") + "<br/>")
    print("Your current IP address is: " + os.environ['REMOTE_ADDR'] )
    print("</body></html>")