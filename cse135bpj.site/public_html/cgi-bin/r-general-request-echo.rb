#!/usr/bin/ruby -w


puts "Cache-Control: no-cache\n"
puts "Content-type: text/html\n\n"
puts "<html><head><title>General Request Echo</title></head> \
  <body><h1 align=center>General Request Echo</h1> \
    <hr/>\n"

# Get environment vars
puts "<table>\n"
puts "<tr><td>Protocol:</td><td>" + ENV["SERVER_PROTOCOL"] + "</td></tr>\n"
puts "<tr><td>Method:</td><td>" + ENV["REQUEST_METHOD"] + "</td></tr>\n"
puts "<tr><td>Message Body:</td><td>" + ARGF.read + "</td></tr>\n"

# Print HTML footer
printf("</body>");
printf("</html>");