<?php
$heading = "Post Page";
require '../../models/post.model.php';
$post = getPosts();
require '../../view.post/post.php';