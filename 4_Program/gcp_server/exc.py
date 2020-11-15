import get_data
import pymysql
execfile('get_data.py')
f=open('weight.txt','r')
x=f.read()
res=eval(x)
input_data=res['m2m:cin']['con']
time=res['m2m:cin']['ct']
time=time.replace('T','')
conn = pymysql.connect(host='localhost', user='****', password='****', ch
arset='utf8')
curs = conn.cursor()
sql="USE HS_db;"
curs.execute(sql)
sql='INSERT INTO HS (place,time,remains) VALUES ("AI401",STR_TO_DATE(%s,"%%Y%%m%%d%%H%%i%%s"),%s);'
val=time
val2=input_data
"exc.py" 30L, 525C  
