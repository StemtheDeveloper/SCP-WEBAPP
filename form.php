<!DOCTYPE html>
<html>
<head>
    <title>Add SCP Subject</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">

</head>
<body>
    <h1>Add SCP Subject</h1>

    <form method="POST" action="form.php" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="class">Class:</label>
        <input type="text" name="class" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="containment_procedures">Containment Procedures:</label>
        <textarea name="containment_procedures" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" required>

        <input type="submit" name="submit" value="Add SCP Subject">
    </form>

    <button class="btn"><a class="lnk" href="index.php">Back to Index</a></button>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $description = $_POST['description'];
        $containment_procedures = $_POST['containment_procedures'];
        $image = $_FILES['image']['name'];

        include 'connections.php';

        $insert = $connection->prepare("INSERT INTO ScpSubjects (name, class, description, containment_procedures, image) VALUES (?, ?, ?, ?, ?)");
        $insert->bind_param("sssss", $name, $class, $description, $containment_procedures, $image);

        if ($insert->execute()) {
            $target_dir = "image/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $insert->error . "')</script>";
        }

        $insert->close();
        $connection->close();
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
