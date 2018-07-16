<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Поле для ввода пароля</title>
    <link  href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<h1>Форма входа</h1>

        <form  action="{{route('usertoken')}}" method="POST" class="email">
            {{ csrf_field() }}
            <div class="field">
                <input type="email" name="email" placeholder="Enter your e-mail" required>
            </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

            <button type="submit" class="btn btn" value="Send">Отправить</button>

        </form>
</body>
</html>