<?php
if ($_FILES['file']['type'] == 'image/png') {
    // No validation or sanitization, so an attacker can upload a PHP file disguised as a PNG image
    move_uploaded_file($_FILES['file']['tmp_name'], '/path/to/uploads/' . $_FILES['file']['name']);
}
?>
