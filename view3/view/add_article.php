<link rel="stylesheet" href="../css/add_article.css">
<link rel="stylesheet" href="../css/card.css">

<section class="p_area">
    <div class="content">

        <div class="row">
            <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
                <h2 class="t_center">新增文章</h2>

                <div class="p_form">
                    <form #form="ngForm">
                        <div class="form-group">
                            <label for="board">board</label>
                            <input type="text" name="board" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="s_order form-group">
                            <label for="br">context</label>
                            <textarea cols="30" rows="10"
                                      name="context" ></textarea>
                        </div>
                        <div class="line"></div>

                        <div class="submit_btn form-group">
                            <input type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
