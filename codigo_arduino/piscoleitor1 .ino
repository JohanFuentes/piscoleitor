// C++ code
//https://www.arduino.cc/en/Tutorial/BuiltInExamples/Ping
//https://learn.adafruit.com/tmp36-temperature-sensor/using-a-temp-sensor
#include <Keypad.h>
const byte numRows= 3; //Numero de filas del teclado
const byte numCols= 4; //Numero de columnas del teclado
//keymap define las teclas que aparecen en el teclado
char keymap[numRows][numCols]= 
{
{'1', '2', '3', 'A'}, 
{'4', '5', '6', 'B'}, 
{'7', '8', '9', 'C'}
};
//Configuracion de los pines de conexion del teclado con el Arduino
byte rowPins[numRows] = {6,5,4}; //filas 0 a 2
byte colPins[numCols]= {3,2,1,0}; //Columnas 0 a 3
//Inicializacion y configuracion del teclado
Keypad teclado= Keypad(makeKeymap(keymap), rowPins, colPins, numRows, numCols);

int Botella_1 = 	13;
int Botella_2 = 	12;
int Sensor_dedo = 	10;
int Vaso = 			11;
int Temperatura = 	0;
int Alcohol = 		1;
int MB0 = 7;
int MB1 = 8;
int MB2 = 9;
char tecla;
void setup()
{
  Serial.begin(9600);
}
void loop() {
  long duration_b1, duration_b2,duration_v, cm_b1, cm_b2, cm_v;
  //Botella 1
  pinMode(Botella_1, OUTPUT);
  digitalWrite(Botella_1, LOW);
  delayMicroseconds(2);
  digitalWrite(Botella_1, HIGH);
  delayMicroseconds(5);
  digitalWrite(Botella_1, LOW);

  pinMode(Botella_1, INPUT);
  duration_b1 = pulseIn(Botella_1, HIGH);
  cm_b1 = microsecondsToCentimeters(duration_b1);
  //---------------------------------//
  //Botella 2
  pinMode(Botella_2, OUTPUT);
  digitalWrite(Botella_2, LOW);
  delayMicroseconds(2);
  digitalWrite(Botella_2, HIGH);
  delayMicroseconds(5);
  digitalWrite(Botella_2, LOW);

  pinMode(Botella_2, INPUT);
  duration_b2 = pulseIn(Botella_2, HIGH);
  cm_b2 = microsecondsToCentimeters(duration_b2);
  //---------------------------------//
  //Vaso
  pinMode(Vaso, OUTPUT);
  digitalWrite(Vaso, LOW);
  delayMicroseconds(2);
  digitalWrite(Vaso, HIGH);
  delayMicroseconds(5);
  digitalWrite(Vaso, LOW);

  pinMode(Vaso, INPUT);
  duration_v = pulseIn(Vaso, HIGH);
  cm_v = microsecondsToCentimeters(duration_v);
  //---------------------------------//
  //Temperatura
  int medida_temperatura = analogRead(Temperatura);
  float voltage = medida_temperatura * 5.0;
  voltage /= 1024.0; 
  float temperatureC = (voltage - 0.5) * 100 ;
  Serial.print(temperatureC); Serial.println(" Grados Celsius");
  delay(1000);
  //---------------------------------//
  //Alcohol
  int medida_alcohol = analogRead(Alcohol);
  // medida_alcohol oscila entre 0 y 255 donde 255 es 100%
  /* prints de prueba
  Serial.print("Cantidad alcohol:");
  Serial.println();
  Serial.print(medida_alcohol);
  Serial.println();
  */
  //---------------------------------//
  //Teclado
  tecla = teclado.getKey();
  //---------------------------------//
  //Micro:bit
  pinMode(MB0, OUTPUT);
  pinMode(MB1, OUTPUT);
  pinMode(MB2, OUTPUT);
  digitalWrite(MB0, HIGH);
  delay(1000);
  digitalWrite(MB0, LOW);
  delay(1000); 
  delay(100);
}

long microsecondsToCentimeters(long microseconds) {
  // The speed of sound is 340 m/s or 29 microseconds per centimeter.
  // The ping travels out and back, so to find the distance of the object we
  // take half of the distance travelled.
  return microseconds / 29 / 2;
}
