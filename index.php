<meta charset="UTF-8">
<?php
session_start();
$link = mysqli_connect('localhost', "anton8cs_names", "Xy%6rTIc", "anton8cs_names");
if (mysqli_connect_error()) {
    die('Не удалость подключить MySQL');
};
if ($_POST) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT `email` FROM `names` WHERE email='" . mysqli_real_escape_string($link, $email) . "'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Такой email уже зарегистрирован";
    } else {
        $query = "INSERT INTO `names`(`email`, `password`) VALUES ('" . $email . "','" . $password . "')";
        if (mysqli_query($link, $query)) {
            echo "Вы зарегистрировались";
        } else {
            echo "Произошла ошибка";
        }
    }
}
?>
<form method="post">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email address" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit">Зарегистрироваться</button>
</form>
