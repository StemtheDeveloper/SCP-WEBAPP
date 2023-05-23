<!DOCTYPE html>
<html>
<head>
    <title>SCP App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this SCP subject?")) {
                document.getElementById('deleteForm_' + id).submit();
            }
        }
    </script>
</head>
<body>
    
    <div class="container">
    <div class="row">
      <div class="col-12">
        <nav>
        <?php
        include 'connections.php';

        // Retrieve SCP subjects from the database
        $query = "SELECT * FROM ScpSubjects";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<button onclick=\"showSubject('" . $row['id'] . "')\">" . $row['name'] . "</button>" . "<br>";
            }
        }

        $connection->close();
        ?>
        
        <button class="btn"><a class="lnk" href="form.php">Add SCP Subject</a></button>
        
    </nav>

    <div id="subjectContainer">
        <?php
        include 'connections.php';

        // Retrieve SCP subjects from the database
        $query = "SELECT * FROM ScpSubjects";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='subject' id='subject_" . $row['id'] . "'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>Class: " . $row['class'] . "</p>";
                echo "<p>Description: " . $row['description'] . "</p>";
                echo "<p>Containment Procedures: " . $row['containment_procedures'] . "</p>";
                echo "<img src='image/" . $row['image'] . "' alt='SCP Image'>";

                // Update button
                echo "<form method='POST' action='update.php'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='submit' name='submit' value='Update'>";
                echo "</form>";

                // Delete button
                echo "<form id='deleteForm_" . $row['id'] . "' method='POST' action='delete.php'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='button' onclick='confirmDelete(" . $row['id'] . ")' value='Delete'>";
                echo "</form>";

                echo "</div>";
            }
        } else {
            echo "<p>No SCP subjects found.</p>";
        }

        $connection->close();
        ?>
    </div>

    <button class="btn"><a class="lnk" href="form.php">Add SCP Subject</a></button>      </div>
    </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        function showSubject(subjectId) {
            var subjectContainer = document.getElementById('subjectContainer');
            var subjects = subjectContainer.getElementsByClassName('subject');

            for (var i = 0; i < subjects.length; i++) {
                subjects[i].style.display = 'none';
            }

            var selectedSubject = document.getElementById('subject_' + subjectId);
            selectedSubject.style.display = 'block';
        }
    </script>
</body>
</html>
