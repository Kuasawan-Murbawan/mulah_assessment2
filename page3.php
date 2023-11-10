<!DOCTYPE html>
<head>
    <title>Page 3</title>
</head>

<?php 
    include "db_connection.php";
?>

<body>

<?php

    $name = $_POST['full_name'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $month = $_POST['month']; 
    $email = $_POST['email'];

    $birthday = "$year-$month-$day";

    $checkQuery = $conn->query("SELECT * from user_information WHERE phone_num='173527250'");

    if ($checkQuery->num_rows > 0) {
        $stmt = $conn->prepare("UPDATE user_information SET full_name=?, email=?, birthday=? WHERE phone_num=173527250");
        $stmt->bind_param("sss", $name, $email, $birthday);
    } 
    /*else {
        $stmt = $conn->prepare("INSERT INTO user_information (full_name, email, birthday, phone_num) VALUES (?, ?, ?, '173527250')");
        $stmt->bind_param("sss", $name, $email, $birthday);
    }*/


    if ($stmt->execute()) {
        echo "DATA INSERTED";
    } else {
        echo "ERROR DATA INSERTION: " . $stmt->error;
    }
    $stmt->close();

    $conn->close();

?>

    <h1>The data Inserted:</h1>
    <table>

    <tr>
        <th>Phone Number</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Birthday</th>
</tr>

<?php

include 'db_connection.php';
        $sql = "SELECT * FROM user_information WHERE phone_num='173527250'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['phone_num'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['birthday'] . "</td>";
            echo "</tr>";
        }
        ?>

</table>

</body>


</html>
