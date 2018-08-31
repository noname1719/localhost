<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $newsNumber = $_GET['id'];
    foreach ($news->getRecords() as $new){
        if($new->getCount() == $newsNumber){
            echo $new->getName();
            echo '<br>';
            echo $new->getMessage();
    }
}?>
</body>
</html>