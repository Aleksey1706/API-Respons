<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Поле для ввода пароля</title>
    <link  href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<h1>Форма входа</h1>

        <form  action="{{route('home')}}" class="email">
            <div class="field">
                <input type="text" name="login" placeholder="Enter your e-mail" required>
            </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

            <button type="submit" class="btn btn" value="Send">Отправить</button>

        </form>
</body>
</html>