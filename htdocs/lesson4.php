<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №4: Потенциометр</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №4: Потенциометр</h1>
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
                <h2>Тема: Потенциометр</h2>
                <p>Бул сабакта биз потенциометр (өзгөрмө резистор) жана светодиот менен моделди чогултуп жатабыз. Мындай моделди роботту башкаруу үчүн колдонсо болот.</p>
                <img src="lesson4-111.png" alt="Потенциометр">
                <p><strong style="color: #d9534f;">Потенциометр</strong> - каршылыгы жөнгө салынуучу өзгөрмө резистор. Потенциометрлер робототехникада түрдүү параметрлердин – үн көлөмүнүн, кубаттуулуктун, чыңалуунун ж.б. жөндөөчүсү катары колдонулат. Биздин моделде LED жарыктыгы потенциометрдин туткасынын айлануусуна жараша болот. Бул да негизги схемалардын бири болуп саналат.</p>
                <ul>
                    <li>Моделди чогултуу үчүн бизге керек:</li>
                    <li>Arduino тактасы (же аналогдору);</li>
                    <li>Breadboard;</li>
                    <li>6 зымдар жана/же эркектен эркекке өтүүчү;</li>
                    <li>Жарык чыгаруучу диод;</li>
                    <li>потенциометр (өзгөрмө каршылык);</li>
                    <li>220 Ом каршылык;</li>
                    <li>Arduino IDE, аны Arduino веб-сайтынан жүктөп алууга болот.</li>
                </ul>
                <img src="lesson4-222.png" alt="Arduino компоненты">
                <p>Ардуиного потенциометрди жана LEDди туташтыруу үчүн эмне керек?</p>
                <p>Потенциометр жана LED менен Arduino модели үчүн туташуу диаграммасы:</p>
                <img src="lesson4-333.png" alt="Потенциометр жана LED менен Arduino модели үчүн туташуу диаграммасы">
                <p>Бул моделдин иштеши үчүн төмөнкү программа ылайыктуу (программаны жөн гана Arduino IDEге көчүрүп алсаңыз болот):</p>
                <pre><code class="language-cpp">
// LED менен пиндердин атын бергиле
// жана потенциометр
#define led 9
#define pot A0

void setup()
{
    // пин со светодиодом — выход
    pinMode(led, OUTPUT);
    // пин с потенциометром - вход
    pinMode(pot, INPUT);
}

void loop()
{
    // объявляем переменную x
    int x;
    // считываем напряжение с потенциометра:
    // будет получено число от 0 до 1023
    // делим его на 4, получится число в диапозоне
    // 0-255 (дробная часть будет отброшена)
    x = analogRead(pot) / 4;
    // выдаём результат на светодиод
    analogWrite(led, x);
}
                </code></pre>
                <p>LED менен потенциометрдин чогултулган Arduino модели ушундай көрүнөт:</p>
                <img src="lesson4-444.png" alt="Потенциометр жана LED чогултулган Arduino модели">
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Электрондук Учебник по Arduino. Бардык укуктар корголгон.</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
</body>
</html>
