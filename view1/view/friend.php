<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

        </h1>
    </section>

    <section style="padding-top: 50px">
        <div id="main">
            <div class="container">
                <?php
                if($friends != null) {?>
                <header>
                    <h2>我的朋友~</h2>
                </header>

                <div class="divider"></div>
                <?php
                foreach ($friends as $friend) {
                ?>
                <a href="index.php?page=profile&author=<?php echo $friend[1] ?>">
                    <button style="
                                    background: none repeat scroll 0 0;
                                    background-color: #E5E8E8;
                                    border: 2px solid;
                                    border-color: #E5E8E8;
                                    color: black;
                                    font-size: 13px;
                                    font-weight: 700;
                                    margin: 8px auto 15px;
                                    padding: 7px;
                                    margin-left: 40px;
                                    text-align: center;
                                    text-transform: uppercase;
                                    width: 120px;
                                    height: 40px;"><?php echo $friend[1] ?></button>
                </a>
                <?php
                    }
                }else {
                    ?>
                    <h2>沒有朋友QQ</h2>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
</div>
