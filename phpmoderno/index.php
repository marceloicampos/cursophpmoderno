<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>PHP Info - Apache - MySQL Test</title>
</head>

<body>
    <h1> OK ! Apache funcionando!</h1>

    <?php
    echo 'PHP Version: ' . phpversion() . '<br />';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<br /> Connected successfully to MySQL  <br />";

    // Query and Show Result
    $query = "SELECT * FROM table_test";

    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            printf("<br /> Nome: %s | Cidade: %s <br />", $row["nome"], $row["cidade"]);
        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    phpinfo();
    ?>

</body>

</html>