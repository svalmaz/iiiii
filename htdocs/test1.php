<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест по Arduino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        .question {
            margin-bottom: 20px;
        }
        .question h3 {
            margin-bottom: 10px;
        }
        .question label {
            display: block;
            margin-bottom: 5px;
        }
        .progress {
            margin-bottom: 20px;
            text-align: center;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        #result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Тест по Arduino</h1>
        <div class="progress">Прогресс: <span id="progress">0%</span></div>
        <form id="quizForm">
            <div class="question">
                <h3>1) Arduino деген эмне?</h3>
                <label><input type="radio" name="q1" value="a"> Программалоо тили.</label>
                <label><input type="radio" name="q1" value="b"> Интерактивдүү түзүлүштөрдү түзүү үчүн ачык платформа.</label>
                <label><input type="radio" name="q1" value="c"> Бир борттуу компьютер.</label>
                <label><input type="radio" name="q1" value="d"> Электроника боюнча электрондук китеп.</label>
            </div>
            <div class="question">
                <h3>2) Arduino программалоо үчүн кандай программа колдонулат?</h3>
                <label><input type="radio" name="q2" value="a"> Arduino IDE.</label>
                <label><input type="radio" name="q2" value="b"> Visual Studio Code.</label>
                <label><input type="radio" name="q2" value="c"> Python.</label>
                <label><input type="radio" name="q2" value="d"> чийүү.</label>
            </div>
            <div class="question">
                <h3>3) Arduino терминологиясында "эскиз" деген эмне?</h3>
                <label><input type="radio" name="q3" value="a"> Компоненттин байланыш схемасынын графикалык чагылдырылышы.</label>
                <label><input type="radio" name="q3" value="b"> Arduino эс тутумуна жүктөлгөн C/C++ программасы.</label>
                <label><input type="radio" name="q3" value="c"> чыңалуу өлчөөчү аспап.</label>
                <label><input type="radio" name="q3" value="d"> Долбоордун долбоору.</label>
            </div>
            <div class="question">
                <h3>4) Arduino IDEде эскиздерди жазуу үчүн кайсы программалоо тили колдонулат?</h3>
                <label><input type="radio" name="q4" value="a"> Python.</label>
                <label><input type="radio" name="q4" value="b"> JavaScript.</label>
                <label><input type="radio" name="q4" value="c"> C/C++.</label>
                <label><input type="radio" name="q4" value="d"> Java.</label>
            </div>
            <div class="question">
                <h3>5) Ардуинонун негизги тактасынын аты кандай?</h3>
                <label><input type="radio" name="q5" value="a"> Uno.</label>
                <label><input type="radio" name="q5" value="b"> Мега.</label>
                <label><input type="radio" name="q5" value="c"> Нано.</label>
                <label><input type="radio" name="q5" value="d"> Леонардо.</label>
            </div>
            <div class="question">
                <h3>6) Төмөнкү компоненттердин кайсынысы сенсорлор болуп саналат?</h3>
                <label><input type="radio" name="q6" value="a"> Светодиоддор.</label>
                <label><input type="radio" name="q6" value="b"> Пьезо элементи.</label>
                <label><input type="radio" name="q6" value="c"> Джойстик.</label>
                <label><input type="radio" name="q6" value="d"> Температура жана нымдуулук сенсору DHT11.</label>
            </div>
            <div class="question">
                <h3>7) Arduino программаларды жана маалыматтарды сактоо үчүн кандай эс тутумун колдонот?</h3>
                <label><input type="radio" name="q7" value="a"> ROM.</label>
                <label><input type="radio" name="q7" value="b"> RAM.</label>
                <label><input type="radio" name="q7" value="c"> EEPROM.</label>
                <label><input type="radio" name="q7" value="d"> Flash.</label>
            </div>
            <div class="question">
                <h3>8) Ардуиного эскизди жүктөө үчүн кайсы ыкма колдонулат?</h3>
                <label><input type="radio" name="q8" value="a"> USB порту аркылуу көчүрүп, чаптаңыз.</label>
                <label><input type="radio" name="q8" value="b"> Bluetooth аркылуу зымсыз берүү.</label>
                <label><input type="radio" name="q8" value="c"> Веб интерфейси аркылуу жүктөө.</label>
                <label><input type="radio" name="q8" value="d"> Arduino IDE аркылуу USB аркылуу жүктөө.</label>
            </div>
            <div class="question">
                <h3>9) Ардуинодо эскизди иштеткенде бир жолу чакырылган функциянын аты кандай?</h3>
                <label><input type="radio" name="q9" value="a"> loop().</label>
                <label><input type="radio" name="q9" value="b"> setup().</label>
                <label><input type="radio" name="q9" value="c"> run().</label>
                <label><input type="radio" name="q9" value="d"> start().</label>
            </div>
            <div class="question">
                <h3>10) Setup() аяктагандан кийин циклдик түрдө чакырылуучу функциянын аты кандай?</h3>
                <label><input type="radio" name="q10" value="a"> loop().</label>
                <label><input type="radio" name="q10" value="b"> setuploop().</label>
                <label><input type="radio" name="q10" value="c"> run().</label>
                <label><input type="radio" name="q10" value="d"> start().</label>
            </div>
            <button type="button" onclick="checkAnswers()">Проверить</button>
        </form>
        <div id="result"></div>
        <li><a href="index.php">Башкы бет</a></li>

    </div>
        
    <script>
        function checkAnswers() {
            const answers = {
                q1: 'b',
                q2: 'a',
                q3: 'b',
                q4: 'c',
                q5: 'a',
                q6: 'd',
                q7: 'd',
                q8: 'd',
                q9: 'b',
                q10: 'a'
            };

            let score = 0;
            const form = document.getElementById('quizForm');
            const formData = new FormData(form);

            for (let [question, answer] of formData.entries()) {
                if (answers[question] === answer) {
                    score++;
                }
            }

            const totalQuestions = Object.keys(answers).length;
            const percentage = (score / totalQuestions) * 100;
            document.getElementById('progress').innerText = `${percentage}%`;
            document.getElementById('result').innerText = `Вы ответили правильно на ${score} из ${totalQuestions} вопросов.`;
        }
    </script>
</body>
</html>
