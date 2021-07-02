<?php
$connection = mysqli_connect("localhost", "root", "", "libmansys");

if ($_POST) {
    $name = $_POST['txt1'];
    $number = $_POST['txt2'];
    $gender = $_POST['txt3'];

    mysqli_query($connection,
                    "insert into tbl_user(user_name,user_mobile,user_gender) "
                    . "values('{$name}','{$number}','{$gender}')") or die(mysqli_error($connection));
}
?>


<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST">
            Name: <input type="text" name="txt1"><br>
            Number:<input type="number" name="txt2"><br>
            Gender: <select name="txt3">
                <option>Male</option>
                <option>Female</option>
            </select><br>
            <input type="submit">
        </form>
    </body>
</html>
