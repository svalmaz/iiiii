<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <title>Тест боюнча Arduino 2</title>
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
        <h1>Тест боюнча Arduino 2</h1>
        <div class="progress">Прогресс: <span id="progress">0%</span></div>
        <form id="quizForm">
            <div class="question">
                <h3>1) Санарип пини деген эмне?</h3>
                <label><input type="radio" name="q1" value="a"> Киргизүү/чыгаруу пини.</label>
                <label><input type="radio" name="q1" value="b"> Электр менен камсыздоо пини.</label>
                <label><input type="radio" name="q1" value="c"> Жерге туташтыруу пини.</label>
                <label><input type="radio" name="q1" value="d"> Аналогдук киргизүү пини.</label>
            </div>
            <div class="question">
                <h3>2) Arduino тактасында кандай микроконтроллер колдонулат?</h3>
                <label><input type="radio" name="q2" value="a"> ARM Cortex-M3.</label>
                <label><input type="radio" name="q2" value="b"> PIC16F877A.</label>
                <label><input type="radio" name="q2" value="c"> ATmega328P.</label>
                <label><input type="radio" name="q2" value="d"> STM32F103C8T6.</label>
            </div>
            <div class="question">
                <h3>3) Төмөнкү интерфейстердин кайсынысы Ардуинодо программа жазуу үчүн колдонулат?</h3>
                <label><input type="radio" name="q3" value="a"> Ethernet.</label>
                <label><input type="radio" name="q3" value="b"> USB.</label>
                <label><input type="radio" name="q3" value="c"> Bluetooth.</label>
                <label><input type="radio" name="q3" value="d"> Wi-Fi.</label>
            </div>
            <div class="question">
                <h3>4) Ардуинодо аналогдук сигналды окуу үчүн кайсы функция колдонулат?</h3>
                <label><input type="radio" name="q4" value="a"> digitalRead().</label>
                <label><input type="radio" name="q4" value="b"> analogRead().</label>
                <label><input type="radio" name="q4" value="c"> analogWrite().</label>
                <label><input type="radio" name="q4" value="d"> digitalWrite().</label>
            </div>
            <div class="question">
                <h3>5) Ардуинодо цикл үчүн кайсы оператор колдонулат?</h3>
                <label><input type="radio" name="q5" value="a"> if.</label>
                <label><input type="radio" name="q5" value="b"> while.</label>
                <label><input type="radio" name="q5" value="c"> for.</label>
                <label><input type="radio" name="q5" value="d"> loop.</label>
            </div>
            <div class="question">
                <h3>6) Ардуино тактасындагы киргизүү/чыгаруу пиндердин саны кандай?</h3>
                <label><input type="radio" name="q6" value="a"> 6.</label>
                <label><input type="radio" name="q6" value="b"> 8.</label>
                <label><input type="radio" name="q6" value="c"> 14.</label>
                <label><input type="radio" name="q6" value="d"> 16.</label>
            </div>
            <div class="question">
                <h3>7) Ардуинонун негизги программалоо тили кайсы?</h3>
                <label><input type="radio" name="q7" value="a"> Java.</label>
                <label><input type="radio" name="q7" value="b"> Python.</label>
                <label><input type="radio" name="q7" value="c"> C/C++.</label>
                <label><input type="radio" name="q7" value="d"> JavaScript.</label>
            </div>
            <div class="question">
                <h3>8) Ардуинодо PWM (Pulse Width Modulation) сигналын чыгаруу үчүн кайсы функция колдонулат?</h3>
                <label><input type="radio" name="q8" value="a"> digitalRead().</label>
                <label><input type="radio" name="q8" value="b"> analogRead().</label>
                <label><input type="radio" name="q8" value="c"> digitalWrite().</label>
                <label><input type="radio" name="q8" value="d"> analogWrite().</label>
            </div>
            <div class="question">
                <h3>9) Ардуинонун негизги тактасынын өлчөмү кандай?</h3>
                <label><input type="radio" name="q9" value="a"> 68.6 мм x 53.4 мм.</label>
                <label><input type="radio" name="q9" value="b"> 74.6 мм x 54.4 мм.</label>
                <label><input type="radio" name="q9" value="c"> 76.6 мм x 56.4 мм.</label>
                <label><input type="radio" name="q9" value="d"> 80.6 мм x 58.4 мм.</label>
            </div>
            <div class="question">
                <h3>10) Ардуино тактасында кандай түрдөгү кристалл осциллятор колдонулат?</h3>
                <label><input type="radio" name="q10" value="a"> 8 МГц.</label>
                <label><input type="radio" name="q10" value="b"> 12 МГц.</label>
                <label><input type="radio" name="q10" value="c"> 16 МГц.</label>
                <label><input type="radio" name="q10" value="d"> 20 МГц.</label>
            </div>
            <button type="button" onclick="checkAnswers()">Текшерүү</button>
        </form>
        <div id="result"></div>
        <li><a href="index.php">Башкы бет</a></li>
    </div>
    <script>
        function checkAnswers() {
            const answers = {
                q1: 'a',
                q2: 'c',
                q3: 'b',
                q4: 'b',
                q5: 'c',
                q6: 'c',
                q7: 'c',
                q8: 'd',
                q9: 'a',
                q10: 'c'
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
