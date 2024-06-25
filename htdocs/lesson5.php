<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №5: Баскыч (кнопка)</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №5: Баскыч (кнопка)</h1>
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
                <h2>Тема: Баскыч (кнопка)</h2>
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
                <img src="lesson5-1.png" alt="Arduino компоненты">
                <p>Ардуиного баскычты туташтыруу үчүн эмне керек?</p>
                <p>Ардуино модели үчүн баскыч жана LED менен туташуу диаграммасы:</p>
                <img src="lesson5-2.png" alt="Ардуино модели үчүн баскыч жана LED менен туташуу диаграммасы">
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
                <img src="lesson5-3.png" alt="Ардуино модели менен баскыч жана LED туташуу">
                <p>Ардуиного кнопканы жана сигналды туташтырабыз. Кнопканы басканда сигнал иштейт, баскыч басылганда токтойт.</p>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Электрондук Учебник по Arduino. Бардык укуктар корголгон.</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
</body>
</html>
