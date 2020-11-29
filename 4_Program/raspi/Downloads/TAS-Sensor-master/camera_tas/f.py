from multiprocessing import Process
import os
import time
import sys

def func1():
	os.system("python ./mobius.py")

def func2():
	os.system("killall -9 node /home/pi/Downloads/nCube-Thyme-Nodejs-master/thyme.js")

	
p1=Process(target=func1)
p2=Process(target=func2)

p1.start()
time.sleep(38)
p2.start()

p1.join()
p2.join()


