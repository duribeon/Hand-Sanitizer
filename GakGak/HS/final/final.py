import get_data
import pymysql
import requests
import time
import sys
import csv
import os
import pymysql
import datetime



execfile('get_data.py')

f=open('weight.txt','r')

x=f.read()

res=eval(x)

input_data=res['m2m:cin']['con']
sys.stdout = open('./weight2.txt','w')
remainder=int(input_data)
conn = pymysql.connect(host='127.0.0.1',user='duri',password='gakgak',charset='utf8')
curs = conn.cursor()
sql = "USE gakgak;"
curs.execute(sql)
sql = "SELECT * FROM HS_list WHERE LOCATION=446 ORDER BY CHKDATE DESC LIMIT 1;"
curs.execute(sql)
result = curs.fetchall()
for row in result:
	p_remainder = row[2]
	p_init_weight = row[3]
        p_chg = row[7]
        if (remainder < p_remainder+1000):
        	chg = p_chg
                init_weight = p_init_weight
        else:
                chg = p_chg +1
                init_weight = remainder


sql = 'INSERT INTO HS_list (BUILDING, LOCATION, REMAINDER,INIT_WEIGHT,ORGAN,CHKDATE, USERID,chg) VALUES ("AI center","446", %s,%s,"Sejong Univ",%s,"duri",%s);'
now = datetime.datetime.now();
curs.execute(sql,(remainder,init_weight,now,chg))
conn.commit()
conn.close()            
print("Uploaded Weight Data!")

