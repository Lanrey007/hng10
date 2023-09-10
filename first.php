<?php
header('Content-Type: application/json'); 

$slack_name=$_GET['slack_name'];
$track=$_GET['track'];

$dateTime = new DateTime('now', new DateTimeZone('Africa/Lagos')); 
$time=$dateTime->format("Y-m-d H:i:s");
$day=$dateTime->format("l");

if (isset($slack_name) && isset($track)){
   $response=array(
    'slack_name'=> $slack_name,
    'track'=> $track,
    'current_day'=> $day,
    'utc_time'=> $time,
    'github_file_url'=> 'https://github.com/Lanrey007/hng10/first.php',
    'github_repo_url'=> 'https://github.com/Lanrey007/hng10',
    'status_code'=> 200,
    );
echo json_encode($response); 
}else{
    $response=array(
    'current_day'=> $day,
    'utc_time'=> $time,
    'github_file_url'=> 'https://github.com/Lanrey007/hng10/first.php',
    'github_repo_url'=> 'https://github.com/Lanrey007/hng10',
    'status_code'=> 404,
    );
echo json_encode($response);
}


?>