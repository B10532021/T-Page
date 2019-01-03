<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="12u skel-cell-important">
                <section>
                    <form method="post" action="../index.php" id="newArticleForm">
                        <?php
                        switch ($board){case 1: echo "<input type='text' name='board' value='ECE1'>";break;
                            case 2: echo "<input type='text' name='board' value='ECE2'>";break;
                            case 3: echo "<input type='text' name='board' value='ECE3'>";break;
                            case 4: echo "<input type='text' name='board' value='ECE4'>";break;}
                        ?>

                        <input type="text" name="title" placeholder="標題" style="width: 100%;">
                        <textarea name="newArticle" placeholder="發文..." style="width: 100%;"></textarea>
                        <a href="profile.php"><button class="button" type="submit">發文</button></a>
                    </form>
                </section>
            </div>
            <!-- /Content -->

        </div>

    </div>
</div>
<!-- Main -->
