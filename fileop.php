<?php 
/*$file=fopen('data1.txt','r');
if (file_exists('data1.txt')){
    echo "file Exists<br>";
}
$data=fread($file,filesize('data1.txt'));
echo $data;
fclose($file);

$file=fopen('data1.txt','w');
fwrite($file,"This is new data appended");
echo "<br>".file_get_contents('data1.txt');
fclose($file);

$file=fopen('data1.txt','w');
file_put_contents('data1.txt',"This is another new  data written");
file_put_contents('data1.txt',"Prasanna Nuvvu OUT ",FILE_APPEND);
$lines=file('data1.txt');//reads into array
echo "using files<br>";
print_r($lines);
echo "<br>File Size:".filesize('data1.txt');
echo "<br>File TYPE:".filetype('data1.txt');
echo "<br>File access time ".date("Y-m-d H:i:s", fileatime('data1.txt'));
echo "<br>File modification time ".date("Y-m-d H:i:s", filemtime('data1.txt'));
echo "<br>File creation time ".date("Y-m-d H:i:s", filectime('data1.txt'));
echo "<br>".substr(sprintf('%o',fileperms('data1.txt')),-4);

echo "<br> File Owner".fileowner("data1.txt");
echo "<br> File Group".filegroup("data1.txt");
echo "<br> File Inode".fileinode("data1.txt");
copy("data1.txt","data2.txt");
rename("data2.txt","newlyrenamed.txt");
#unlink("newlyrenamed.txt");
#mkdir("newfolder-2");
if(is_file("data1.txt")){
    echo "<br> data1.txt is a file";
}
if(is_dir("newfolder-1")){
    echo "<br> newfolder-1 is a directory";
}
$files=scandir(".");
print_r($files);
$dir=opendir(".");
while(($file=readdir($dir))!==false){
    echo "<br>".$file;
}
closedir($dir);
echo "current working directory:".getcwd();
#chdir("..");
#echo "<br>current working directory:".getcwd();
#fclose($file);
echo "<h3> Files in current directory</h3>";
$files=scandir(".");
foreach($files as $file)
{
echo "<br>HIIIII".$file;
}*/
/*$file=fopen("data1.txt","r");
if($file){
    $data=fread($file,filesize("data1.txt"));
    #fwrite($file,"HI HELLO NAMASTHE");
    echo $data;
}
fclose($file);
$file=fopen("data1.txt","w");
fwrite($file,"HI HELLO NAMASTHE");
#$data=fread($file,filesize("data1.txt"));
fclose($file);*/
/*$file=fopen("data1.txt","r+");
$data=fread($file,filesize("data1.txt"));
echo $data;
fwrite($file,"HI HELLO NAMASTHE");
fclose($file);
$file=fopen("data1.txt","w+");
fwrite($file,"HI HELLO NAMASTHE");
$data=fread($file,filesize("data1.txt"));
echo $data;
fclose($file);*/
/*$file=fopen("data1.txt","a");
fwrite($file,"Data appended ");
$data=fread($file,filesize("data1.txt"));
echo $data;
fclose($file);
$file=fopen("data1.txt","a+");
fwrite($file,"OOOOOOOOOOOOOOOO");
$data=fread($file,filesize("data1.txt"));
echo $data;
fclose($file);*/
/*$file=fopen("data3.txt","x+");
fwrite($file,"data 3 ");
$data=fread($file,filesize("data3.txt"));
echo $data;
fclose($file);*/
$file=fopen("data4.txt","x");
fwrite($file,"data 4 ");
$data=fread($file,filesize("data4.txt"));
echo $data;
fclose($file);
?>