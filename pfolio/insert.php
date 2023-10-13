<!DOCTYPE html>
<html>
<head>
    <title>CV Upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="file" name="cv">
        <input type="submit" name="btn" value="UPLOAD">
    </form>

    <?php
    include("config.php");

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_FILES['cv'])) {
            $filename = $_FILES['cv']['name'];
            $filetype = $_FILES['cv']['type'];
            $filesize = $_FILES['cv']['size'];
            $tmp_name = $_FILES['cv']['tmp_name'];

            $location = "content/" . $filename;

            if (move_uploaded_file($tmp_name, $location)) {
                echo "Your CV has been uploaded successfully.";

                // Use prepared statement to insert data safely
                $sql = "INSERT INTO alishba (cv) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $location);

                if ($stmt->execute()) {
                    echo "CV location stored in the database.";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Sorry, there was an error uploading your CV.";
            }
        }
    }
    ?>

</body>
</html>
