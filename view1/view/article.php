<?php
$title = '今天的月色如何?';
$name = 'me';
$content = '幹今天陰天拉';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            文章
        </h1>
    </section>

    <section style="padding-top: 50px">
        <div style="font-size: 24px">
            文章標題：<?php echo $title?>
            <br>
            發文者：<?php echo $name?>
        </div>
        <hr class="style-five"/>
        <div style="font-size: 18px">
            <?php echo $content?>
        </div>
    </section>
</div>