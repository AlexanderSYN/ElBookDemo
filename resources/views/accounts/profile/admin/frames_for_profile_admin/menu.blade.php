<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль Админа</title>

    <!-- CSS -->
    @vite("resources/css/accounts/admin/frame.css")
    @vite("resources/css/accounts/admin/profile_admin.css")

    <!-- CSS BootStrap -->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>

    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background:#333;">

<main>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" style="width: 18.5rem;" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
            студенты
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><button class="dropdown-item" onclick="parent.location.href='{{ route('profile.show_all_students') }}'">просмотр</button></li>
            <li><a class="dropdown-item" onclick="parent.location.href='{{ route('profile.add_students') }}'">добавить</a></li>
            <li><a class="dropdown-item" href="#">изменить</a></li>
            <li><a class="dropdown-item" href="#">удалить</a></li>
        </ul>
    </div>
</main>


</body>
</html>
