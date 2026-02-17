<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Студенты</title>

    <!-- CSS -->
    @vite("resources/css/accounts/admin/frame.css")
    @vite("resources/css/accounts/admin/profile_admin.css")

    <!-- CSS BootStrap -->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>

    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
    <main>
        <iframe src="{{ route('profile.admin.menu_admin') }}"
                class="frame_menu"
                frameborder="0"
        ></iframe>

        <table class="table table-hover" style="margin-left: 19rem; width: 75.5%;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>имя</th>
                    <th>фамилия</th>
                    <th>отчество</th>
                    <th>группа</th>
                    <th>роль</th>
                </tr>
            </thead>
           <tbody>
            @foreach($students as $student)
                <tr onclick="window.location='{{ route('profile.admin.show_about_student', ['id' => $student->id]) }}'" style="cursor: pointer;">
                   <th scope="col"><?= $student->id ?></th>
                   <th scope="col"><?= $student->name ?></th>
                   <th scope="col"><?= $student->surname ?></th>
                   <th scope="col"><?= $student->patronymic ?></th>
                   <th scope="col"><?= $student->group ?></th>
                   <th scope="col"><?= $student->role ?></th>
               </tr>
            @endforeach
           </tbody>
        </table>
    </main>
</body>
</html>
