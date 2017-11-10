<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //checking if file exist
        // if (file_exists("testfile.txt")) echo "File exists";
        
        // creating a file
        $fh = fopen("testfile.txt",'w') or die("Failed to create file");
        
        $text = <<<_END
                Line 1
                Line 2
                Line 3
_END;
                
                fwrite($fh,$text) or die ("Could not write to file");
                fclose($fh);
                echo "File 'testfile.txt' written successfully";
        ?>
    </body>
</html>
