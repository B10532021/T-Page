<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="12u skel-cell-important">
                <section>
                    <form method="post" action="../../model/Model.php" id="newArticleForm">
                        <?php
                        switch ($board){case 1: echo "<input type='text' value='四電資一'>";break;
                            case 2: echo "<input type='text' value='四電資二'>";break;
                            case 3: echo "<input type='text' value='四電資三'>";break;
                            case 4: echo "<input type='text' value='四電資四'>";break;}
                        ?>

                        <input type="text" placeholder="標題" style="width: 100%;">
                        <textarea name="newArticle" placeholder="發文..." style="width: 100%;"></textarea>
                        <a href="profile.php"><button class="button" type="submit" >發文</button></a>
                    </form>
                </section>
            </div>
            <!-- /Content -->

        </div>

    </div>
</div>
<!-- Main -->
