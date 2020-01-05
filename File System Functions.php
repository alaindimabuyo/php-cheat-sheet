<?php 

    $path = '/dir1/myfile.php';
    $file = 'file2.txt';
    //Return FIlename
    echo basename($path);

    //Return Filename without the php extension
    echo basename($path, '.php');

    //Return the dir name from path
    echo dirname($path);

    //Return file name
    echo file_exists($file);

    //Get absolute path
    echo realpath($file);

    //Check to see if there is a file
    echo is_file('test');

    //Check if writable
    echo is_writable($file);
  
    //Check if file readable
    echo is_readable($file);

    //Create a directory 
    mkdir('');

    //Remove dir if empty
    rmdir('');

    //Copy file , 2 parameters
    echo copy('file1.txt', 'file2.txt');

    //Rename file
    rename('file1.txt', 'renamedfile.txt');

    //Delete File
    //unlink('file2.txt');

    //Write from file to string
    echo file_get_contents($file);

    //Write string file to string replace
    echo file_put_contents($file, 'Sayo');

    //Write string file to append
    $current = file_get_contents($file);
    $current .= 'GOodbye World';
    file_put_contents($file, $current);


    //Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));

    echo $data;


    //Open File for Writing
    $handle = fopen('file3.txt', 'w');
    $data = 'Alain h';
    fwrite($handle, $data);
    fclose($handle);