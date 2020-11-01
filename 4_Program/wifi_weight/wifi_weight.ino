#include <SoftwareSerial.h>
#include "HX711.h"
#define calibration_factor -7050.0  // 로드셀 스케일 값 선언
#define DOUT 7
#define CLK 6
HX711 scale(DOUT,CLK);
SoftwareSerial mySerial(2, 3); // RX, TX

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
  Serial.print("Reading: ");
  Serial.print(scale.get_units(), 1);
  Serial.print(" lbs");
  Serial.println();
}
