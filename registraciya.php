<?php
require_once 'php/connect.php';
require_once "php/functions.php";

// Проверка, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $name = $_REQUEST['name'] ?? '';
    $surname = $_REQUEST['surname'] ?? '';
    $phone = $_REQUEST['phone'] ?? '';
    $login = $_REQUEST['login'] ?? '';
    $password = $_REQUEST['password'] ?? '';
    $confirmPassword = $_REQUEST['confirm_password'] ?? '';

    $errors = ValidPoley($name, $surname, $phone, $login, $password, $confirmPassword);

    // Если нет ошибок, пользователь авторизован
    if (empty($errors)) {
        $message = 'Вы успешно авторизовались!';
        
        //отправка данных в БД
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `login`, `password`) VALUES (NULL, '$name', '$surname', '$phone', '$login', '$password');");
        $var = 0;
        header('Location: index.php?var=' . urlencode($var));
    }
}
?>
    <?showHeader();?>
    <div class="login-form">
            <h2>регистрация</h2>
        <?php if (isset($message)) : ?>
            <p class="success"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="post" action="">
            <div>
            <?php if (isset($errors['name'])) : ?>
                <p class="error"><?php echo $errors['name']; ?></p>
            <?php endif; ?>
                <input type="text" name="name" id="name" placeholder="Введите ваше имя" value="<?php echo $name ?? ''; ?>">
            
            </div>
            <div>
            <?php if (isset($errors['surname'])) : ?>
                <p class="error"><?php echo $errors['surname']; ?></p>
            <?php endif; ?>
                <input type="text" name="surname" id="surname" placeholder="Введите вашу фамилию" value="<?php echo $surname ?? ''; ?>">
                
            </div>
            <div>
            <?php if (isset($errors['phone'])) : ?>
                <p class="error"><?php echo $errors['phone']; ?></p>
            <?php endif; ?>
                <input type="text" name="phone" id="phone" placeholder="Введите ваш телефон" value="<?php echo $phone ?? ''; ?>">
                
            </div>
            <div>
            <?php if (isset($errors['login'])) : ?>
                <p class="error"><?php echo $errors['login']; ?></p>
            <?php endif; ?>
                <input type="text" name="login" id="login" placeholder="Введите ваш логин" value="<?php echo $login ?? ''; ?>">
            
            </div>
            <div>
            <?php if (isset($errors['password'])) : ?>
                    <p class="error"><?php echo $errors['password']; ?></p>
            <?php endif; ?>
                <input type="password" name="password" id="password" placeholder="Введите ваш пароль">
                
            </div>
            <div>
            <?php if (isset($errors['confirm_password'])) : ?>
                <p class="error"><?php echo $errors['confirm_password']; ?></p>
            <?php endif; ?>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Повторите ваш пароль">
                
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>
<?php
function ValidPoley(string $name,string $surname,mixed $phone,mixed $login,mixed $password,mixed $confirmPassword){
    // Валидация полей
    if (empty($name)) {
        $errors['name'] = 'Пожалуйста, введите ваше имя.';
    }else{
        $errors = [];
    } 
    if (empty($surname)) {
        $errors['surname'] = 'Пожалуйста, введите вашу фамилию.';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Пожалуйста, введите ваш телефон.';
    }
    if (empty($login)) {
        $errors['login'] = 'Пожалуйста, введите ваш логин.';
    }
    if (empty($password)) {
        $errors['password'] = 'Пожалуйста, введите ваш пароль.';
    }
    if (empty($confirmPassword)) {
        $errors['confirm_password'] = 'Пожалуйста, повторите ваш пароль.';
    } elseif ($password !== $confirmPassword) {
        $errors['confirm_password'] = 'Пароли не совпадают.';
    }

    return $errors;
}

function zapis(string $name,string $surname,mixed $phone,mixed $login,mixed $password){
    $arrText['name'] = $name;
    $arrText['surname'] = $surname;
    $arrText['phone'] = $phone;
    $arrText['login'] = $login;
    $arrText['password'] = $password;

    return $arrText;
}
?>
