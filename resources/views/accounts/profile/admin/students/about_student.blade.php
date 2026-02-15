<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>добавление студента</title>

    <!-- CSS -->
    @vite("resources/css/accounts/admin/students/about_student.css")
    @vite("resources/css/accounts/admin/frame.css")
    

    <!-- CSS BootStrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" />

    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="">
<main>
    <iframe src="{{ route('profile.menu_admin') }}"
                class="frame_menu"
                frameborder="0"
        ></iframe>
    <center>
        <div class="wrapper">
                <ul>
                    @foreach($errors->all() as $msg_err)
                        <div class="notice error">
                            {{ $msg_err }}
                        </div>
                    @endforeach

                    @if (session('msg'))
                        <div class="notice success">
                            {{ session('msg') }}
                        </div>
                    @endif
                </ul>

                <div class="wrapper_input">
                    <h1 style="margin-top: 1rem; margin-bottom: 2rem; font-size: 40px; font-weight: bold;">О СТУДЕНТЕ</h1>
                    <!-- SNP - это ФИО -->
                    @foreach ($student as $stud)
                        <label for="SNP">ФИО:</label>
                        <input type="text" name="SNP" style="margin-bottom: 1rem;" placeholder="<?= $stud->name ?> <?= $stud->surname ?> <?= $stud->patronymic ?>" disabled />
                        
                        <label for="email">Email:</label>
                        <input type="text" name="email" style="margin-bottom: 1rem;" placeholder="<?= $stud->email ?>" disabled />
                        
                        <label for="number">номер:</label>
                        <input type="text" name="number" style="margin-bottom: 1rem;" placeholder="<?= $stud->number ?>" disabled/>

                        <label for="login">логин:</label>
                        <input type="text" name="login" style="margin-bottom: 1rem;" placeholder="<?= $stud->login ?>" disabled />
                        
                        <label for="pass">пароль:</label>
                        <input type="password" name="password" placeholder="Пароль засекречен" disabled />

                        <label for="pass">пароль:</label>
                        <input type="text" name="group" placeholder="<?= $stud->group ?>" disabled />

                        <label for="role">роль:</label>
                        <input type="text" name="role" placeholder="<?= $stud->role ?>" disabled  />

                        <label for="isBan">бан?:</label>                
                        <input type="text" name="isBan"
                        placeholder="<?= $stud->isBan ?>" disabled  />
                    
                    @endforeach
                </div>

        </div>
    </center>
</main>

<!-- JS BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>
