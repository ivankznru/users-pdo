<?php

include_once './User.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <div class="card p-3 mb-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Возраст</th>
                        <th scope="col">Email</th>
                        <th scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="">
                            <th scope="row"><input name="id" class="form-control" type="number" placeholder="id" value="1" disabled required></th>
                            <td><input name="first_name" class="form-control" type="text" placeholder="Имя" value="Mark" required></td>
                            <td><input name="last_name" class="form-control" type="text" placeholder="Фамилия" value="Otto" required></td>
                            <td><input name="age" class="form-control" type="number" placeholder="Возраст" value="18" required></td>
                            <td><input name="email" class="form-control" type="email" placeholder="Email" value="vasyapupkin@mail.ru" required></td>
                            <td>
                                <button type="button" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card p-3">
            <h2 class="text-center h5 pb-3">Добавление нового пользователя</h2>
            <form>
                <div class="form-floating mb-3">
                    <input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="Имя пользователя" placeholder="Иван" required>
                    <label for="first_name">Имя</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="last_name" type="text" class="form-control" id="last_name" aria-describedby="Фамилия пользователя" placeholder="Иванов" required>
                    <label for="last_name">Фамилия</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="age" type="number" max="150" class="form-control" id="first_name" aria-describedby="Возраст пользователя" placeholder="33" required>
                    <label for="first_name">Возраст</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="text" class="form-control" id="email" aria-describedby="Email пользователя" placeholder="name@example.com" required>
                    <label for="email">Email</label>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php 

?>