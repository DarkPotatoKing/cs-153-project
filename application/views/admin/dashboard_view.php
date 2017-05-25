<div class="container">
  <h1>Welcome to the Dashboard!</h1>
<?php
    echo "Username: ";
    echo $user->username."<br>";
    echo "Name: ";
    echo $user->first_name." ";
    echo $user->last_name."<br>";
    echo "Address: ";
    echo $user->address."<br>";
    echo "Birthday: ";
    echo $user->birthday."<br><br>";

    echo "Active users:<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_153";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT user_id FROM active_logins";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($result2 = $conn->query("SELECT username FROM users WHERE id=" . $row["user_id"]))
            {
                echo $result2->fetch_assoc()["username"];
                echo "<br>";
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
  ?>
</div>
