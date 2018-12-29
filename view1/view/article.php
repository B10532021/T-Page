<?php
$title = '今天的月色如何?';
$name = 'me';
$content = '以下為尤振仲今天(12/28)上午的聲明稿內容

大家好，我是普悠瑪6432列車駕駛員，尤振仲。經醫生評估，我目前仍然需要靜養，還無法親自向大家道歉與說明，因此，還是先委託律師代為發言，請大家見諒。以下是本人親立的聲明內容：

一、此次普悠瑪事件攸關全體人民的安全，甚至現在仍然有許多普悠瑪列車正在行駛，你我的家人都有可能坐在上面。我是一名駕駛員，只能盡量就我的第一線駕駛的經歷作說明，但究竟列車機械設備的故障情形如何，只能仰賴專家的判斷。針對行政院調查小組的第一次跟第二次調查報告的結果，有許多與我認知不同的地方，我掙扎了很久，還是決定鼓起勇氣，在已經公開的資訊範圍內，提出以下幾點想問題與說明：

(一)當日列車過武荖坑橋後，按照該路段速限，我將電門把手放置在刻度時速82、83公里來降速。但調查報告卻指出，電門把手從我出羅東站後直至出事前，都放置在刻度時速140公里。

(二)意外發生前，我持續嘗試排除故障，最後一次復位完成後，我轉身隨即發現列車速度異常，為避免列車直接撞上月台造成更大損傷，因此，我緊急做了緊韌動作，試圖讓列車傾倒出軌。但調查報告指出，沒有任何煞車跡象。

(三)聯合報新聞網流出的行調通聯紀錄，調查報告中寫的通聯紀錄，以及我記憶中的通聯過程，存在許多重要關鍵之處有所出入，我懇請當局公布完整且不間斷的行調通聯紀錄錄音檔，以及完整的事故訪談紀錄，供社會大眾檢視事發過程、通聯狀況與訪談的原貌。

(四)我還有家庭要顧，不僅深怕錯過子女的成長，也害怕父母要白髮人送黑髮人的痛苦，我不可能拿自己和旅客生命開玩笑，我實在沒有任何需要超速而甘冒如此風險的動機。因此，我完全無法接受人為超速的認定。

二、自10月21日事發至今，對我來說，每一天都是痛苦與折磨，我知道，我的道歉無法挽回什麼，但請容許我再次對於罹難者、傷者、以及家屬們，說一聲對不起，我真的很抱歉。這次意外，是所有當日6432乘客、家屬以及我此生心中永遠無法磨滅的傷痛，我道盡事實，說明真相，承諾絕不會逃避，我懇求，本次事件的調查，千萬不能以利益高於人命的考量出發，更不能先射箭再畫靶，我由衷地希望能還原真相，未來能給社會大眾一個安全的乘車環境。

三、最後，真的很感謝罹難者家屬、乘客、社會大眾以及媒體朋友們給予我的關懷和鼓勵，謝謝大家，我會勇敢的走下去。';

$comment = '真感動'
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
            文章標題：<?php echo $title ?>
            <br>
            發文者：<?php echo $name ?>
        </div>
        <hr class="style-five"/>
        <div style="font-size: 18px">
            <?php echo $content ?>
        </div>

        <div style="padding-top: 100px">
            <h4>留言板</h4>
            <div class="box box-success" onclick="<?php change_page('../view/article') ?>">
                <div class="box-body chat" id="chat-box">
                    <div class="item">
                        <img src="../img/angel.jpg" alt="user image" class="online">
                        <p class="message">
                            <span style="font-size: 16px">
                                <?php echo $name ?>
                                <br>
                                <?php echo $comment ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <form style="padding-top: 50px" method="post" aciton="controller.php">
            <div class="product_detail_heading">
                <div class="detail_heading_left">
                    <div class="detail_heading_left">
                        <h4>留言：</h4>
                        <textarea style="border:0; background-color:#f7f8f9"
                                  placeholder="請輸入想說的話" cols="50"
                                  rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" value="留言" style="
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
        </form>
    </section>
</div>