<?php
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$url = "https://jsonplaceholder.typicode.com/posts";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$user_data = json_decode($curl_data);



$count = 1;
$output = '';
foreach ($user_data as $user) {
    // echo "name: " . $user->title;
    // echo "<br/>";
    $output .= "<tr>";
    $output .= "<td>$count</td>";
    $output .= "<td>$user->userId</td>";
    $output .= "<td>$user->id</td>";
    $output .= "<td>$user->title</td>";
    $output .= "<td>$user->body</td>";


    $output .= "</tr>";
    $count++;
}
echo $output;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>