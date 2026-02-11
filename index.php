<?php
$uploaded_file="";
if(isset($_POST['upload'])){
    $file_name=$_FILES['myfile']['name'];
    $file_tmp=$_FILES['myfile']['tmp_name'];
    $upload_path="uploads/".$file_name;
    if(move_uploaded_file($file_tmp,$upload_path)){
        $uploaded_file=$file_name;
        echo "File uploaded successfully ";
    }
    else{
        echo "File upload failed ";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<h2> Upload file </h2>
<form method="POST" enctype="multipart/form-data">
<label for="file" >Upload File </label>
<input type="file" name="myfile" id="file"><br>
<button type="submit" name="upload" > Upload </button>
</form>
</body>
</html>

<?php
if ($uploaded_file)
{
    echo "<br><a href='download.php?file=$uploaded_file'>Download File </a>";
}
?>