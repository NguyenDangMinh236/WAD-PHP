<?php
$server = 'localhost';
$username= 'root';
$password = '';
$database='wad_php_1019';
$connect= mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno()){
    echo 'Faied to connect to MySQL: ' . mysqli_connect_error();
}

$value = [];
$error = [];
$fields= ['name', 'phone', 'email', 'birthday'];
$submit = isset($_POST['register']);

foreach ($fields as $field){
  $value[$field] = $_POST[$field] ?? '';
    $error[$field] = $value[$field] || !isset($_POST['register']) ? '' : 'this field is required';
    if ($submit && $error[$field])
    {
        $submit = false;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            background: #19407c;
            margin-right: 75%;
        }
        label:not(.gender) {
            width: 150px;
            display: inline-block;
            text-align: right;
            margin: 0 10px 0 0;
        }
        span.title {
            font-weight: bold;
            margin-bottom: 10px;
            display: inline-block;
            font-size: 40px;
        }
        .error {
            margin: 5px 0 15px 165px;
            color: red;
        }
        p.success {
            color: #00bf00;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    <div>
        <label for="">&nbsp;</label>
        <span class="title">Sign up</span>
    </div>
    <div>
        <label for="">Name: </label>
        <input type="text" name="name" value="<?= $value['name'] ?>">
        <p class="error"><?= $error['name'] ?></p>
    </div>
    <div>
        <label for="">Email: </label>
        <input type="text" name="email" value="<?= $value['email'] ?>">
        <p class="error"><?= $error['email'] ?></p>
    </div>

    <div>
        <label for="">Phone: </label>
        <input type="text" name="phone" value="<?= $value['phone'] ?>">
        <p class="error"><?= $error['phone'] ?></p>
    </div>
    <div>
        <label for="">Birthday: </label>
        <input type="date" name="birthday" value="<?= $value['birthday'] ?>">
        <p class="error"><?= $error['birthday'] ?></p>
    </div>
    <div>
        <label for="">&nbsp;</label>
        <button name="register">Register</button>
    </div>

    <?php
    if (isset($_POST['register']) && $submit){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $sql = "insert into users(ho_ten,so_dien_thoai ,email,ngay_sinh ) 
                value ('$name', '$phone','$email', '$birthday')";
        if (mysqli_query($connect, $sql) === true){
            echo '<p class="success" style="margin-left: 160px">Register successfully</p>';
        } else{
            var_dump($connect -> error);
        }
    }
    ?>

</form>
</body>
</html>