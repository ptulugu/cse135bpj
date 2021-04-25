#! /usr/bin/env python
import sys

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n")
    print("<html><head><title>POST Message Body</title></head>\
           <body><h1 align=center>POST Message Body</h1>\
           <hr/>")

    print("Message Body: ")
    hasInput = False
    for line in sys.stdin:
        print(line)
        hasInput = True

    if(hasInput == False):
        print("(null)")

    print("</body></html>")