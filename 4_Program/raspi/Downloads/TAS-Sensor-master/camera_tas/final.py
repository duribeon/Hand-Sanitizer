from multiprocessing import Process
import os
import time
import sys

def func1():
        os.system("python f.py")

def func2():
        os.system("python ./hx711py/example.py")
def func3():
	os.system("python screen.py")




p1=Process(target=func1)
p2=Process(target=func2)
p3=Process(target=func3)

p1.start()
p2.start()
time.sleep(37)
p3.start()

p1.join()
p2.join()
p3.join()
