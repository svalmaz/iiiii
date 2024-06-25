<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №6: Светодиод (LED) менен баскыч</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №6: Светодиод (LED) менен баскыч</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Башкы бет</a></li>
                    <li><a href="about.php">Arduino жөнүндө</a></li>
                    <li><a href="lessons.php">Сабактар</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="video-tutorial">
                <h2>Видеоурок</h2>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/U87osNtJIOU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
            <section class="lesson-content">
                <h2>Тема: Светодиод (LED) менен баскыч</h2>
                <p>Бул сабакта биз Ардуиного кнопканы жана светодиодду туташтырабыз (баскычты басканда светодиод күйөт, басканда күйбөйт). Бул келечекте көп жолу пайдалуу боло турган негизги схемалардын бири жана Arduino боюнча роботту башкаруу үчүн колдонулушу мүмкүн. Келечектеги роботуңузда бир баскычты басканда ар кандай аракеттер жасалышы мүмкүн.</p>
                <ul>
                    <li>Моделди чогултуу үчүн бизге керек:</li>
                    <li>Arduino тактасы</li>
                    <li>Нан тактасы</li>
                    <li>5 зымдар жана/же эркек-эркек өтүүчү</li>
                    <li>Жарык чыгаруучу диод</li>
                    <li>баскычы</li>
                    <li>10 кОм жана 220 Ом резисторлор.</li>
                </ul>
                <p>Ардуиного баскычты туташтыруу үчүн эмне керек?</p>
                <p>Ардуино модели үчүн баскыч жана LED менен туташуу диаграммасы:</p>
                <img src="lesson6-2.png" alt="Ардуино модели үчүн баскыч жана LED менен туташуу диаграммасы">
                <p>Ардуинодогу баскыч менен LEDдин туташуу диаграммасы</p>
                <img src="lesson6-3.png" alt="Ардуинодогу баскыч менен LEDдин туташуу диаграммасы">
                <p>Сизге ошондой эле Arduino IDE программасы керек болот, аны Arduino веб-сайтынан жүктөп алууга болот.</p>
                <p>Бул моделдин иштеши үчүн төмөнкү программа ылайыктуу (программаны жөн гана Arduino IDEге көчүрүп алсаңыз болот):</p>
                <pre><code class="language-cpp">
int button = 2;
int led = 8;

void setup() {
    pinMode(led, OUTPUT);
    pinMode(button, INPUT);
}

void loop(){
    if (digitalRead(button) == HIGH) {
        digitalWrite(led, HIGH);
    }
    else {
        digitalWrite(led, LOW);
    }
}
                </code></pre>
                <p>Ардуиного кнопканы жана сигналды туташтырабыз. Кнопканы басканда сигнал иштейт, баскыч басылганда токтойт.</p>
                <h3>Эскиз. Бир LED менен эки баскычты башкаруу</h3>
                <pre><code class="language-cpp">
boolean button1WasUp = true;
boolean button2WasUp = true;

void setup() {
   pinMode(10, OUTPUT);
   digitalWrite(10, LOW);
   pinMode(2, INPUT_PULLUP);
   pinMode(4, INPUT_PULLUP);
}

void loop() {
   // узнаем, отпущены ли две кнопки сейчас
   boolean button1IsUp = digitalRead(2);
   boolean button2IsUp = digitalRead(4);
   // если кнопка 1 была отпущена и не отпущена
   if (button1WasUp && !button1IsUp) {
      delay(10);
      // повторно считываем сигнал с кнопки 1
      button1IsUp = digitalRead(2);
      if (!button1IsUp) { digitalWrite(10, LOW); }
   }
   // если кнопка 2 была отпущена и не отпущена
   if (button2WasUp && !button2IsUp) {
      delay(10);
      // повторно считываем сигнал с кнопки 2
      button2IsUp = digitalRead(4);
      if (!button2IsUp) { digitalWrite(10, HIGH); }
   }
   // запоминаем состояние двух кнопок ардуино
   button1WasUp = button1IsUp;
   button2WasUp = button2IsUp;
}
                </code></pre>
                <p>Код үчүн түшүндүрмөлөр:</p>
                <ul>
                    <li>Бул мисал программа бир баскычты басуу менен LEDди күйгүзүүгө жана экинчи баскычты басуу менен LEDди өчүрүүгө мүмкүнчүлүк берет;</li>
                    <li>Arduino delay (10); баскычтын "байланыш секируүсүнөн" качууга жана жалган иштөөгө мүмкүнчүлүк берет.</li>
                </ul>
                <h3>Эскиз. Arduino баскычы менен LED жарыктыгын башкаруу</h3>
                <pre><code class="language-cpp">
#define PLUS_BUTTON   2
#define MINUS_BUTTON  4
int brightness = 100;
boolean plusUp = true;
boolean minusUp = true;

void setup() {
   pinMode(10, OUTPUT);
   pinMode(PLUS_BUTTON, INPUT_PULLUP);
   pinMode(MINUS_BUTTON, INPUT_PULLUP);
}

void loop() {
   analogWrite(10, brightness);
  
   // реагируем на нажатия кнопки с помощью функции handleClick
   plusUp = handleClick(PLUS_BUTTON, plusUp, +20);
   minusUp = handleClick(MINUS_BUTTON, minusUp, -20);
}

boolean handleClick(int buttonPin, boolean wasUp, int delta) {
   boolean isUp = digitalRead(buttonPin);
   if (wasUp && !isUp) {
      delay(10);
      isUp = digitalRead(buttonPin);
      // если был клик кнопки, меняем яркость в пределах от 0 до 255
      if (!isUp)
         brightness = constrain(brightness + delta, 0, 255);
   }
   return isUp;
}
                </code></pre>
                <p>Код үчүн түшүндүрмөлөр:</p>
                <ul>
                    <li>LEDди туташтыруу үчүн PWM модуляциясы бар пинди колдонуңуз;</li>
                    <li>Жарыктыктын баштапкы мааниси программада 100, жарыктыктын көбөйүшү жана азайышы (20) сиздин каалооңуз боюнча өзгөртүлүшү мүмкүн.</li>
                </ul>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Электрондук Учебник по Arduino. Бардык укуктар корголгон.</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
</body>
</html>
