<?php


function writeToFile($message){
//Open the file in 'a' mode
$file = fopen ("example.txt", "a");

// chechk if the file was successfully opened 
if ($file){
    // Write the message to the file
    fwrite($file,$message.PHP_EOL);

    // close the file

    fclose ($file);
    echo "Message written to the file sucesfully! <br/>";

} else{
    echo "Failed to open the file for writting!!! <br/>";
}
}

// 2. read from a file using 'fopen','fread','feof' and 'fclose'

function readFromFile(){
   $file =  fopen("example.txt", "r"); 
}

if ($file){
    echo "<strong>content of the example.txt</strong><br>";

    while (!foef($file)) {
        $line = fgets($file);
        echo $line."<br/>";
    }

    fclose ($file);
}else{
    echo "Failed to open the file for reading!!! <br/>";
  
}
    
function quickWrite($message){
    file_put_contents('example.txt',$message.PHP_EOL);
    echo "Message written to file using file_put_contest!<br/>";
}
quickWrite("  This is sample log messag");
writeToFile(" This is overwrite everything with a new message");
readFromFile();




?>