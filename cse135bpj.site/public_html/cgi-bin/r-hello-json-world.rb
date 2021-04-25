#!/usr/bin/ruby -w

time1 = Time.new
puts "Cache-Control: no-cache\r\n"
puts "Content-type: application/json\r\n\r\n"
puts "{\n\t\"message\": \"Hello, Ruby! -BPJ\",\n"
puts "\t\"date\": \"" + time1.to_s + "\",\n"
puts "\t\"currentIP\": \"" +  ENV["REMOTE_ADDR"] + "\"\n}\n"