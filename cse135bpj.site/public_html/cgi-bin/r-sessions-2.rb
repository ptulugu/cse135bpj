#!/usr/bin/ruby -w

  # Headers
  puts "Cache-Control: no-cache\n"
  puts "Content-type: text/html\n\n"

  # Body - HTML
  puts "<html>"
  puts "<head><title>Ruby Sessions</title></head>\n"
  puts "<body>"
  puts "<h1>Ruby Sessions Page 2</h1>"
  puts "<table>"

  if ENV["HTTP_COOKIE"] != nil and ENV["HTTP_COOKIE"] != "destroyed"
    puts "<tr><td>Cookie:</td><td>" + ENV["HTTP_COOKIE"].split(";")[0] + "</td></tr>\n"
  else
    puts "<tr><td>Cookie:</td><td>None</td></tr>\n"
  end

  puts "</table>"

  # Links for other pages
  puts "<br />"
  puts "<a href=\"/cgi-bin/r-sessions-1.rb\">Session Page 1</a>"
  puts "<br />"
  puts "<a href=\"/r-cgiform.html\">Ruby CGI Form</a>"
  puts "<br /><br />"

  # Destroy Cookie button
  puts "<form action=\"/cgi-bin/r-destroy-session.rb\" method=\"get\">"
  puts "<button type=\"submit\">Destroy Session</button>"
  puts "</form>"

  puts "</body>"
  puts "</html>"

