#! /usr/bin/env python
import datetime
import os

if __name__ == '__main__':
    print("Cache-Control: no-cache")
    print("Content-type: application/json\n")
    print("{\n\t\"message\": \"Hello World\",")
    today = datetime.datetime.now()
    print("\t\"date\": \"" + today.strftime("%c") + "\",")
    print("\t\"currentIP\": \"" + os.environ['REMOTE_ADDR'] + "\"\n}")