
<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Acess-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
$data = json_decode(file_get_contents('php://input'));
include('db.php');

error_reporting(0);
if($data->first_name == '')
{
    echo json_encode(['status'=>'failed','msg'=>'First Name Not Provided !']);
}
elseif($data->last_name == '')
{
    echo json_encode(['status'=>'failed','msg'=>'Last Name Not Provided !']);
}
elseif($data->mobile_number == '')
{
    echo json_encode(['status'=>'failed','msg'=>'Mobile Number Not Provided !']);
}
elseif($data->profile_pic == '')
{
    echo json_encode(['status'=>'failed','msg'=>'Profile Pic Not Provided !']);
}
elseif($data->gender == '')
{
    echo json_encode(['status'=>'failed','msg'=>'Gender Not Provided !']);    
}
elseif($data->education == '')
{
    echo json_encode(['status'=>'failed','msg'=>'Education Not Provided !']);    
}
else{
    $query = "INSERT INTO `details`(first_name, last_name, mobile_number, profile_pic, gender, education)";
    $query.="VALUES('$data->first_name', '$data->last_name', '$data->mobile_number', '$data->profile_pic', '$data->gender', '$data->education')";
    if($query)
    {
        echo "true";
    }
    else{
        echo "false";
    }
    $run = mysqli_query($db,$query);
    if($run)
    {
        echo json_encode(['status'=>'success','msg'=>'Details Addedd !']);
    }
    else{
        echo json_encode(['status'=>'failed','msg'=>'Details Not Addedd !']);
    }
}
?>