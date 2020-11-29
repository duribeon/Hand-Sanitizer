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

x=[]

y=[]


window = gtk.Window()
screen = window.get_screen()


with io.open('weight.csv','r',encoding='UTF8') as csvfile:



    next(csvfile,None)



    plots = csv.reader(csvfile)



    for row in plots:



      x.append(str(row[0][8:]))

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
print(400,screen.get_height())
mng.window.setGeometry(300,0,screen.get_width()/2,screen.get_height())

#mng.full_screen_toggle()


plt.show()
