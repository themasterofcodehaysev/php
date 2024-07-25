<?php
require '../../models/post.model.php';
$id = $_GET["id"] ? $_GET["id"] : null;
if (isset($id)):
    $post = getPost($id);

    require "../../views/post/post.edit.view.php";

endif;