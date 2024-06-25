<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сабак №7: Пьезоизлучатель (Пьезо пищалка, зуммер)</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="main-title">Сабак №7: Пьезоизлучатель (Пьезо пищалка, зуммер)</h1>
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
                <h2>Тема: Пьезоизлучатель (Пьезо пищалка, зуммер)</h2>
                <p>Пьезо-излучатель башкача атоого болот - твитер, сигнализация, пьезо сигналы же динамик. Манызы бир – ун чыгаруу.</p>
                <img src="lesson7-1.png" alt="Пьезоизлучатель">
                <p>Адатта, топтомдор твиттердин эки туру менен келет - активдуу жана пассивдуу. Алар окшош жана башталгычты чаташтырышат. Келгиле, аны аныктап королу. Активдуу сигналдын устундо жазуусу бар стикер бар, аны пломбаны алып салыныз. Жазууга конул бурбаныз, бул жон гана техникалык пункт. Болукту даярдоодо флюсту тазалоо талап кылынат, бирок буюмга зыян келтирбоо учун устунку тешик жабылат. Бирок чаптаманы сыйрып, ыргытууга шашпаныз, сизге керек болот.</p>
                <img src="lesson7-2.png" alt="Активдуу жана пассивдуу сигналдар">
                <p>Активдуу сигнал оз алдынча иштей алат, жон гана кубатту куйгузуу. Туташтырууда полярдуулукка конул бурунуз. Чаптамада плюс белгиси (+) бар, бирок сиз стикерге ишенбешиниз керек, балким кимдир бироо аны ото кылдаттык менен чаптаган эмес. Буттарды карасан жакшы болот. Эреже катары, бир буту экинчисинен узун. Узун бут плюс, кыска бут минус. Узун бутту 5V электр булагына, кыскасын жерге туташтырыныз. Сиз дароо эле жагымсыз ун угасыз. Ошол себептен мен сизге стикерди сыйртпагыла деп кенеш бердим. Эгерде сиз азыр чаптаманы алып салсаныз, ун катуураак болот. Аны дароо кайра тартыныз!</p>
                <p>Пассивдуу зумер сырткы корунушу боюнча окшош, бирок дагы эле бир аз айырмаланат. Аларды колому боюнча салыштырып, ылдый жактан карап корунуз. Айырмачылык корунуп турат. Мурунку мисалдагыдай активдуу динамик менен туташтырылганда, сиз эч нерсе укпайсыз. Жон гана энергия менен камсыз кылуу жетишсиз, Arduino камтылган программалык ыкмаларды колдонуу керек.</p>
                <img src="lesson7-3.png" alt="Пассивдуу зумер">
                <p>Ошондой эле модулдук версияларда, мисалы, KY-006 (пассивдуу) же KY-012 (активдуу) табылган. Модулда уч пин бар, ортонкусу колдонулбайт, S пин тактанын санарип пинине, ал эми пин GNDге туташтырылган.</p>
                <p>Келгиле, программалык камсыздоо болугуно отобуз. Активдуу сигнал катуураак жана айкыныраак чыгат, пассивдуу сигнал бир аз оройраак. Эн оной жолу - керектуу пинге чыналууну колдонуу.</p>
                <pre><code class="language-cpp">
int buzzPin = 2;

void setup() {
  pinMode(buzzPin, OUTPUT); // установка вывода 2 в режим вывода
}

void loop() {
  digitalWrite(buzzPin, HIGH); // перевод вывода 2 в активное состояние
  delay(500); // пауза полсекунды
  digitalWrite(buzzPin, LOW); // перевод вывода 2 в неактивное состояние
  delay(500); // пауза полсекунды
}
                </code></pre>
                <p>При запуске услышим щелчки. Для более интересных звуков используется функция tone().</p>
                <pre><code class="language-cpp">
const byte piezoPin = 2;

void setup() {
  pinMode(piezoPin, OUTPUT); // настраиваем вывод 2 на выход
}

void loop() {
  tone(piezoPin, 100); // генерируем звук с частотой 100 Гц
  delay(100); // пауза 100 миллисекунд
  noTone(piezoPin); // выключаем звук
  delay(900); // снова пауза 900 мс
}
                </code></pre>
                <p>Одну ноту играть не интересно. Пусть будет массив из десяти нот.</p>
                <pre><code class="language-cpp">
const byte piezoPin = 2;

int numTones = 10;
// Ноты C, C#, D, D#, E, F, F#, G, G#, A
int tones[10] = {261, 277, 294, 311, 330, 349, 370, 392, 415, 440};

void setup() {
  pinMode(piezoPin, OUTPUT); // настраиваем вывод 2 на выход
}

void loop() {
  for (int i = 0; i < numTones; i++) {
    tone(piezoPin, tones[i]);
    delay(500);
  }
  noTone(piezoPin);
}
                </code></pre>
                <p>Если управлять не только нотами, но и их продолжительностью, то можно писать мелодии. Говорят, следующая мелодия воспроизводит "Имперский марш" из "Звёздных войн".</p>
                <pre><code class="language-cpp">
const byte piezoPin = 2;
const byte COUNT_NOTES = 39;

// частоты нот
int tones[COUNT_NOTES] = {
  392, 392, 392, 311, 466, 392, 311, 466, 392,
  587, 587, 587, 622, 466, 369, 311, 466, 392,
  784, 392, 392, 784, 739, 698, 659, 622, 659,
  415, 554, 523, 493, 466, 440, 466,
  311, 369, 311, 466, 392
};

// длительности нот
int durations[COUNT_NOTES] = {
  350, 350, 350, 250, 100, 350, 250, 100, 700,
  350, 350, 350, 250, 100, 350, 250, 100, 700,
  350, 250, 100, 350, 250, 100, 100, 100, 450,
  150, 350, 250, 100, 100, 100, 450,
  150, 350, 250, 100, 750
};

void setup() {
  pinMode(piezoPin, OUTPUT); // настраиваем вывод 2 на выход
}

void loop() {
  for (int i = 0; i <= COUNT_NOTES; i++) {
    tone(piezoPin, tones[i], durations[i] * 2);
    delay(durations[i] * 2);
    noTone(piezoPin);
  }
}
                </code></pre>
                <p>02.Digital: toneMelody (Обонду ойноо). Файлдан бир мисалды карап королу | Мисалдар | 2.Digital | melody. Сураныч, программа эки отмоктон турат toneMelody жана pitches.h. pitches.h файлы ар кандай тондордогу ундорду ойнотуу учун константаларды камтыйт. Файлдын озу эскиз менен бир папкада жайгашкан. Светодиоддорду колдонуп жарык менен ойногондон кийин, ун менен ойноого убакыт келди. Мисалы, бизге пьезо эмитент, нан тактасы жана уч зым керек болот. Дизайн абдан жонокой чогултулган - 8 пинден биз зымды твитердин бир контактына алып барып, экинчи контактты GNDге туташтырабыз.</p>
                <img src="lesson7-4.png" alt="Пьезоэмиттер">
                <pre><code class="language-cpp">
#include "pitches.h"

// ноты для мелодии
int melody[] = {
  NOTE_C4, NOTE_G3,NOTE_G3, NOTE_A3, NOTE_G3,0, NOTE_B3, NOTE_C4};

// продолжительность ноты: 4 = quarter note, 8 = eighth note, etc.:
int noteDurations[] = {
  4, 8, 8, 4,4,4,4,4 };

void setup() {
  // проходим через все ноты мелодии:
  for (int thisNote = 0; thisNote < 8; thisNote++) {

    // to calculate the note duration, take one second 
    // divided by the note type.
    //e.g. quarter note = 1000 / 4, eighth note = 1000/8, etc.
    int noteDuration = 1000 / noteDurations[thisNote];
    tone(8, melody[thisNote], noteDuration);

    // to distinguish the notes, set a minimum time between them.
    // the note's duration + 30% seems to work well:
    int pauseBetweenNotes = noteDuration * 1.30;
    delay(pauseBetweenNotes);
    // stop the tone playing:
    noTone(8);
  }
}

void loop() {
  // нет необходимости повторять мелодию
}
                </code></pre>
                <p>Биринчи сапта #include операторунун жардамы менен pitches.h баш файлын киргизебиз. Андан кийин ноталардын массивдери, ошондой эле нотаны ойнотуу узактыгынын массивдери тузулот. Андан кийин цикл бар, анда ар бир нота учун анын узактыгы эсептелинет жана керектуу унду ойнотуучу tone() функциясы чакырылат. Бардык код setup() методунда экенин эске алыныз, андыктан программа бир жолу аткарылат. Мына ошентип биз жаны прибор – пьезоэмиттер менен бат эле таанышып, ошондой эле обон чыгарууну уйрондук.</p>
                <pre><code class="language-cpp">
int speakerPin = 8;

int length = 15; // число нот
char notes[] = "ccggaagffeeddc "; // сохраняем ноты как массив символов
int beats[] = { 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 4 }; // массив временных промежутков
int tempo = 300;

void playTone(int tone, int duration) {
  for (long i = 0; i < duration * 1000L; i += tone * 2) {
    digitalWrite(speakerPin, HIGH);
    delayMicroseconds(tone);
    digitalWrite(speakerPin, LOW);
    delayMicroseconds(tone);
  }
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
