<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <title>Update SCP Subject</title>
</head>
<body>
    <h1>Update SCP Subject</h1>
    
    <button class="btn"><a class="lnk" href="index.php">Back Home</a></button>

    <?php
    include 'connections.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];

        // Retrieve SCP subject from the database
        $query = "SELECT * FROM ScpSubjects WHERE id = '$id'";
        $result = $connection->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $class = $row['class'];
            $description = $row['description'];
            $containment_procedures = $row['containment_procedures'];

            echo "<form method='POST' action='update.php'>";
            echo "<input type='hidden' name='id' value='" . $id . "'>";
            echo "<label for='name'>Name:</label>";
            echo "<input type='text' name='name' value='" . $name . "' required>";

            echo "<label for='class'>Class:</label>";
            echo "<input type='text' name='class' value='" . $class . "' required>";

            echo "<label for='description'>Description:</label>";
            echo "<textarea name='description' required>" . $description . "</textarea>";

            echo "<label for='containment_procedures'>Containment Procedures:</label>";
            echo "<textarea name='containment_procedures' required>" . $containment_procedures . "</textarea>";

            echo "<input type='submit' name='update' value='Update'>";
            echo "</form>";
        } else {
            echo "<p>SCP subject not found.</p>";
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $description = $_POST['description'];
        $containment_procedures = $_POST['containment_procedures'];

        $update = $connection->prepare("UPDATE ScpSubjects SET name = ?, class = ?, description = ?, containment_procedures = ? WHERE id = ?");
        $update->bind_param("ssssi", $name, $class, $description, $containment_procedures, $id);

        if ($update->execute()) {
            echo "<p>SCP subject updated successfully.</p>";
            echo "<a href='index.php'>Back to Index</a>";
        } else {
            echo "<p>Error updating SCP subject: " . $update->error . "</p>";
        }

        $update->close();
    }

    $connection->close();
    ?>
</body>
</html>
