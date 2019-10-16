<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'wad_php_1019';
$connect = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()){
    echo 'Failed to contect to MySQL: '.mysqli_connect_error();
}
$result = mysqli_query($connect,'SELECT * FROM users');

?>
<style>
    table.form{
        width: 100%;
    }
    table.form td{
        border: solid 1px #ddd;
        padding: 5px 10px;
    }
    table.form thead{
        font-weight: bold;
    }
</style>
<h2>List ra danh sách users</h2>
<table cellspacing="0" cellpadding="0" class="form">
    <thead>
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Birthday</td>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $item){ ?>
        <tr>
            <td><?php echo $item['ho_ten']; ?></td>
            <td><?php echo $item['so_dien_thoai']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['ngay_sinh']; ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>
