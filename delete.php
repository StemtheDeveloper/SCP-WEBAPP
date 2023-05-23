<link rel="stylesheet" type="text/css" href="style.css">

<?php
include 'connections.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $delete = $connection->prepare("DELETE FROM ScpSubjects WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        echo "<p>SCP subject deleted successfully.</p> <br> <button class='btn'><a class='lnk' href='index.php'>Back to Index</a></button>";
    } else {
        echo "<p>Error deleting SCP subject: " . $delete->error . "</p>";
    }

    $delete->close();
}

$connection->close();
?>
