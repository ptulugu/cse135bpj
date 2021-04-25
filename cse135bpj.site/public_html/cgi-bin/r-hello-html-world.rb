#!/usr/bin/ruby -w
puts "Cache-Control: no-cache\n"
puts "Content-type: text/html\n\n"
puts "<html><head><title>Hello Ruby!</title></head>\
	<body><h1 align=center>BPJ was here - Hello, Ruby!</h1>\
  	<hr/>\n"

puts "This page was generated with Ruby<br/>\n"
time1 = Time.new
puts "This program was generated at: " + time1.to_s + "\n<br/>"
puts "Your current IP address is: " + ENV["REMOTE_ADDR"] + "<br/>"
 
# Print HTML footer
puts "</body></html>"