<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];

    if ($file) {
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        if ($file_extension == 'xlsx') {
            move_uploaded_file($file, 'uploads/' . $filename);
            header('Location: import.php?message=success');
        } else {
            header('Location: import.php?message=error');
        }
    }
}
