<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>

    <!-- CSS -->
    @vite("resources/css/accounts/login.css")

    <!-- CSS BootStrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" />

    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="">
<main>
    <center>
        <div class="wrapper">

            <form class="form-floating" method="post" action="{{ route('accounts.login') }}">
                @csrf
                <ul>
                    @foreach($errors->all() as $msg)
                        <div class="notice error">
                            {{ $msg }}
                        </div>
                    @endforeach
                </ul>

                <h1 style="margin-top: 1rem; font-size: 35px;">Электронный дневник</h1>
                <p>Вход</p>

                <input type="text" name="login" placeholder="Введите Логин" style="margin-bottom: 1rem;" />
                <input type="password" name="password" placeholder="Введите Пароль" />

                <p><a href="#" style="text-decoration: none;">Забыли данные?</a></p>

                <button type="submit">Войти</button>
            </form>
        </div>
    </center>
</main>

<!-- JS BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>
