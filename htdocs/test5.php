<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <title>Тест боюнча Arduino 5</title>
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
        <h1>Тест боюнча Arduino 5</h1>
        <div class="progress">Прогресс: <span id="progress">0%</span></div>
        <form id="quizForm">
            <div class="question">
                <h3>1) Ардуинонун негизги тактасынын кубаттуулугу кандай?</h3>
                <label><input type="radio" name="q1" value="a"> 5V.</label>
                <label><input type="radio" name="q1" value="b"> 3.3V.</label>
                <label><input type="radio" name="q1" value="c"> 12V.</label>
                <label><input type="radio" name="q1" value="d"> 9V.</label>
            </div>
            <div class="question">
                <h3>2) Ардуинонун негизги долбоорлорунда кандай моторлор колдонулат?</h3>
                <label><input type="radio" name="q2" value="a"> DC моторлор.</label>
                <label><input type="radio" name="q2" value="b"> Серво моторлор.</label>
                <label><input type="radio" name="q2" value="c"> Stepper моторлор.</label>
                <label><input type="radio" name="q2" value="d"> Баардыгы жогоруда айтылган.</label>
            </div>
            <div class="question">
                <h3>3) Ардуинонун негизги долбоорлорунда кандай сенсорлор колдонулат?</h3>
                <label><input type="radio" name="q3" value="a"> Температура сенсору.</label>
                <label><input type="radio" name="q3" value="b"> Жарык сенсору.</label>
                <label><input type="radio" name="q3" value="c"> Нымдуулук сенсору.</label>
                <label><input type="radio" name="q3" value="d"> Баардыгы жогоруда айтылган.</label>
            </div>
            <div class="question">
                <h3>4) Ардуинонун негизги тактасында канча санариптик пин бар?</h3>
                <label><input type="radio" name="q4" value="a"> 8.</label>
                <label><input type="radio" name="q4" value="b"> 10.</label>
                <label><input type="radio" name="q4" value="c"> 12.</label>
                <label><input type="radio" name="q4" value="d"> 14.</label>
            </div>
            <div class="question">
                <h3>5) Ардуинонун негизги тактасында канча аналогдук пин бар?</h3>
                <label><input type="radio" name="q5" value="a"> 4.</label>
                <label><input type="radio" name="q5" value="b"> 6.</label>
                <label><input type="radio" name="q5" value="c"> 8.</label>
                <label><input type="radio" name="q5" value="d"> 10.</label>
            </div>
            <div class="question">
                <h3>6) Ардуинонун негизги тактасында канча кубат пини бар?</h3>
                <label><input type="radio" name="q6" value="a"> 1.</label>
                <label><input type="radio" name="q6" value="b"> 2.</label>
                <label><input type="radio" name="q6" value="c"> 3.</label>
                <label><input type="radio" name="q6" value="d"> 4.</label>
            </div>
            <div class="question">
                <h3>7) Ардуинонун негизги тактасында канча жер пини бар?</h3>
                <label><input type="radio" name="q7" value="a"> 2.</label>
                <label><input type="radio" name="q7" value="b"> 3.</label>
                <label><input type="radio" name="q7" value="c"> 4.</label>
                <label><input type="radio" name="q7" value="d"> 5.</label>
            </div>
            <div class="question">
                <h3>8) Ардуино долбоорлорунда кандай программалоо тили колдонулат?</h3>
                <label><input type="radio" name="q8" value="a"> C/C++.</label>
                <label><input type="radio" name="q8" value="b"> Python.</label>
                <label><input type="radio" name="q8" value="c"> JavaScript.</label>
                <label><input type="radio" name="q8" value="d"> Java.</label>
            </div>
            <div class="question">
                <h3>9) Ардуино долбоорлорунда кандай интерфейстер колдонулат?</h3>
                <label><input type="radio" name="q9" value="a"> USB.</label>
                <label><input type="radio" name="q9" value="b"> Ethernet.</label>
                <label><input type="radio" name="q9" value="c"> Bluetooth.</label>
                <label><input type="radio" name="q9" value="d"> Баардыгы жогоруда айтылган.</label>
            </div>
            <div class="question">
                <h3>10) Ардуино долбоорлорунда кандай резисторлор колдонулат?</h3>
                <label><input type="radio" name="q10" value="a"> 220 Ом резисторлор.</label>
                <label><input type="radio" name="q10" value="b"> 10 кОм резисторлор.</label>
                <label><input type="radio" name="q10" value="c"> 1 кОм резисторлор.</label>
                <label><input type="radio" name="q10" value="d"> Баардыгы жогоруда айтылган.</label>
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
                q2: 'd',
                q3: 'd',
                q4: 'd',
                q5: 'b',
                q6: 'b',
                q7: 'a',
                q8: 'a',
                q9: 'd',
                q10: 'd'
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
