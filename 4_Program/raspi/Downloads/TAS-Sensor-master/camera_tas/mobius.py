from multiprocessing import Process
import os
import time
import sys

def func1():
	os.system("node ~/Downloads/nCube-Thyme-Nodejs-master/thyme.js")

def func2():
	os.system("node ./app.js")

p1=Process(target=func1)
p2=Process(target=func2)

p1.start()
time.sleep(17)
p2.start()
p1.join()
p2.join()
