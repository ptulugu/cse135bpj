#!/usr/bin/ruby -w


# Print HTML header
puts "Cache-Control: no-cache\n"
puts "Content-type: text/html\n\n"
puts "<html><head><title>POST Message Body</title></head>\
  <body><h1 align=center>Ruby POST Message Body</h1>\
    <hr/>\n"

puts "Message Body: " + ARGF.read + "\n<br/>"

# Print HTML footer
puts "</body>"
puts "</html>"
