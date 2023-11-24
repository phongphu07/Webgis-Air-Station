<?php
// connect database
include '../connect.php';

if (isset($_POST['add_post_news_action'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];

    $query = "INSERT INTO post_news(name,description,meta_title,meta_description)VALUES
    ('$name','$description','$meta_title','$meta_description')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        header('Location: post_news.php');
    }
}
