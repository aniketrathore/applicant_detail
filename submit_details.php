<?php
$name=$_POST['name'];
$qualification=$_POST['qualification'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];
$linkedin=$_POST['linkedin_add'];
$profile=$_POST['profile_add'];
$file=$_FILES['resume']['type'];
$file_upload=$_FILES['resume']['name'];
if(!empty($name) && !empty($qualification) && !empty($dob) && !empty($address) && !empty($contact_no) && !empty($email) &&
   !empty($linkedin) && !empty($profile) && !empty($file_upload))
    {
    if(!($file=="application/pdf"))
    {
    echo "<script type='text/javascript'>alert('Please Select PDF File For Resume.');window.location='index.php';</script>";
    
    }
        $con= mysqli_connect("localhost", "root", "", "applicant_info");
        if(!$con)
        {
            echo 'Error Connecting';
            die('Could not connect'.mysqli_connect_error());
        }
        $query="INSERT INTO applicant_details VALUES('$name','$qualification','$dob','$address','$contact_no','$email','$linkedin','$profile','$file_upload')";
        if(mysqli_query($con, $query))
        {
            echo "<script type='text/javascript'>alert('Details have been added successfully.');window.location='index.php';</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Error In Submitting.');window.location='index.php';</script>";
        }
    }
    else
    {
       echo "<script type='text/javascript'>alert('Please Enter All Details.');window.location='index.php';</script>";
    }
?>