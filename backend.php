<?php
$services = [
    [
        
        'icon' => 'img/s1.svg',
        'title' => 'HOME SECURITY',
        'text' => 'Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.',
    ],
    [
        'icon' => 'img/s2.svg',
        'title' => 'OFFICE SECURITY',
        'text' => 'Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.',
    ],
    [
        'icon' => 'img/s3.svg',
        'title' => 'BODYGUARD',  
        'text' => 'Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.', 
    ],
];


?>
<?php
if (isset($_POST['send'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];

    echo "yor full name is :".$fullname."<br>";
    echo "yor email is :".$email."<br>";
    echo "yor phonenumber is :".$phonenumber."<br>";
    echo "We have resived your nessage :".$message."<br>";

}
?>