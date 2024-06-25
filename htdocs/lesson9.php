<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №9: Вибрация сенсорлору</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №9: Вибрация сенсорлору</h1>
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
                <h2>Тема: Вибрация сенсорлору</h2>
                <p><strong>Вибрация сенсорунун модулу KY-002</strong></p>
                <p>Модуль озу орнотулган тузулушко механикалык таасирлерди кабыл алат. Соккуга, титироого, титироого жооп берет. Механикалык сенсор SW-520D же башка аналогу (мисалы, Gaoxin SW-18010P) модулдун тактасына орнотулган. Сенсор цилиндр формасындагы корпуска ээ, анын ичинде пружина жана ортосунда металл таякча бар. Соккондо пружина таякчага тийет, бул сенсордун иштешин камсыздайт.</p>
                
                <img src="lesson9-1.png" alt="Вибрация сенсорунун модулу KY-002">

                <p>Анын уч пини бар: сигнал пин тактанын санарип пинине туташтырылган, ортонку пин кубатка туташкан, ал эми эн он пин жерге туташтырылган.</p>
                <pre>
KY-002 | Arduino 
----------------
     S | D
     + | 5V
     - | GND
                </pre>
                
                <img src="lesson9-2.png" alt="Вибрация сенсорунун пиндеринин диаграммасы">

                <p>При вибрации будет включаться светодиод на выводе 13.</p>
                <pre><code class="language-cpp">
int ledPin = 13;
int vibrationPin = 3;
int val;

void setup() {
  pinMode(ledPin, OUTPUT);
  pinMode(vibrationPin, INPUT);
}

void loop() {
  val = digitalRead(vibrationPin); // считываем показания
  if (val == HIGH) { // если вибрация, то включаем светодиод
    digitalWrite(ledPin, LOW);
  } else {
    digitalWrite(ledPin, HIGH);
  }
}
                </code></pre>

                <h3>Түшүндүрмө:</h3>
                <ul>
                    <li><b>ledPin</b> — светодиодтун пини.</li>
                    <li><b>vibrationPin</b> — вибрация сенсорунун пини.</li>
                    <li><b>val</b> — вибрация сенсорунун көрсөткүчтөрүн окуу үчүн озгормө.</li>
                </ul>

                <h3>Практика:</h3>
                <p>Вибрация сезилгенде, светодиод күйөт. Эгерде вибрация жок болсо, светодиод өчөт.</p>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Электрондук Учебник по Arduino. Бардык укуктар корголгон.</п>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
</body>
</html>
