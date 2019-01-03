<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../img/profile.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><a href="index.php?page=profile"><?php echo $user[0]?></a></p>
                <div style=" color: yellow"><?php echo $user[9]?><img src="../img/money.png" style="padding-left: 5px;" width="20%"></div>
            </div>
        </div>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--                <span class="input-group-btn">-->
<!--              <button type="submit" name="search" id="search-btn" class="btn btn-flat">-->
<!--                <i class="fa fa-search"></i>-->
<!--              </button>-->
<!--            </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="index.php?page=articles&board=1"><i class="fa fa-table"></i> <span>四電資一</span></a>
                <a href="index.php?page=articles&board=2"><i class="fa fa-table"></i> <span>四電資二</span></a>
                <a href="index.php?page=articles&board=3"><i class="fa fa-table"></i> <span>四電資三</span></a>
                <a href="index.php?page=articles&board=4"><i class="fa fa-table"></i> <span>四電資四</span></a>
                <a href="index.php?page=card"><i class="fa fa-table"></i> <span>抽卡友</span></a>
                <a href="index.php?page=joinFamily"><i class="fa fa-table"></i> <span>加入家族</span></a>
            </li>
            <!--            {{--TODO: multilevel example, remove before demo--}}-->


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>