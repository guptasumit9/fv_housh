<?php
 
$password = "GeeksforGeeks";
 
 $hpass=password_hash($password, PASSWORD_BCRYPT);
 
echo "Original Password is: ", $password;
echo "<br>";
 
echo "Hashed Password is: ", $hpass;
echo "<br>";
 
if (password_verify($password, $hpass)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
 
?>