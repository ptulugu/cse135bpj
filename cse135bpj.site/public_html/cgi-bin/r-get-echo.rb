#!/usr/bin/ruby -w
# Print HTML header
  puts "Cache-Control: no-cache\n"
  puts "Content-type: text/html\n\n"
  puts "<html><head><title>GET query string</title></head>\
	<body><h1 align=center>GET Ruby query string</h1>\
  	<hr/>\n"

  # Get and format query string
  query = ENV["QUERY_STRING"]
  puts "Raw query string: " + query + "\n<br/><br/>"

  arr = query.split("&")

  puts "<table> Formatted Query String:"


  for str in arr
    pair = str.split("=")
    puts "<tr><td>" + pair[0] +  ":</td><td>" + pair[1] + "</td></tr>\n"
  end

  puts "</table>"

  # Print HTML footer  
  puts "</body>"
  puts "</html>"