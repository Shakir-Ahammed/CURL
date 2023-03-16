<?php

error_reporting(0);


$msg = "";
include("dbconn.php");
// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['submit'])) {

    $filename = $_FILES["my_image"]["name"];

    $tempname = $_FILES["my_image"]["tmp_name"];

    $folder = "uploads/" . $filename;

    // Add the image to the "image" folder"

    if (move_uploaded_file($tempname, $folder)) {

        $img = file_get_contents($folder);
        $image_data = base64_encode($img);

        // connect with the database



        // query to insert the submitted data

        $sql = "INSERT INTO img (img1,img2) VALUES ('$filename','$image_data')";

        // function to execute above query

        mysqli_query($conn, $sql);



        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}







?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="margin-top:20px">

        <form action="" method="post" enctype="multipart/form-data">
            <label for="formFileLg" class="form-label">Upload your Image</label>
            <input name="my_image" class="form-control form-control-lg" id="formFileLg" type="file" />
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Upload</button>
        </form>
    </div>
    <div class="container" style="margin-top:20px">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>PathImage</th>
                    <th>Base64Image</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "select * from img";
                $result = mysqli_query($conn, $sql2) or die("failed");
                $count = 1;

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {


                        echo "<tr><td>$count</td>
                            <td> <img src='uploads/{$row['img1']}' width='100' height='100'/></td>
                            <td> <img src='data:image/jpeg;base64,{$row['img2']}' width='100' height='100'/></td>";
                        $count++;
                    }
                }
                ?></tbody>
        </table>
    </div>


</body>
<script src="app.js"></script>

</html>