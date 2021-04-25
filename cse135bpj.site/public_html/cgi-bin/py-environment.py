#! /usr/bin/env python
import os

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n")
    print("<html><head><title>Environment Variables</title></head>\
           <body><h1 align=center>Environment Variables</h1>\
           <hr/>")

    for k, v in os.environ.items():
        print(k + "=" + v + "<br/>")

    print("</body></html>")