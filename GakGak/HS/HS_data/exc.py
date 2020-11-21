import get_data
import pymysql

execfile('get_data.py')
f=open('weight.txt','r')

x=f.read()

res=eval(x)

input_data=res['m2m:cin']['con']
time=res['m2m:cin']['ct']
time=time.replace('T','')



conn = pymysql.connect(host='localhost', user='root', password='system', charset='utf8')
curs = conn.cursor()

sql="USE gakgak;"
curs.execute(sql)

sql='INSERT INTO HS_list (BUILDING,LOCATION,REMAINDER,INIT_WEIGT,ORGAN,CHKDATE,USERID,chg) VALUES ("AI center",446);'
val=time
val2=input_data
curs.execute(sql,(val,val2))

conn.commit()
conn.close()

