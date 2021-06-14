<?php
$a1 = $_POST['mark1'];
$a2 = $_POST['mark2'];
$a3 = $_POST['mark3'];
$a4 = $_POST['mark4'];
$a5 = $_POST['mark5'];
$average = ($a1+$a2+$a3+$a4+$a5)/5;
?>
<html>`
    <body>
        <table border="1">
            <tr>
                <td>English</td>
                <td><?php echo $a1; ?></td>
            </tr>
            <tr>
                <td>Hindi</td>
                <td><?php echo $a2; ?></td>
            </tr>
            <tr>
                <td>Gujrati</td>
                <td><?php echo $a3; ?></td>
            </tr>
            <tr>
                <td>Maths</td>
                <td><?php echo $a4; ?></td>
            </tr>
            <tr>
                <td>Science</td>
                <td><?php echo $a5; ?></td>
            </tr>
            <tr>
                <td>Total marks</td>
                <td><?php echo ($a1+$a2+$a3+$a4+$a5) ?></td>
            </tr>
            <tr>
                <td>Result</td>
                <td>
                    <?php 
                        if($average>90){
                            echo "Distinction";
                        }else if($average>75){
                            echo "Firstclass";
                        }else if($average>60){
                            echo "Secondclass";
                        }else if($average>40){
                            echo "Average";
                        }else{
                            echo "Fail";
                        }
                    ?>
                </td>
            </tr>
        
        </table>
    </body>
</html>