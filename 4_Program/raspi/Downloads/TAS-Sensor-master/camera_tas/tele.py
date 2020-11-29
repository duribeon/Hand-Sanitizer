import time, datetime
import telepot
from telepot.loop import MessageLoop
import os
from telegram.ext import Updater
from pprint import pprint
from pytz import timezone
import csv
import io

now = datetime.datetime.now()



def action(msg):

    t = []
    chat_id = msg['chat']['id']
    t = msg['text'].split(' ')
    command = t[0]
    y = [] 

    print 'Received: %s' % command

    fmt1 = "%Y-%m-%d %H:%M:%S"
    fmt2 = "%Y-%m-%d"

    with io.open('weight.csv','r',encoding='UTF8') as csvfile:
	next(csvfile,None)
	plots = csv.reader(csvfile)
	for row in plots:
		y.append(float(row[1]))


    if command == '/hi':

        telegram_bot.sendMessage (chat_id, str("Hi! This is smart mirror trainer!"))

    elif command == '/run':
	
	telegram_bot.sendMessage(chat_id, str("Wait for 5 sec, and then go up to your scale :)")) 
	telegram_bot.sendMessage(chat_id, str("After that, please look at the front page and wait for your weight and photo shoot."))	
	telegram_bot.sendMessage(chat_id, str("Please wait for a moment and the screen will appear!"))	
	os.system("python ./final.py")
	

    elif command == '/time':
	print(y)
        telegram_bot.sendMessage(chat_id, str(now.strftime(fmt1)))

    elif command == '/todayphoto' or command == '/tp':

        telegram_bot.sendPhoto (chat_id, photo = open('camera.jpg', 'rb'))

    elif command == '/latestphoto' or command == '/lp':

	telegram_bot.sendPhoto (chat_id, photo = open('latest_photo.png', 'rb'))
  

    elif command == '/weight':
	telegram_bot.sendMessage(chat_id, str("Today's weight : %d" %y[-1]))

    else:
	telegram_bot.sendMessage(chat_id, str("Invalid command. Please retry.")) 



telegram_bot = telepot.Bot('902234070:AAGCZBEqqVPEXFsa1MFEIM1xl2OAuQyofrg')

print (telegram_bot.getMe())



MessageLoop(telegram_bot, action).run_as_thread()

print 'Up and Running....'



while 1:

    time.sleep(10)
