
<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="12u skel-cell-important">
                <section>
                    <header>
                        <h2><?php echo $article[0]?></h2>
                        發文者 : <?php echo $article[2]?>
                    </header>
                    <pre>
                        <?php echo $article[3]?>
                    </pre>
                    <img src="../images/thumb.png" style="float: right;">
                </section>

                <div class="divider"></div>

                <header>
                    <h2>留言區</h2>
                </header>

                <?php
                $length=floor(sizeof($messages)/6);
                for($i=0;$i<=$length;$i++) {

                    ?>
                    <!--       留言         -->
                    <div class="row">
                        <?php
                        if($i!=$length)
                        {
                            for($j=0;$j<6;$j++)
                            {
                                ?>
                                <div class="2u">
                                    <section>
                                        <p><?php echo $messages[$i*6+$j][1]?></p>
                                    </section>
                                </div>
                                <?php
                            }
                        }
                        else{
                            for($j=0;$j<sizeof($messages)%6;$j++)
                            {

                                ?>
                                <div class="2u">
                                    <section>
                                        <p><?php echo $messages[$i*6+$j][1]?></p>
                                    </section>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                    <!--       /留言         -->

                    <?php
                }
                ?>

                <br>
                <form method="post" action="../index.php">
                    <input type="text" name="title" style="display: none" value="<?php echo $article[0]?>">
                    <input type="text" name="newMessage" placeholder="留言...">
                    <button class="button" type="submit">送出留言</button>
                </form>

            </div>
            <!-- /Content -->

        </div>

    </div>
</div>
<!-- Main -->
