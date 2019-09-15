<?php

if (isset($_POST['title']) && isset($_POST['descripcion'])){
    echo "<h1>".$_POST['title']."</h1>";
    echo "<h2>".$_POST['descripcion']."</h2>";
}