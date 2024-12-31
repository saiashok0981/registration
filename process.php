<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $address = htmlspecialchars($_POST['address']);

    echo "
        <div style='border: 1px solid #ccc; padding: 10px; background: #f9f9f9;'>
            <h3>Registration Successful!</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Address:</strong> $address</p>
        </div>
    ";
} else {
    echo "<span style='color: red;'>Invalid Request!</span>";
}
?>
