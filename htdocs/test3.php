<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <title>Тест боюнча Arduino 3</title>
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
        <h1>Тест боюнча Arduino 3</h1>
        <div class="progress">Прогресс: <span id="progress">0%</span></div>
        <form id="quizForm">
            <div class="question">
                <h3>1) Ардуинодо температура сенсорун туташтыруу үчүн кайсы пин колдонулат?</h3>
                <label><input type="radio" name="q1" value="a"> Санарип пин.</label>
                <label><input type="radio" name="q1" value="b"> Кубат пин.</label>
                <label><input type="radio" name="q1" value="c"> Жер пин.</label>
                <label><input type="radio" name="q1" value="d"> Аналогдук пин.</label>
            </div>
            <div class="question">
                <h3>2) Ардуинодо жумуш убактысын өлчөө үчүн кайсы функция колдонулат?</h3>
                <label><input type="radio" name="q2" value="a"> delay().</label>
                <label><input type="radio" name="q2" value="b"> millis().</label>
                <label><input type="radio" name="q2" value="c"> micros().</label>
                <label><input type="radio" name="q2" value="d"> секундомер().</label>
            </div>
            <div class="question">
                <h3>3) Ардуинодо маалыматтарды сактоо үчүн кайсы эс тутум колдонулат?</h3>
                <label><input type="radio" name="q3" value="a"> ROM.</label>
                <label><input type="radio" name="q3" value="b"> RAM.</label>
                <label><input type="radio" name="q3" value="c"> EEPROM.</label>
                <label><input type="radio" name="q3" value="d"> Flash.</label>
            </div>
            <div class="question">
                <h3>4) Ардуино долбоорлорунда убакытты өлчөө үчүн кайсы функция колдонулат?</h3>
                <label><input type="radio" name="q4" value="a"> delay().</label>
                <label><input type="radio" name="q4" value="b"> millis().</label>
                <label><input type="radio" name="q4" value="c"> micros().</label>
                <label><input type="radio" name="q4" value="d"> секундомер().</label>
            </div>
            <div class="question">
                <h3>5) Ардуино долбоорлорунда жарык диоддорун кантип башкарууга болот?</h3>
                <label><input type="radio" name="q5" value="a"> analogWrite().</label>
                <label><input type="radio" name="q5" value="b"> digitalWrite().</label>
                <label><input type="radio" name="q5" value="c"> analogRead().</label>
                <label><input type="radio" name="q5" value="d"> digitalRead().</label>
            </div>
            <div class="question">
                <h3>6) Ардуинонун негизги долбоорлорунда кайсы сенсор колдонулат?</h3>
                <label><input type="radio" name="q6" value="a"> Температура сенсору.</label>
                <label><input type="radio" name="q6" value="b"> Жарык сенсору.</label>
                <label><input type="radio" name="q6" value="c"> Нымдуулук сенсору.</label>
                <label><input type="radio" name="q6" value="d"> Кыймыл сенсору.</label>
            </div>
            <div class="question">
                <h3>7) Ардуино долбоорлорунда кандай компоненттер колдонулат?</h3>
                <label><input type="radio" name="q7" value="a"> Резисторлор.</label>
                <label><input type="radio" name="q7" value="b"> Конденсаторлор.</label>
                <label><input type="radio" name="q7" value="c"> Диоддор.</label>
                <label><input type="radio" name="q7" value="d"> Баардыгы жогоруда айтылган.</label>
            </div>
            <div class="question">
                <h3>8) Ардуинонун негизги тактасынын кубаттуулугу кандай?</h3>
                <label><input type="radio" name="q8" value="a"> 5V.</label>
                <label><input type="radio" name="q8" value="b"> 3.3V.</label>
                <label><input type="radio" name="q8" value="c"> 12V.</label>
                <label><input type="radio" name="q8" value="d"> 9V.</label>
            </div>
            <div class="question">
                <h3>9) Ардуино долбоорлорунда кандай интерфейстер колдонулат?</h3>
                <label><input type="radio" name="q9" value="a"> USB.</label>
                <label><input type="radio" name="q9" value="b"> Ethernet.</label>
                <label><input type="radio" name="q9" value="c"> Bluetooth.</label>
                <label><input type="radio" name="q9" value="d"> Баардыгы жогоруда айтылган.</label>
            </div>
            <div class="question">
                <h3>10) Ардуино долбоорлорунда кандай программалоо тили колдонулат?</h3>
                <label><input type="radio" name="q10" value="a"> C/C++.</label>
                <label><input type="radio" name="q10" value="b"> Python.</label>
                <label><input type="radio" name="q10" value="c"> JavaScript.</label>
                <label><input type="radio" name="q10" value="d"> Java.</label>
            </div>
            <button type="button" onclick="checkAnswers()">Текшерүү</button>
        </form>
        <div id="result"></div>
        <li><a href="index.php">Башкы бет</a></li>
    </div>
    <script>
        function checkAnswers() {
            const answers = {
                q1: 'd',
                q2: 'b',
                q3: 'c',
                q4: 'a',
                q5: 'b',
                q6: 'd',
                q7: 'd',
                q8: 'a',
                q9: 'd',
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
            document.getElementById('result').innerText = `Сиз ${totalQuestions} суроонун ичинен ${score} суроого туура жооп бердиңиз.`;
        }
    </script>
</body>
</html>
