<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<body>
    <?php


        $username = $_GET["username"];
        $password = $_GET["password"];


$fp = fopen("username_password.txt", "r");
If (!$fp )
die("username_password.txt!");
$count =0;
$file_content = file("username_password.txt"); //read into array now
foreach ($file_content as $lines) {
$lines = chop( $lines );
$field = preg_split( '/,/', $lines);
$count++;
print("No. $count Name: $field[0], age: $field[1] <br />");
}

if (($field[0] == $username)&& ($field[1] == $password)){
        header( 'Location: http://webprojects.eecs.qmul.ac.uk/jh318/SEProject/' ) ;
    }
    else{
        header( 'Location: http://webprojects.eecs.qmul.ac.uk/jh318/SEProject/incorrect.html' ) ;
    }


fclose($fp);
    ?>
</body>

</html>
