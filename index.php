<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./styles.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Designer Glenn Co. | Graphics</title>

</head>
<body>
    <nav>
        <div class="pages-nav">
            <div class="brand">
                <a href="./index.html">
                    <img src="./img/Pages-DGLogo.png" alt="">
                </a>
            </div>
            <ul class="nav-links">
                <li><a class="nav-link" href="./index.html"">HOME</a></li>
                <li><a class="nav-link active" href="./graphics.html"">GRAPHICS</a></li>
            </ul>
        </div>
    </nav>
    <?php
        $dirname = "./img/websites/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            echo '<img src="'.$image.'" /><br />';
        }
    ?>
    <main>
        
    </main>
</body>
</html>