<?php
    //  include() = Copies the content of a file (php/hrtml/text)
    //              and includes it in your php file.
    //              Sections of our website become reusable
    //              Changes only need to be made in one place
 
    include("Lesson-19-includes()-header.html");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page<br>
    Stuff about your home page can go here<br>
</body>
</html>

<?php
    include("Lesson-19-includes()-footer.html");

?>