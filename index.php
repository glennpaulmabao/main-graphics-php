<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./styles.php">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Designer Glenn Co. | Graphics</title>

</head>
<body>
    <div class="gallery">
    <?php
        $dirname = "./img/";
        $images = glob($dirname."*.*");

        foreach($images as $image) {
            echo '<img src="'.$image.'" />';
        }
    ?>
    </div>

    <div class="gallery">
    <?php
        $files = glob("./img/*.*");
        for ($i=1; $i<count($files); $i++)
        {
        $num = $files[$i];
        	print $num."<br />";
        echo '<img src="'.$num.'" alt="random image" />'."<br /><br />";
        }
    ?>
    </div>
</body>
</html>