<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $title = trim($_POST["title"]);
    $company = trim($_POST["company"]);
    $expiry = trim($_POST["expiry"]);
    $place = trim($_POST["location"]);
    $category = trim($_POST["category"]);
    $details = trim($_POST["details"]);
    $link = trim($_POST["url"]);

    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into jobs (company_logo, date_uploaded,jobtitle, company, place, category,job_details, link,expiry_date) VALUES ('".$fileName."', NOW(),'".$title."','".$company."','".$place."','".$category."','".$details."','".$link."','".$expiry."')");
            if($insert){
                $statusMsg = "The job  has been uploaded successfully.";
            }else{
                $statusMsg = "Job upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading the Job.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>