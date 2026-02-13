<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль</title>

    <!-- CSS -->
    @vite("resources/css/accounts/admin/frame.css")
    @vite('resources/css/accounts/admin/profile_admin')

</head>
<body>

    <main>

        <iframe src="{{ route('profile.menu_admin') }}"
                class="frame_menu"
                frameborder="0"
        ></iframe>

        <h1 style="text-align: center; margin-top: 23rem; margin-left: 25rem">Добро пожаловать</h1>
    </main>

</body>
</html>
