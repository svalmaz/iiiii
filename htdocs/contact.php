<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <title>Биз менен байланышыңыз</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-item {
            background-color: #00796b;
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            width: 60%;
            text-align: center;
            margin: 10px 0;
            transition: transform 0.3s, background-color 0.3s;
        }
        .contact-item:hover {
            transform: scale(1.05);
            background-color: #004d40;
        }
        .contact-item a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
        }
        .contact-item a:hover {
            color: #b2dfdb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Биз менен байланышыңыз</h1>
        <div class="contact-info">
            <div class="contact-item">
                Телефон: <a href="tel:+99677068491">077068491</a>
            </div>
            <div class="contact-item">
                Электрондук почта: <a href="mailto:chelovek.ch@gmail.com">chelovek.ch@gmail.com</a>
            </div>
            <div class="contact-item">
                Telegram: <a href="https://tg.me/@almaz" target="_blank">@almaz</a>
            </div>
            <div class="contact-item">
                Instagram: <a href="https://instagram.com" target="_blank">instagram.com</a>
            </div>
        </div>
    </div>
</body>
</html>
