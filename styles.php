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
    line-height: 0;
   -webkit-column-count: 5;
   -webkit-column-gap:   0px;
   -moz-column-count:    5;
   -moz-column-gap:      0px;
   column-count:         5;
   column-gap:           5px;
   margin:5px 0;
}
.gallery img{
    width: 100% !important;
    height: auto !important;
}


@media (max-width: 1200px) {
  .gallery {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  .gallery {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  .gallery {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  .gallery {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}