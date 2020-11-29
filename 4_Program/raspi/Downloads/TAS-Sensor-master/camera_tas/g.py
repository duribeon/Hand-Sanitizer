#import matplotlib
import gtk, pygtk
#matplotlib.use('Qt4Agg')

import matplotlib.pyplot as plt
import sys
from multiprocessing import Process

plt.switch_backend('Qt4Agg')



from pylab import *

import csv

import io

def func1():

	x=[]

	y=[]


	window = gtk.Window()
	screen = window.get_screen()


	with io.open('weight.csv','r',encoding='UTF8') as csvfile:



    		next(csvfile,None)



    		plots = csv.reader(csvfile)



    		for row in plots:



      			x.append(str(row[0][5:]))

      			y.append(float(row[1]))



	plt.style.use(['dark_background'])

	plt.ylim(min(y)-5,max(y)+5) 


#plt.plot(x,y,'w',label='Mi Fit')

	plt.bar(x,y, color='w')

	plt.xlabel('Date')

	plt.ylabel('Weight (Kg)')



	plt.title('Weight Graph')

	plt.legend()



#mng=plt.figure()

	mng=plt.get_current_fig_manager()

#mng.window.showMaximized()
	print(screen.get_width()/2,screen.get_height())
	mng.window.setGeometry(960,0,screen.get_width()/2,screen.get_height())

	plt.show()
	plt.close('all')
	plt.close()
#mng.full_screen_toggle()

def func2():
	sys.exit()
	plt.close('all')
	exit() 

p1=Process(target=func1)
p2=Process(target=func2)

p1.start()
time.sleep(10)
p2.start()

p1.join()
p2.join()


#plt.show()
