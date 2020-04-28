<?php
session_start();
    $file = $_FILES['file'];
    $filename = $_FILES['file']['name']; 
    $filetype = $_FILES['file']['type'];
    
     $filename = $file['name'];
    // $filetype = $file['type'];
    // $fileerror = $file['error'];
    // $filetmp = $file['tmp_name'];

  //  echo $filetype;
    echo $filename;
    // echo $fileerror;
    // echo $filetmp;
   

    $lol = 15;

                    //  $destinationfile = 'image/'.$lol.$filename;
                    // move_uploaded_file($filetmp,$destinationfile);

                   
            ?>