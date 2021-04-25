#!/usr/bin/ruby -w

# Headers
  puts "Cache-Control: no-cache\n"

  # Get Name from Environment
  usernameSplit = ARGF.read.split("=")
  name = ""
  if usernameSplit[0] == "username" and usernameSplit[1] != nil
    name = usernameSplit[1]
  end
  
  # Set the cookie using a header, add extra \n to end headers
  if name.length > 0
    puts "Content-type: text/html\n"
    puts "Set-Cookie: " + name + "\n\n"
  else
    puts "Content-type: text/html\n\n"
  end

  # Body - HTML
  puts "<html>"
  puts "<head><title>Ruby Sessions</title></head>\n"
  puts "<body>"
  puts "<h1>Ruby Sessions Page 1</h1>"
  puts "<table>"

# First check for new Cookie, then Check for old Cookie
  if name.length > 0
    puts "<tr><td>Cookie:</td><td>" + name + "</td></tr>\n"
  elsif ENV["HTTP_COOKIE"] != nil and ENV["HTTP_COOKIE"] != "destroyed"
    puts "<tr><td>Cookie:</td><td>" + ENV["HTTP_COOKIE"].split(";")[0] + "</td></tr>\n"
  else
    puts "<tr><td>Cookie:</td><td>None</td></tr>\n"
  end

  puts "</table>"

  # Links for other pages
  puts "<br />"
  puts "<a href=\"/cgi-bin/r-sessions-2.rb\">Session Page 2</a>"
  puts "<br />"
  puts "<a href=\"/r-cgiform.html\">Ruby CGI Form</a>"
  puts "<br /><br />"

  # Destroy Cookie button
  puts "<form action=\"/cgi-bin/r-destroy-session.rb\" method=\"get\">"
  puts "<button type=\"submit\">Destroy Session</button>"
  puts "</form>"

  puts "</body>"
  puts "</html>"