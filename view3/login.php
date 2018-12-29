<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIMIS | Category Page</title>

    <!-- fonts files -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


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
    <link href="js/rs-plugin/css/settings.css" rel="stylesheet" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="login.css">

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
<div id="testContent">
    <div class="clear"></div>

    <section id="main" class="login entire_width">
        <div class="container_12">
            <div id="content">
                <div class="grid_12 loginTitle">
                    <h1 class="page_title ">登入或註冊帳號</h1>
                </div>
                <!-- .grid_12 -->
            </div>
            <!-- #content -->
            <div class="clear"></div>

            <div id="block">
                <div class=" new_customers createAccountBlock">
                    <h2>新會員</h2>
                    <p>
                        註冊帳號您將能夠贊助募資團隊，或是發起一場募資。
                    </p>
                    <div class="clear"></div>
                    <button
                        class="account"
                        [routerLink]="['/', 'register']"
                        routerLinkActive="active"
                    >
                        註冊一個帳號
                    </button>
                </div>
                <!-- .grid_6 -->

                <div class="grid_6 registedBlock">
                    <form class="registed" #form="ngForm">
                        <h2>已註冊會員</h2>

                        <p>如果您已經有帳號了，請登入</p>

                        <div class="email">
                            <strong>email :</strong
                            ><sup class="surely">*</sup><br />
                            <input
                                type="email"
                                [(ngModel)]="user.email"
                                #f1="ngModel"
                                name="email"
                                placeholder="E-mail"
                                required
                            />
                        </div>
                        <!-- .email -->

                        <div class="password">
                            <strong>password :</strong
                            ><sup class="surely">*</sup><br />
                            <input
                                type="password"
                                [(ngModel)]="user.password"
                                #f2="ngModel"
                                name="password"
                                placeholder="密碼"
                                required
                            />
                            <a
                                class="forgot"
                                href="#"
                                [routerLink]="['/', 'retrievePassword']"
                                routerLinkActive="active"
                            >
                                忘記密碼?</a
                            >
                        </div>
                        <!-- .password -->

                        <div class="remember">
                            <input
                                class="niceCheck"
                                type="checkbox"
                                name="Remember_password"
                                [(ngModel)]="user.remember"
                            />
                            <span class="rem">記得密碼</span>
                        </div>
                        <!-- .remember -->

                        <div class="submit">
                            <input (click)="login(user)" type="submit" value="登入" />
                            <sup class="surely">*</sup
                            ><span>必須欄位</span>
                        </div>
                        <!-- .submit -->
                    </form>
                    <!-- .registed -->
                </div>
                <!-- .grid_6 -->
            </div>

            <div class="clear"></div>
        </div>
        <!-- .container_12 -->
    </section>
    <!-- #main -->
</div>
</body>

</html>