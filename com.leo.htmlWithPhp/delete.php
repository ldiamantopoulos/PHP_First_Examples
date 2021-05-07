<?php
if (!isset($_GET['id'])) {
    echo 'If we used db this would have been deleted';
    header('Location: list-books.php');
    die();
} else {
    echo 'If we used db this would have been deleted';
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: list-books.php');
        die();
    } else {
        echo 'If we used db this would have been deleted';
    }
}