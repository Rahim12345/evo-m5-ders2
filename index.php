<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>qalin</b>
    <br>
    <i>kursiv yazi</i>
    <br>
    <u>underline</u>
    <hr>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel libero vel turpis semper commodo. Sed consectetur, nisi id tincidunt dictum, justo velit sagittis velit, et consectetur ipsum nisi vitae velit. Sed vel libero vel turpis semper commodo. Sed consectetur, nisi id tincidunt dictum, justo velit sagittis velit, et consectetur ipsum nisi vitae velit.
    </p>
    <!-- unordered list -->
     <?php

        $list = ['Birinci element', 'İkinci element', 'Üçüncü element','Dördüncü element', 'Beşinci element'];
     ?>
    <ul>
        <?php foreach ($list as $item) {?>
            <li><?php echo $item;?></li>
        <?php }?>
    </ul>

</body>

</html>