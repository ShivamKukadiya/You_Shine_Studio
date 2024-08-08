<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "youshine_photo";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    // $posts[0] = $_POST['id'];
    $posts[0] = $_POST['name'];
    $posts[1] = $_POST['email'];
    $posts[2] = $_POST['message'];
    return $posts;
}
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `contact`(`name`, `email`,`message`) VALUES ('$data[0]','$data[1]',$data[2])";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                // echo '<h1>Data Inserted Success..</h1>';
                alert("Data Success");
            }else{
                // echo '<h1>Data Not Inserted</h1>';
                alert("Data not insert");
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}