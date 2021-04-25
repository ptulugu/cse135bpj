#!/usr/bin/ruby -w
# print HTML header	
puts "Cache-Control: no-cache\n"
puts "Content-type: text/html\n\n"
puts "<html><head><title>Ruby Environment Variables</title></head> \
  <body><h1 align=center>Ruby Environment Variables</h1> \
    <hr/>\n"

for i in ENV.keys
  puts i + "=" + ENV[i] + "\n<br/>"
end
# print HTML footer
puts "</body></html>"