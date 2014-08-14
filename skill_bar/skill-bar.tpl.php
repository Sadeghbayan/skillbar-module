<?php $path = drupal_get_path('module', 'skill_bar'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Diagrams</title>

</head>
<body>
<div id="content">
    <div class="legend">
        <h1> : لیست مهارت ها </h1>
        <div class="skills">
            <ul>
                <li class="jq">JavaScript</li>
                <li class="css">CSS3</li>
                <li class="html">HTML5</li>
                <li class="php">PHP</li>
                <li class="sql">MySQL</li>
            </ul>
        </div>
    </div>
    <div id="diagram"></div>
</div>


<div class="get">
    <div class="arc">
        <span class="text">JavaScript</span>
        <input type="hidden" class="percent" value="<?php echo $javascript;?>" />
        <input type="hidden" class="color" value="#97BE0D" />
    </div>
    <div class="arc">
        <span class="text">CSS3</span>
        <input type="hidden" class="percent" value="<?php echo $css3;?>" />
        <input type="hidden" class="color" value="#D84F5F" />
    </div>
    <div class="arc">
        <span class="text">HTML5</span>
        <input type="hidden" class="percent" value="<?php echo $html5;?>" />
        <input type="hidden" class="color" value="#88B8E6" />
    </div>
    <div class="arc">
        <span class="text">PHP</span>
        <input type="hidden" class="percent" value="<?php echo $php;?>" />
        <input type="hidden" class="color" value="#BEDBE9" />
    </div>
    <div class="arc">
        <span class="text">MySQL</span>
        <input type="hidden" class="percent" value="<?php echo $mysql;?>" />
        <input type="hidden" class="color" value="#ddd" />
    </div>
</div>
</body>

</html>
