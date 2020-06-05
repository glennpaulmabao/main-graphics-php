<?php
    header('Content-type: text/css;')
?>
*,
*::before,
*::after{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    image-resolution: 42dpi;
}

body{
    font-family: 'Poppins', sans-serif;
    color: white;
    background-color:black;
}
.gallery{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-column-gap: 10px;
    grid-row-gap: 10px;
}
.gallery img{
    width: 100%;
}