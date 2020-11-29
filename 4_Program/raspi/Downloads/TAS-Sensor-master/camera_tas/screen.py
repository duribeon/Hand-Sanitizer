from multiprocessing import Process
import os
import time

def func1():
	os.system("python postman.py")

def func2():
	os.system("python photo_decode.py output.txt")

def func3():
	os.system("python graph.py")
p1=Process(target=func1)
p2=Process(target=func2)
p3=Process(target=func3)
p1.start()
p2.start()
p3.start()
p1.join()
p2.join() 
p3.join()
