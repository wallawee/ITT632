<?php
    // Database connection
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "razali";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query
    $sql = "SELECT * FROM razali";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data from each row
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $ic = $row["ic"];
            $studentid = $row["studentid"];
            $address = $row["address"];
            $phone = $row["phone"];
            $hobby = $row["hobby"];
            $age = $row["age"];
            $gender = $row["gender"];
            $email = $row["email"];
            $images = $row["images"];
        }
    } else {
        echo "No records found";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>