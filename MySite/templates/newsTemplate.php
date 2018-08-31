<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($news->getRecords() as $new) {?>
    <article style="border: dashed darkgreen; padding: 5px; margin-bottom: 10px" >
        <h3><?php echo $new->getName()?></h3>
        <hr>
        <?php echo $new->getTopic()?>
        <hr>
        <a href="http://localhost/Mysite/article.php?id=<?php echo $new->getCount()?>">Читать полностью</a>
    </article>
<?php }?>
</body>
</html>