#!/usr/bin/ruby -w

  # Headers
  puts "Cache-Control: no-cache\n"
  puts "Set-Cookie: username=destroyed\n"
  puts "Content-type: text/html\n\n"

  # Body - HTML
  puts "<html>"
  puts "<head><title>Ruby Session Destroyed</title></head>"
  puts "<body>"
  puts "<h1>Ruby Session Destroyed</h1>"

  # Links
  puts "<a href=\"/cgi-bin/r-sessions-1.rb\">Back to Page 1</a>"
  puts "<br />"
  puts "<a href=\"/cgi-bin/r-sessions-2.rb\">Back to Page 2</a>"
  puts "<br />"
  puts "<a href=\"/r-cgiform.html\">Ruby CGI Form</a>"

  puts "</body>"
  puts "</html>"
