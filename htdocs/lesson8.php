<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №8: Датчик наклона (кыйшаюу сенсору)</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №8: Датчик наклона (кыйшаюу сенсору)</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Башкы бет</a></li>
                    <li><a href="about.php">Arduino жөнүндө</a></li>
                    <li><a href="lessons.php">Сабактар</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="lesson-content">
                <h2>Тема: Датчик наклона (кыйшаюу сенсору)</h2>
                <p><strong>Колдонулуучу каражаттар:</strong></p>
                <ul>
                    <li>Простейший датчик наклона</li>
                    <li>Модуль датчика наклона KY-020</li>
                    <li>Модуль датчика наклона KY-017</li>
                    <li>Модуль датчика наклона KY-027</li>
                </ul>
                <h3>Эң жөнөкөй кыйшаюу сенсору</h3>
                <p>Жантайтуучу сенсор - бул капсула, ичинде эки металл шары бар. Шарлар капсулада тоголонуп, схеманы жабышат же ачышат. Ошентип, сенсор жөнөкөй санариптик сигналды чыгарат: капсула кайсы багытта кыйшайганына жараша логикалык нөл же бир. Жантайтуучу сенсор жөнөкөй жантайтуучу катары колдонулушу мүмкүн. Эн коп таралган модели SW-200D болуп саналат. Сенсордун бир терминалы күмүш, экинчиси алтын болот.</p>
                <img src="lesson8-1.png" alt="Простейший датчик наклона">
                <h3>Технические характеристики</h3>
                <ul>
                    <li>Время отклика: 2 мс</li>
                    <li>Сопротивление при замкнутом: до 10 Ом</li>
                    <li>Сопротивление при разомкнутом: свыше 10 мОм</li>
                    <li>Рабочее напряжение: до 12 В</li>
                    <li>Потребляемый ток: до 20 мА</li>
                    <li>Допустимая температура: от -40 до +80°C</li>
                    <li>Допустимая влажность: 95% RH (40°C до 96 часов)</li>
                    <li>Усилие отрыва: 500 гс на 1 мин</li>
                    <li>Время жизни: 100000 циклов</li>
                    <li>Размер: 12 x 3,6 мм</li>
                    <li>Вес: менее 1 г</li>
                </ul>
                <h3>Техникалык шарттар</h3>
                <ul>
                    <li>Жооп убактысы: 2 мс</li>
                    <li>Жабык кездеги каршылык: 10 Омго чейин</li>
                    <li>Ачык болгондо каршылык: 10 мОмдон жогору</li>
                    <li>Иштөө чыңалуусу: 12 В чейин</li>
                    <li>Учурдагы керектөө: 20 мА чейин</li>
                    <li>Уруксат берилген температура: -40тан +80°Cге чейин</li>
                    <li>Уруксат берилген нымдуулук: 95% RH (40°C 96 саатка чейин)</li>
                    <li>Тартуу күчү: 1 мүнөткө 500 gf</li>
                    <li>Өмүр бою: 100 000 цикл</li>
                    <li>Өлчөмү: 12 x 3,6 мм</li>
                    <li>Салмагы: 1 г аз</li>
                </ul>
                <h3>Практика</h3>
                <p>Төмөнкү схема боюнча туташтыралы. Биз кыйшаюу сенсорунун бир пинин аналогдук A5 пинине туташтырабыз, ошондой эле бул пинге 220 Ом резисторду кошуп, GNDге туташтырабыз. Биз сенсордун экинчи чыгышын 5V менен туташтырабыз. Түшүнүктүү болуу үчүн, келгиле, схеманын 8 пинине LED кошолу.</p>
                <img src="lesson8-2.png" alt="Туташтыруу схемасы">
                <p>Бир тарапка кыйшайганда, LED күйөт, болбосо, LED өчүк бойдон калат;</p>
                <pre><code class="language-cpp">
const int ledPin = 8;

void setup() {
  pinMode(ledPin, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  int val; // data from an analog pin

  val = analogRead(A5); // read the voltage value of analog pin 5
  Serial.println(val);

  if (val > 512) { // if larger  2.5V
    digitalWrite(ledPin, HIGH); // turn on LED
  } else {
    digitalWrite(ledPin, LOW); // turn off LED
  }
}
                </code></pre>
                <p>Көрсөтүүлөрдү карап жатканда, мен нормалдуу абалда 0 экенин көрдүм, мен сенсорду бир тарапка бир аз кыйшайтууга аракет кылганда, көрсөткүчтөр 900 бирдиктен ашат. Орто натыйжалар дээрлик жок.</p>
                <h3>Модуль датчика наклона KY-020</h3>
                <img src="lesson8-3.png" alt="Модуль датчика наклона KY-020">
                <p>Мындай түрдөгү сенсорлор эңкейиштин кичинекей бурчтарын аныктай алышпайт. Ошондуктан, алар чоң бурч кепилденген башкаруу системаларында колдонулат - капкактар, эшиктер, люктар. Модуль үч төөнөгүчкө ээ: жер, күч, санариптик пин.</p>
                <p><strong>KY-020 | Arduino</strong></p>
                <pre><code>
----------------
     - | GND 
     + | 5V 
     S | D
                </code></pre>
                <h3>Датчика наклона сенсор модулу KY-017</h3>
                <img src="lesson8-4.png" alt="Модуль датчика наклона KY-017">
                <p>KY-017 жантайма сенсор модулу орнотулган LED индикаторун камтыйт. Сенсор иштетилгенде, LED күйөт. Сенсордун өзү эки контакты бар кичинекей айнек лампа. Колбанын ичинде сымап шары бар. Электроддорго эңкейгенде шар ылдый түшүп, аларды кыска туташтырып жиберет. Карама-каршы багытта эңкейгенде шар колбанын карама-каршы учуна жылып, электроддорду бошотуп, ачат. Модуль үч төөнөгүчкө ээ: жер, күч, санариптик пин.</p>
                <p><strong>KY-017 | Arduino</strong></p>
                <pre><code>
-------------
     - | GND 
     + | 5V 
     S | D
                </code></pre>
                <p>Жантайганда сенсордун көрсөткүчтөрүн окуйбуз. Эгерде байланыштар жабык болсо, анда LEDди күйгүзүңүз. Камтылган LED да кодсуз күйөт.</p>
                <pre><code class="language-cpp">
int ledPin = 13;
int tiltPin = 3;
int val;

void setup() {
  pinMode(ledPin, OUTPUT);
  pinMode(tiltPin, INPUT);
}

void loop() {
  val = digitalRead(tiltPin);
  if(val == HIGH) {
    digitalWrite(ledPin, HIGH);
  } else {
    digitalWrite(ledPin, LOW);
  }
}
                </code></pre>
                <h3>Модуль датчика наклона KY-027</h3>
                <img src="lesson8-5.png" alt="Модуль датчика наклона KY-027">
                <pre><code class="language-cpp">
int ledPinA = 9;
int switchPinA = 8;
int switchStateA = 0;
int ledPinB = 6;
int switchPinB = 7;
int switchStateB = 0;
int brightness   = 0;

void setup() {
  pinMode(ledPinA, OUTPUT);
  pinMode(ledPinB, OUTPUT);
  pinMode(switchPinA, INPUT);
  pinMode(switchPinB, INPUT);
}

void loop() {
  switchStateA = digitalRead(switchPinA);
  if (switchStateA == HIGH && brightness != 255) {
    brightness ++;
  }
  switchStateB = digitalRead(switchPinB);
  if (switchStateB == HIGH && brightness != 0) {
    brightness --;
  }
  analogWrite(ledPinA, brightness);  //  A slow fade out
  analogWrite(ledPinB, 255 - brightness);  // B slow bright up
  delay(20);
}
                </code></pre>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Электрондук Учебник по Arduino. Бардык укуктар корголгон.</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
</body>
</html>
