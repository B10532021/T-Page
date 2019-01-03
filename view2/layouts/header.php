<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Monochromed by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <!--[if lte IE 8]><script src="../js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-panels.min.js"></script>
    <script src="../js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="../css/skel-noscript.css" />
        <link rel="stylesheet" href="../css/style.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="../css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../css/ie/v9.css" /><![endif]-->


<!--    ajax    -->
    <script type="text/javascript" language="javascript" src="jquery.js"></script>
    <script type="text/javascript" language="javascript">
        function logout() {
            $.ajax({
                url:"index.php", 			//the page containing php script
                type: "POST", 				//request type
                data:{action: "logout"},
                success:function(){
                    alert("已登出")
                }
            });
        }

        function addCardFriend($myName,$friendName) {
            $.ajax({
                url:"index.php", 			//the page containing php script
                type: "POST", 				//request type
                data:{action: "addCardFriend",myName:$myName,friendName:$friendName},
                success:function(){
                    alert("已送出交友邀請");
                }
            });
        }

    </script>
    <!--    ajax    -->



</head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <div id="logo">
            <h1><a href="#">T-Page</a></h1>
        </div>
        <?php
        if(isset($_SESSION['user']))
        {
            $_SESSION['user'] = $model->searchUser($_SESSION['user'][0])[0];
        }
        ?>


        <nav id="nav">
            <ul>
                <li><a href="../index.php?page=articles&board=1">四電資一</a></li>
                <li><a href="../index.php?page=articles&board=2">四電資二</a></li>
                <li><a href="../index.php?page=articles&board=3">四電資三</a></li>
                <li><a href="../index.php?page=articles&board=4">四電資四</a></li>
                <?php
                if(!isset($_SESSION['user'])) {
                    ?>
                    <li><a href="../index.php?page=register">註冊</a></li>
                    <li><a href="../index.php?page=login">登入</a></li>
                    <?php
                }
                else {
                    ?>
                    <li><a href="../index.php?page=card">抽卡</a></li>
                    <li><a href="../index.php?page=profile">個人頁面</a></li>
                    <?php
                    if($_SESSION['user'][8])
                    {
                    ?>
                    <li><a href="../index.php?page=family">家族</a></li>
                    <?php
                    }
                    else
                    {
                    ?>
                        <li><a href="../index.php?page=joinFamily">加入家族</a></li>
                        <?php
                    }
                        ?>
                    <li><a href="../index.php?page=login" onclick="logout()">登出</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->
