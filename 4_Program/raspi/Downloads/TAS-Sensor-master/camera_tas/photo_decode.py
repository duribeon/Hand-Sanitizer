import sys
import base64
import cv2

argc = len(sys.argv)


f=open(sys.argv[1],'r')
fw = open('con.txt','w')  

for l in f:
	s=l.split('"')
	fw.write(s[39])  
f.close()
fw.close()



filename = 'con.txt'
with open(filename) as f:
    image_data = f.read()   

with open("latest_photo.png", "wb") as fh:
    fh.write(base64.b64decode(image_data))

f.close()
fh.close()


src = cv2.imread("latest_photo.png", cv2.IMREAD_COLOR)

dst = cv2.resize(src, (300, 420), interpolation=cv2.INTER_AREA)  

# 960 1080
cv2.imshow("latestphoto",dst)
cv2.moveWindow("latestphoto",0,0)  

cv2.waitKey(0)
cv2.destroyAllWindows()

