<!DOCTYPE html>
<head>
    <title>Page 2</title>
    <link href="page2_styles.css" rel="stylesheet" type="text/css">
</head>

<body>

    <p id="title_mulah">MULAH</p>

    <div id="page2_container">
    <p id="regis">Registration</p>
    <p id="filldetails">Please fill up your details</p>

    <?php
    
    include 'db_connection.php';

    $countryCode = "+60";
    $phoneNumber = $_POST['phonenum'];

    $stmt = $conn->prepare("INSERT INTO user_information (phone_num) VALUES (?)");
    $stmt->bind_param("s", $phoneNumber);

    if ($stmt->execute()) {
        echo "<p id='checked_loyalty'>Loyalty points checked successfully!</p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();


$conn->close();

?>

    <form action="page3.php" method="post">

    <p class='hint'>Name</p>
    <input type="text" name="full_name" placeholder="Enter Name" id="user_name">

    <p class="hint">Birthday</p>
    <div>
        <div class="birthday_container">
            <div id="day"><input type="number" name="day" placeholder="DD"> </div>
            <div id="month"><input type="number" name="month" placeholder="MM"></div>
            <div id="year"><input type="number" name="year" placeholder="YYYY"></div>
        </div>
    </div>
    
    <p class="hint">Email</p>
    <input type="text" name="email" placeholder="Email Address" id="user_email">

    <br>

    <input type="checkbox"> No email address

    <br>

    <input type="submit" value="Continue">
</form>
</div>
</body>
</html>