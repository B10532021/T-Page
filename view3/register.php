<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]>
<html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIMIS | Category Page</title>

    <!-- fonts files -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,400italic,600,600italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- bx-slider css -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">

    <!-- bootstrap select css -->
    <link rel="stylesheet" href="css/bootstrap-select.min.css">

    <!-- lightbox css -->
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Revolution slider css -->
    <link href="js/rs-plugin/css/settings.css" rel="stylesheet"/>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="register.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Shakhawat H. from codingcouples.com -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="p_area">
    <div class="content">
        <div class="row">
            <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
                <h3 class="register-header">註冊</h3>

                <form (ngSubmit)="form.form.valid && onSubmit(form)" #form="ngForm">
                    <div
                            class="form-group"
                            [ngClass]="{ invalid: form.submitted && name.invalid }"
                    >
                        <label>姓名 *</label>
                        <input
                                type="text"
                                [(ngModel)]="model.name"
                                name="name"
                                #name="ngModel"
                                required
                        />
                        <div
                                *ngIf="form.submitted && name.invalid"
                                class="invalid_feedback"
                        >
                            必須欄位
                        </div>
                    </div>
                    <div
                            class="form-group"
                            [ngClass]="{ invalid: form.submitted && email.invalid }"
                    >
                        <label>信箱 *</label>
                        <input
                                type="text"
                                [(ngModel)]="model.email"
                                name="email"
                                #email="ngModel"
                                required
                                email
                        />
                        <div
                                *ngIf="form.submitted && email.invalid"
                                class="invalid_feedback"
                        >
                            必須欄位
                        </div>
                    </div>
                    <div
                            class="form-group"
                            [ngClass]="{ invalid: form.submitted && phone.invalid }"
                    >
                        <label>手機號碼 </label>
                        <input
                                type="text"
                                [(ngModel)]="model.phone"
                                name="phone"
                                #phone="ngModel"
                        />
                    </div>
                    <div
                            class="form-group"
                            [ngClass]="{ invalid: form.submitted && password.invalid }"
                    >
                        <label>密碼(至少六碼) *</label>
                        <input
                                type="password"
                                [(ngModel)]="model.password"
                                name="password"
                                #password="ngModel"
                                required
                        />
                        <div
                                *ngIf="form.submitted && password.invalid"
                                class="invalid_feedback"
                        >
                            必須欄位
                        </div>
                    </div>
                    <div
                            class="form-group"
                            [ngClass]="{ invalid: form.submitted && password_confirm.invalid }"
                    >
                        <label>確認密碼 *</label>
                        <input
                                type="password"
                                [(ngModel)]="model.password_confirm"
                                name="password_confirm"
                                #password_confirm="ngModel"
                                required
                        />
                        <div
                                *ngIf="password.value !== password_confirm.value"
                                class="invalid_feedback"
                        >
                            密碼不一致
                        </div>
                    </div>

                    <div class="form-check">
                        <label>
                            <input
                                    type="checkbox"
                                    [(ngModel)]="model.check"
                                    name="check"
                                    #check="ngModel"
                                    required
                            />
                        </label>
                        我已詳閱並同意
                        <u
                                data-toggle="modal"
                                data-target="#exampleModalLong"
                                style="cursor:pointer"
                        >
                            使用者條款
                        </u>

                        <!-- Modal -->
                        <div
                                class="modal fade"
                                id="exampleModalLong"
                                tabindex="-1"
                                role="dialog"
                                aria-labelledby="exampleModalLongTitle"
                                aria-hidden="true"
                        >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                            使用者條款
                                        </h5>
                                        <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                        >
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div
                                                id="doc"
                                                class="markdown-body container-fluid comment-enabled"
                                                style="position: relative;"
                                        >
                                            <p>
                                                非常歡迎您光臨「口責口責木不」（以下簡稱本網站），為了讓您能夠安心的使用本網站的各項服務與資訊，特此向您說明本網站的隱私權保護政策，以保障您的權益，請您詳閱下列內容：
                                            </p>
                                            <h3 id="一、隱私權保護政策的適用範圍">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#一、隱私權保護政策的適用範圍"
                                                        title="一、隱私權保護政策的適用範圍"
                                                ><span class="octicon octicon-link"></span></a
                                                >一、隱私權保護政策的適用範圍
                                            </h3>
                                            <p>
                                                隱私權保護政策內容，包括本網站如何處理在您使用網站服務時收集到的個人識別資料。隱私權保護政策不適用於本網站以外的相關連結網站，也不適用於非本網站所委託或參與管理的人員。
                                            </p>
                                            <h3 id="二、個人資料的蒐集、處理及利用方式">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#二、個人資料的蒐集、處理及利用方式"
                                                        title="二、個人資料的蒐集、處理及利用方式"
                                                ><span class="octicon octicon-link"></span></a
                                                >二、個人資料的蒐集、處理及利用方式
                                            </h3>
                                            <ul>
                                                <li>
                                                    當您造訪本網站或使用本網站所提供之功能服務時，我們將視該服務功能性質，請您提供必要的個人資料，並在該特定目的範圍內處理及利用您的個人資料；非經您書面同意，本網站不會將個人資料用於其他用途。
                                                </li>
                                                <li>
                                                    本網站在您使用服務信箱、問卷調查等互動性功能時，會保留您所提供的姓名、電子郵件地址、聯絡方式及使用時間等。
                                                </li>
                                                <li>
                                                    於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，決不對外公佈。
                                                </li>
                                                <li>
                                                    為提供精確的服務，我們會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研究外，我們會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。
                                                </li>
                                            </ul>
                                            <h3 id="三、資料之保護">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#三、資料之保護"
                                                        title="三、資料之保護"
                                                ><span class="octicon octicon-link"></span></a
                                                >三、資料之保護
                                            </h3>
                                            <ul>
                                                <li>
                                                    本網站主機均設有防火牆、防毒系統等相關的各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，相關處理人員皆簽有保密合約，如有違反保密義務者，將會受到相關的法律處分。
                                                </li>
                                                <li>
                                                    如因業務需要有必要委託其他單位提供服務時，本網站亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其將確實遵守。
                                                </li>
                                            </ul>
                                            <h3 id="四、網站對外的相關連結">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#四、網站對外的相關連結"
                                                        title="四、網站對外的相關連結"
                                                ><span class="octicon octicon-link"></span></a
                                                >四、網站對外的相關連結
                                            </h3>
                                            <p>
                                                本網站的網頁提供其他網站的網路連結，您也可經由本網站所提供的連結，點選進入其他網站。但該連結網站不適用本網站的隱私權保護政策，您必須參考該連結網站中的隱私權保護政策。
                                            </p>
                                            <h3 id="五、與第三人共用個人資料之政策">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#五、與第三人共用個人資料之政策"
                                                        title="五、與第三人共用個人資料之政策"
                                                ><span class="octicon octicon-link"></span></a
                                                >五、與第三人共用個人資料之政策
                                            </h3>
                                            <p>
                                                本網站絕不會提供、交換、出租或出售任何您的個人資料給其他個人、團體、私人企業或公務機關，但有法律依據或合約義務者，不在此限。
                                            </p>
                                            <p>前項但書之情形包括不限於：</p>
                                            <ul>
                                                <li>經由您書面同意。</li>
                                                <li>法律明文規定。</li>
                                                <li>為免除您生命、身體、自由或財產上之危險。</li>
                                                <li>
                                                    與公務機關或學術研究機構合作，基於公共利益為統計或學術研究而有必要，且資料經過提供者處理或蒐集者依其揭露方式無從識別特定之當事人。
                                                </li>
                                                <li>
                                                    當您在網站的行為，違反服務條款或可能損害或妨礙網站與其他使用者權益或導致任何人遭受損害時，經網站管理單位研析揭露您的個人資料是為了辨識、聯絡或採取法律行動所必要者。
                                                </li>
                                                <li>有利於您的權益。</li>
                                                <li>
                                                    本網站委託廠商協助蒐集、處理或利用您的個人資料時，將對委外廠商或個人善盡監督管理之責。
                                                </li>
                                            </ul>
                                            <h3 id="六、Cookie之使用">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#六、Cookie之使用"
                                                        title="六、Cookie之使用"
                                                ><span class="octicon octicon-link"></span></a
                                                >六、Cookie之使用
                                            </h3>
                                            <p>
                                                為了提供您最佳的服務，本網站會在您的電腦中放置並取用我們的Cookie，若您不願接受Cookie的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕Cookie的寫入，但可能會導至網站某些功能無法正常執行
                                                。
                                            </p>
                                            <h3 id="七、隱私權保護政策之修正">
                                                <a
                                                        class="anchor hidden-xs"
                                                        href="#七、隱私權保護政策之修正"
                                                        title="七、隱私權保護政策之修正"
                                                ><span class="octicon octicon-link"></span></a
                                                >七、隱私權保護政策之修正
                                            </h3>
                                            <p>
                                                本網站隱私權保護政策將因應需求隨時進行修正，修正後的條款將刊登於網站上。
                                            </p>
                                        </div>
                                        <div
                                                class="ui-toc dropup unselectable hidden-print"
                                                style="display:none;"
                                        >
                                            <div class="pull-right dropdown">
                                                <a
                                                        id="tocLabel"
                                                        class="ui-toc-label btn btn-default"
                                                        data-toggle="dropdown"
                                                        href="#"
                                                        role="button"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        title="Table of content"
                                                >
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <ul
                                                        id="ui-toc"
                                                        class="ui-toc-dropdown dropdown-menu"
                                                        aria-labelledby="tocLabel"
                                                >
                                                    <div class="toc">
                                                        <ul class="nav">
                                                            <li>
                                                                <a
                                                                        href="#一、隱私權保護政策的適用範圍"
                                                                        title="一、隱私權保護政策的適用範圍"
                                                                >一、隱私權保護政策的適用範圍</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                        href="#二、個人資料的蒐集、處理及利用方式"
                                                                        title="二、個人資料的蒐集、處理及利用方式"
                                                                >二、個人資料的蒐集、處理及利用方式</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a href="#三、資料之保護" title="三、資料之保護"
                                                                >三、資料之保護</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                        href="#四、網站對外的相關連結"
                                                                        title="四、網站對外的相關連結"
                                                                >四、網站對外的相關連結</a
                                                                >
                                                            </li>
                                                            <li class="">
                                                                <a
                                                                        href="#五、與第三人共用個人資料之政策"
                                                                        title="五、與第三人共用個人資料之政策"
                                                                >五、與第三人共用個人資料之政策</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                        href="#六、Cookie之使用"
                                                                        title="六、Cookie之使用"
                                                                >六、Cookie之使用</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                        href="#七、隱私權保護政策之修正"
                                                                        title="七、隱私權保護政策之修正"
                                                                >七、隱私權保護政策之修正</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="toc-menu">
                                                        <a class="expand-toggle" href="#">Expand all</a
                                                        ><a class="back-to-top" href="#">Back to top</a
                                                        ><a class="go-to-bottom" href="#">Go to bottom</a>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div
                                                id="ui-toc-affix"
                                                class="ui-affix-toc ui-toc-dropdown unselectable hidden-print"
                                                data-spy="affix"
                                                style="top:17px;display:none;"
                                        >
                                            <div class="toc">
                                                <ul class="nav">
                                                    <li>
                                                        <a
                                                                href="#一、隱私權保護政策的適用範圍"
                                                                title="一、隱私權保護政策的適用範圍"
                                                        >一、隱私權保護政策的適用範圍</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                                href="#二、個人資料的蒐集、處理及利用方式"
                                                                title="二、個人資料的蒐集、處理及利用方式"
                                                        >二、個人資料的蒐集、處理及利用方式</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="#三、資料之保護" title="三、資料之保護"
                                                        >三、資料之保護</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                                href="#四、網站對外的相關連結"
                                                                title="四、網站對外的相關連結"
                                                        >四、網站對外的相關連結</a
                                                        >
                                                    </li>
                                                    <li class="">
                                                        <a
                                                                href="#五、與第三人共用個人資料之政策"
                                                                title="五、與第三人共用個人資料之政策"
                                                        >五、與第三人共用個人資料之政策</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="#六、Cookie之使用" title="六、Cookie之使用"
                                                        >六、Cookie之使用</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                                href="#七、隱私權保護政策之修正"
                                                                title="七、隱私權保護政策之修正"
                                                        >七、隱私權保護政策之修正</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="toc-menu">
                                                <a class="expand-toggle" href="#">Expand all</a
                                                ><a class="back-to-top" href="#">Back to top</a
                                                ><a class="go-to-bottom" href="#">Go to bottom</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                                *ngIf="form.submitted && check.invalid"
                                class="invalid_feedback"
                        >
                            必須欄位
                        </div>
                    </div>
                    <re-captcha
                            [(ngModel)]="model.captcha"
                            name="captcha"
                            required
                            #captchaControl="ngModel"
                    ></re-captcha>
                    <div class="submit_btn form-group">
                        <input type="submit" value="註冊"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>