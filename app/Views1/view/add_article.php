<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            新增文章
        </h1>
    </section>

    <section>
        <form method="post" action="model.php" id="newArticleForm" style="margin-left: 100px">
            <div>
                <h4>文章標題：</h4>
                <input name="newTitle" type="text" placeholder="請輸入文章標題">
            </div>
            <div>
                <span style="font-size: 18px;">文章看板：</span>
                <span name="board" style="font-size: 18px;">
                    <?php switch ($board){
                        case 1: echo "四電資一";break;
                        case 2: echo "四電資二";break;
                        case 3: echo "四電資三";break;
                        case 4: echo "四電資四";break;}
                    ?>
                </span>
            </div>
            <div>
                <h4>文章內容：</h4>
                <textarea name="newArticle" placeholder="發文..." cols="100"
                          rows="30" ></textarea>
                <div>
                    <input type="submit" value="新增文章" style="
                    background: none repeat scroll 0 0;
                    background-color: #2975d8;
                    border: 2px solid;
                    border-color: #2975d8;
                    color: #fff;
                    font-size: 13px;
                    font-weight: 700;
                    margin: 8px auto 15px;
                    padding: 7px;
                    margin-left: 200px;
                    text-align: center;
                    text-transform: uppercase;
                    width: 120px;
                    height: 40px;">
                </div>
            </div>

        </form>
    </section>
</div>