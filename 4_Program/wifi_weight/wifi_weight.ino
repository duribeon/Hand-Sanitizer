#include <SoftwareSerial.h>

SoftwareSerial mySerial(2, 3); // RX, TX
String host = "http://203.250.148.89";
String port = "7579";

void httpclient(/*String char_input*/){
  delay(100);
  Serial.println("connect TCP...");
  mySerial.println("AT+CIPSTART=\"TCP\",\""+host+"\",7579");
  delay(500);
  if (Serial.find("ERROR")) return;
  Serial.println("Send data...");
  //String url = char_input;
  String cmd = "GET /Mobius/Team_1/Weight/la";
  mySerial.print("AT+CIPSEND=");
  mySerial.println(cmd.length());
  Serial.print("AT+CIPSEND=");
  Serial.println(cmd.length());
  if (mySerial.find(">")){
    Serial.print(">");
  }else{
    mySerial.println("AT+CIPCLOSE");
    Serial.println("connect timeout");
    delay(1000);
    return;
  }
  delay(500);

  mySerial.println(cmd);
  Serial.println(cmd);
  delay(100);
  if(Serial.find("ERROR")) return;
  mySerial.println("AT+CIPCLOSE");
  delay(100);
}

void setup(){
  Serial.begin(9600);
  mySerial.begin(9600);
}

void loop(){
  httpclient();
  delay(1000);
  if (mySerial.available()){
    Serial.write(mySerial.read());
  }
  if (Serial.available()){
    mySerial.write(Serial.read());
  }
}
