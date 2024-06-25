<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <title>Тесттер</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
            transition: background-color 0.3s;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            transition: box-shadow 0.3s;
        }
        .container:hover {
            box-shadow: 0 0 30px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            transition: color 0.3s;
        }
        h1:hover {
            color: #004d40;
        }
        .test-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
        .test-card {
            background-color: #00796b;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 45%;
            text-align: center;
            transition: transform 0.3s, background-color 0.3s;
        }
        .test-card:hover {
            transform: translateY(-10px);
            background-color: #004d40;
        }
        .test-card a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        .test-card a:hover {
            color: #b2dfdb;
        }
        .back-button {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.3s, background-color 0.3s;
            text-align: center;
        }
        .back-button:hover {
            background-color: #004d40;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>

            <h1>Тесттер</h1>
        </header>
        <main>
            
            <div class="test-list">
                <div class="test-card">
                    <a href="test1.php">Тест 1</a>
                </div>
                <div class="test-card">
                    <a href="test2.php">Тест 2</a>
                </div>
                <div class="test-card">
                    <a href="test3.php">Тест 3</a>
                </div>
                <div class="test-card">
                    <a href="test4.php">Тест 4</a>
                </div>
                <div class="test-card">
                    <a href="test5.php">Тест 5</a>
                </div>
            </div>
            <a href="javascript:history.back()" class="back-button">Кайтуу</a>

        </main>
    </div>
</body>
</html>
