<!DOCTYPE html>
<head>
    <title>Page 2</title>
</head>

<body>

    <h1>MULAH</h1>

    <p>Registration</p>
    <p>Please fill up your details</p>

    <?php
    include 'db_connection.php';

    $countryCode = "+60";
    $phoneNumber = $_POST['phonenum'];

    $stmt = $conn->prepare("INSERT INTO user_information (phone_num) VALUES (?)");
    $stmt->bind_param("s", $phoneNumber);

    if ($stmt->execute()) {
        echo "Loyalty points checked successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();


$conn->close();
?>

    <form action="page3.php" method="post">

    <p>Name</p>
    <input type="text" name="full_name" placeholder="Enter Name">

    <p>Birthday</p>
    <div>
        <div class="birthday_container">
            <div id="day"><input type="number" name="day" placeholder="DD"> </div>
            <div id="month"><input type="number" name="month" placeholder="MM"></div>
            <div id="year"><input type="number" name="year" placeholder="YYYY"></div>
        </div>
    </div>
    
    <p>Email</p>
    <input type="text" name="email" placeholder="Email Address">
    <br>
    <input type="checkbox"> No email address

    <input type="submit" value="Continue">
</form>

</body>
</html>