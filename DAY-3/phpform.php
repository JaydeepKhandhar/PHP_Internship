<!doctype html>
<html>
<head>
<title> Personal Details </title>
<style>
    body{
        background-color:rgb(191, 219, 230);
    }
    div{
        max-width: 500px;
        margin:auto;
        padding: 15px;
        border:1px solid black;  
        background-color: skyblue;     
    }
</style>
</head>
<body> 
<div>
    <h3 style="text-align:center">Registration Form</h3>
    <form action="process.php" method="post">
        <table>
            <tr>
                <td><label for="fname">First Name</label></td>
                <td><input type="text"  name="txt1" placeholder="your name" id="fname"></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name</label></td>
                <td><input type="text" name="txt2" id="lname" placeholder="Surname name"></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><input type="text" name="txt3" id="address" placeholder="Enter your Address"></td>
            </tr>
            <tr>
                <td><label for="mnum">Mobile number</label></td>
                <td><input type="phone" name="txt4" id="mnum" placeholder="contact number" ></td>
            </tr>
            <br>
            <tr>
                <td>Gender:</td>
                <td>
                    <label for="g1">Male</label>
                    <input name="txt5" type="radio" id="g1" name="gender" value="male">
                    <label for="g2">Female</label>
                    <input name="txt5" type="radio" id="g2" name="gender" value="female">
                    <label for="g3">Other</label>
                    <input name="txt5" type="radio" id="g3" name="gender" value="other">
                </td>
            </tr>
            <tr>
                <td><label for="mail">Email</label></td>
                <td><input name = "txt6" type="email" id="mail" placeholder="Email"></td>
            </tr>
            <tr>
                <td><label for="pass">Password:</label></td>
                <td><input type="password" name="txt7" id="pass" placeholder="Enter password">
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" value="submit">Submit</button>
                    <button type="reset" value="reset">Reset</button>
                </td>
            </tr>
        </table>
        </form>
</div>
</body>
</html>