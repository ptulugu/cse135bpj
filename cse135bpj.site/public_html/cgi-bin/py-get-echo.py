#! /usr/bin/env python
import os
from urlparse import parse_qs

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: text/html\n")
    print("<html><head><title>GET query string</title></head>\
           <body><h1 align=center>GET query string</h1>\
           <hr/>")
    query = os.environ['QUERY_STRING']
    print("Raw query string: " + query + "\n<br/><br/>")
    print("<table> Formatted Query String:")

    parsed_querys = parse_qs(query)
    for var, [val] in parsed_querys.items():
        print("<tr><td>" + str(var) + " :</td><td>" + str(val) + "</td></tr>\n")

    print("</table>")
    print("</body></html>")