import csv
import sys
import time, datetime
from pytz import timezone


now = datetime.datetime.now()

fmt = "%Y-%m-%d"

f=open('weight.csv','a',encoding='utf-8',newline='')

wr=csv.writer(f)

wr.writerow([now.strftime(fmt),sys.argv[1]])

f.close()


