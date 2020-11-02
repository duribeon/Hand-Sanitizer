#include <SoftwareSerial.h>
#include <HTTPClient.h>
#include "HX711.h"
#define calibration_factor -7050.0  // 로드셀 스케일 값 선언
#define DOUT 7
#define CLK 6
HX711 scale(DOUT, CLK);
SoftwareSerial mySerial(2, 3); // RX, TX
float weight = 0;
int flag = 0;

const char* serverName = "http://172.20.10.2:7579/Mobius/HS/Weight";
unsigned long lastTime = 0;
unsigned long timerDelay = 5000;

void setup() {
  Serial.begin(9600);
  mySerial.begin(9600);
  Serial.println("HX711 scale TEST");
  scale.set_scale(calibration_factor);
  scale.tare();
  Serial.println("Readings:");
}

void loop() {
  if (mySerial.available()) {
    Serial.write(mySerial.read());
  }
  if (Serial.available()) {
    mySerial.write(Serial.read());
  }
  //weight = scale.get_units();

  if ((millis() - lastTime) > timerDelay){  // 10분마다 POST 요청
    HTTPClient http;
    http.begin(serverName);
    http.addHeader("Content-Type", "application/vnd.onem2m-res+json; ty=4");
    http.addHeader("Accept", "application/json");
    http.addHeader("X-M2M-RI", "12345");
    http.addHeader("X-M2M-Origin", "SGN1XaUwOgd");
    http.addParameter("application/vnd.onem2m-res+json; ty=4", "{\n    \"m2m:cin\": {\n        \"con\": \"123456\"\n    }\n}",  ParameterType.RequestBody);
    int httpResponseCode = http.POST(httpRequestData);
    http.end();
  }
  lastTime = millis();
}
