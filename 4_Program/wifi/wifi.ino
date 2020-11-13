#include <SoftwareSerial.h>


SoftwareSerial mySerial(2, 3); // RX, TX

void setup() {
  Serial.begin(9600);
  mySerial.begin(9600);
}

void loop() {
  //  mySerial.println("AT+CIPSTART=\"TCP\",\"203.250.148.89\",7579");
  //  delay(500);
  //  if (Serial.find("ERROR")) return;
  //  String cmd = "GET /Mobius/Team_1/Weight HTTP/1.1\r\nHost: http://203.250.148.89:7579";

  if (mySerial.available()) {
    Serial.write(mySerial.read());
  }
  if (Serial.available()) {
    mySerial.write(Serial.read());
  }
}
