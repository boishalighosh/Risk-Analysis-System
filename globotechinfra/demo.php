<?php
// Check if the table name is provided in the POST request
if (isset($_POST["table_name"]) && !empty($_POST["table_name"])) {
    $table_name = $_POST["table_name"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "major";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the table name for SQL query to prevent SQL injection
    $table_name = $conn->real_escape_string($table_name);

    // Construct SQL query to create the table
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                Achieved VARCHAR(255) NOT NULL,
                Shortfall VARCHAR(255) NOT NULL
            )";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // If table creation is successful, redirect the user to progress.php with the table name
        header("Location: progress.php?table_name=$table_name");
        exit();
    } else {
        // If there's an error in the SQL query execution, display the error message
        echo "Error creating table: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the table name is not provided in the POST request, display an error message
    echo "Table name not provided.";
}
?>
