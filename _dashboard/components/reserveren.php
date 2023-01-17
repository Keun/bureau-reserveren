<head>
    <style>
        @media (max-width:991px) {
    .form-group textarea {
        padding-top: 15px
    }

    .nav-open .menu-on-left .main-panel {
        position: static
    }

    body,
    html {
        overflow-x: hidden
    }

    .nav-open .menu-on-left .main-panel,
    .nav-open .menu-on-left .navbar-fixed>div,
    .nav-open .menu-on-left .wrapper-full-page {
        transform: translate3d(260px, 0, 0)
    }

    .menu-on-left .off-canvas-sidebar,
    .menu-on-left .sidebar {
        left: 0;
        right: auto;
        transform: translate3d(-260px, 0, 0)
    }

    .menu-on-left .close-layer {
        left: auto;
        right: 0
    }

    .timeline:before,
    .timeline>li>.timeline-badge {
        left: 5%
    }

    .timeline>li>.timeline-panel {
        float: right;
        width: 86%
    }

    .timeline>li>.timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto
    }

    .timeline>li>.timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto
    }

    .nav-mobile-menu .dropdown .dropdown-menu {
        display: none;
        position: static !important;
        background-color: transparent;
        width: auto;
        float: none;
        box-shadow: none
    }

    .nav-mobile-menu .dropdown .dropdown-menu.showing {
        animation: initial;
        animation-duration: 0s
    }

    .nav-mobile-menu .dropdown .dropdown-menu.hiding {
        transform: none;
        opacity: 1
    }

    .nav-mobile-menu .dropdown.show .dropdown-menu {
        display: block
    }

    .nav-mobile-menu li.active>a {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .navbar-minimize {
        display: none
    }

    .card .form-horizontal .label-on-left,
    .card .form-horizontal .label-on-right {
        padding-left: 15px;
        padding-top: 8px
    }

    .card .form-horizontal .form-group {
        margin-top: 0
    }

    .card .form-horizontal .checkbox-radios {
        padding-bottom: 15px
    }

    .card .form-horizontal .checkbox-inline,
    .card .form-horizontal .checkbox-radios .checkbox:first-child,
    .card .form-horizontal .checkbox-radios .radio:first-child {
        margin-top: 0
    }

    .sidebar {
        display: none;
        box-shadow: none
    }

    .sidebar .sidebar-wrapper {
        padding-bottom: 60px
    }

    .sidebar .nav-mobile-menu {
        margin-top: 0
    }

    .sidebar .nav-mobile-menu .notification {
        float: left;
        line-height: 30px;
        margin-right: 8px
    }

    .sidebar .nav-mobile-menu .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        box-shadow: none
    }

    .main-panel {
        width: 100%
    }

    .navbar-transparent {
        padding-top: 15px;
        background-color: rgba(0, 0, 0, .45)
    }

    body {
        position: relative
    }

    .nav-open .main-panel,
    .nav-open .navbar .container,
    .nav-open .navbar .container .navbar-toggler,
    .nav-open .navbar .container .navbar-wrapper,
    .nav-open .wrapper-full-page {
        left: 0;
        transform: translate3d(-260px, 0, 0)
    }

    .nav-open .sidebar {
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
    }

    .nav-open .off-canvas-sidebar .navbar-collapse,
    .nav-open .sidebar {
        transform: translateZ(0)
    }

    .navbar .container,
    .navbar .container .navbar-toggler,
    .navbar .container .navbar-wrapper,
    .wrapper-full-page {
        transform: translateZ(0);
        transition: all .33s cubic-bezier(.685, .0473, .346, 1);
        left: 0
    }

    .off-canvas-sidebar .navbar .container {
        transform: none
    }

    .main-panel,
    .navbar-collapse {
        transition: all .33s cubic-bezier(.685, .0473, .346, 1)
    }

    .navbar .navbar-collapse.collapse,
    .navbar .navbar-collapse.collapse.in,
    .navbar .navbar-collapse.collapsing {
        display: none !important
    }

    .off-canvas-sidebar .navbar .navbar-collapse.collapse,
    .off-canvas-sidebar .navbar .navbar-collapse.collapse.in,
    .off-canvas-sidebar .navbar .navbar-collapse.collapsing {
        display: block !important
    }

    .navbar-nav>li {
        float: none;
        position: relative;
        display: block
    }

    .off-canvas-sidebar nav .navbar-collapse {
        margin: 0
    }

    .off-canvas-sidebar nav .navbar-collapse>ul {
        margin-top: 19px
    }

    .off-canvas-sidebar nav .navbar-collapse,
    .sidebar {
        position: fixed;
        display: block;
        top: 0;
        height: 100vh;
        width: 260px;
        right: 0;
        left: auto;
        z-index: 1032;
        visibility: visible;
        background-color: #9a9a9a;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        padding-right: 0;
        padding-left: 0;
        transform: translate3d(260px, 0, 0);
        transition: all .33s cubic-bezier(.685, .0473, .346, 1)
    }

    .off-canvas-sidebar nav .navbar-collapse>ul,
    .sidebar>ul {
        position: relative;
        z-index: 4;
        width: 100%
    }

    .off-canvas-sidebar nav .navbar-collapse:before,
    .sidebar:before {
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background-color: #282828;
        display: block;
        content: "";
        z-index: 1
    }

    .off-canvas-sidebar nav .navbar-collapse .logo,
    .sidebar .logo {
        position: relative;
        z-index: 4
    }

    .off-canvas-sidebar nav .navbar-collapse .navbar-form,
    .sidebar .navbar-form {
        margin: 10px 0;
        float: none !important;
        padding-top: 1px;
        padding-bottom: 1px;
        position: relative
    }

    .off-canvas-sidebar nav .navbar-collapse .table-responsive,
    .sidebar .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-x: scroll;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        -webkit-overflow-scrolling: touch
    }

    .form-group.form-search .form-control {
        font-size: 1.7em;
        height: 37px;
        width: 78%
    }

    .navbar-form .btn {
        position: absolute;
        top: -5px;
        right: -50px
    }

    .close-layer {
        height: 100%;
        width: 100%;
        position: absolute;
        opacity: 0;
        top: 0;
        left: auto;
        background: rgba(0, 0, 0, .35);
        content: "";
        z-index: 9999;
        overflow-x: hidden;
        transition: all .37s ease-in
    }

    .close-layer.visible {
        opacity: 1
    }

    .navbar-toggler .icon-bar {
        display: block;
        position: relative;
        background: #555 !important;
        width: 24px;
        height: 2px;
        border-radius: 1px;
        margin: 0 auto
    }

    .navbar-header .navbar-toggler {
        padding: 15px;
        margin-top: 4px;
        width: 40px;
        height: 40px
    }

    .bar1,
    .bar2,
    .bar3 {
        outline: 1px solid transparent
    }

    @keyframes j {
        0% {
            top: 0;
            transform: rotate(0deg)
        }

        45% {
            top: 6px;
            transform: rotate(145deg)
        }

        75% {
            transform: rotate(130deg)
        }

        to {
            transform: rotate(135deg)
        }
    }

    @keyframes k {
        0% {
            top: 6px;
            transform: rotate(135deg)
        }

        45% {
            transform: rotate(-10deg)
        }

        75% {
            transform: rotate(5deg)
        }

        to {
            top: 0;
            transform: rotate(0)
        }
    }

    @keyframes l {
        0% {
            bottom: 0;
            transform: rotate(0deg)
        }

        45% {
            bottom: 6px;
            transform: rotate(-145deg)
        }

        75% {
            transform: rotate(-130deg)
        }

        to {
            transform: rotate(-135deg)
        }
    }

    @keyframes m {
        0% {
            bottom: 6px;
            transform: rotate(-135deg)
        }

        45% {
            transform: rotate(10deg)
        }

        75% {
            transform: rotate(-5deg)
        }

        to {
            bottom: 0;
            transform: rotate(0)
        }
    }

    .navbar-toggler .icon-bar:nth-child(2) {
        top: 0;
        animation: k .5s 0s;
        animation-fill-mode: forwards
    }

    .navbar-toggler .icon-bar:nth-child(3) {
        opacity: 1
    }

    .navbar-toggler .icon-bar:nth-child(4) {
        bottom: 0;
        animation: m .5s 0s;
        animation-fill-mode: forwards
    }

    .navbar-toggler.toggled .icon-bar:nth-child(2) {
        top: 6px;
        animation: j .5s 0s;
        animation-fill-mode: forwards
    }

    .navbar-toggler.toggled .icon-bar:nth-child(3) {
        opacity: 0
    }

    .navbar-toggler.toggled .icon-bar:nth-child(4) {
        bottom: 6px;
        animation: l .5s 0s;
        animation-fill-mode: forwards
    }

    .dropdown-menu .divider {
        background-color: hsla(0, 0%, 90%, .15)
    }

    .navbar-nav {
        margin: 1px 0
    }

    .navbar-nav .open .dropdown-menu>li>a {
        padding: 15px 15px 5px 50px
    }

    .navbar-nav .open .dropdown-menu>li:first-child>a {
        padding: 5px 15px 5px 50px
    }

    .navbar-nav .open .dropdown-menu>li:last-child>a {
        padding: 15px 15px 25px 50px
    }

    [class*=navbar-] .navbar-nav .active>a,
    [class*=navbar-] .navbar-nav .active>a:focus,
    [class*=navbar-] .navbar-nav .active>a:hover,
    [class*=navbar-] .navbar-nav .navbar-nav .open .dropdown-menu>li>a:active,
    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a,
    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a:focus,
    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a:hover,
    [class*=navbar-] .navbar-nav>li>a,
    [class*=navbar-] .navbar-nav>li>a:focus,
    [class*=navbar-] .navbar-nav>li>a:hover {
        color: #fff
    }

    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a,
    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a:focus,
    [class*=navbar-] .navbar-nav .open .dropdown-menu>li>a:hover,
    [class*=navbar-] .navbar-nav>li>a,
    [class*=navbar-] .navbar-nav>li>a:focus,
    [class*=navbar-] .navbar-nav>li>a:hover {
        opacity: .7;
        background: transparent
    }

    [class*=navbar-] .navbar-nav.navbar-nav .open .dropdown-menu>li>a:active {
        opacity: 1
    }

    [class*=navbar-] .navbar-nav .dropdown>a:hover .caret {
        border-bottom-color: #777;
        border-top-color: #777
    }

    [class*=navbar-] .navbar-nav .dropdown>a:active .caret {
        border-bottom-color: #fff;
        border-top-color: #fff
    }

    .dropdown-menu {
        display: none
    }

    .navbar-fixed-top {
        -webkit-backface-visibility: hidden
    }

    #bodyClick {
        height: 100%;
        width: 100%;
        position: fixed;
        opacity: 0;
        top: 0;
        left: auto;
        right: 260px;
        content: "";
        z-index: 9999;
        overflow-x: hidden
    }

    .social-line .btn,
    .subscribe-line .form-control {
        margin: 0 0 10px
    }

    .footer:not(.footer-big) nav>ul li,
    .social-line.pull-right {
        float: none
    }

    .social-area.pull-right {
        float: none !important
    }

    .form-control+.form-control-feedback {
        margin-top: -8px
    }

    .navbar-toggle:focus,
    .navbar-toggle:hover {
        background-color: transparent !important
    }

    .media-post .author {
        width: 20%;
        float: none !important;
        display: block;
        margin: 0 auto 10px
    }

    .media-post .media-body {
        width: 100%
    }

    .navbar-collapse.collapse {
        height: 100% !important
    }

    .navbar-collapse.collapse.in {
        display: block
    }

    .navbar-header .collapse,
    .navbar-toggle {
        display: block !important
    }

    .navbar-header {
        float: none
    }

    .navbar-collapse .nav p {
        font-size: 1rem;
        margin: 0
    }
}

@media (min-width:992px) {
    .main-panel .navbar .navbar-collapse .navbar-nav .nav-item .nav-link p {
        display: none
    }

    .nav-mobile-menu,
    .sidebar .navbar-form {
        display: none !important
    }
}
    </style>
</head>
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Reserveren</h4>
            <p class="card-category">reserveer een lokaal voor een groepsbespreking</p>
        </div>
        <div class="card-body table-responsive">
        <?php include("errors.php") ?>
            <form action="index.php?action=reserveren" method="post"> 
                <div class="form-group">    
                    <select class="form-control" name="room">
                        <?php
                            $sql = "SELECT * FROM lokalen"; 
                            $result = mysqli_query($db, $sql) or die(mysqli_query($db));
                            while ($row = $result->fetch_assoc()){
                                echo "<option>" . $row['name'] . "</option>";
                            }
                        ?>
                    </select>
                    <form action="" method="POST">
                    <label class="form-check-label">Datum</label>
                    <input type="date" name="date" class="form-control">
                    <label class="form-check-label">Start tijd</label>
                    <input type="time" name="time_start" class="form-control">
                    <label class="form-check-label">Eind tijd</label>
                    <input type="time" name="time_end" class="form-control">
                    <label class="form-check-label">Met wie</label>
                    <input type="text" name="met_wie" class="form-control">
                    <input type="hidden" value="<?php echo $_SESSION['username']?> " name="name" class="form-control">
                    <input type="submit" name="r_time" class="btn btn-primary pull-right mt-3">
                </div>
            </form>
        </div>
        </div>
    </div>
</form>

    <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">Reserveringen</h4>
            <p class="card-category">alle ingeplande reserveringen</p>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <tr>
                        <th>Datum</th>
                        <th>Start tijd</th>
                        <th>Eind tijd</th>
                        <th>Lokaal</th>
                        <th>Met wie</th>
                        <?php if($_SESSION['isAdmin']) {
                            echo "<th>" . "Gepland door" . "</th>";
                            echo "<th>" . "Actions" . "</th>";
                        }
                        ?>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM reservaties WHERE date >= CURRENT_DATE()  ORDER BY date ASC, time_start"; 
                            // $sql = "SELECT * FROM reservaties WHERE date >= CURRENT_DATE() AND time_end >= CURRENT_TIME() ORDER BY date ASC, time_start"; 
                            $result = mysqli_query($db, $sql) or die(mysqli_query($db));
                            while ($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['time_start'] . "</td>";
                                echo "<td>" . $row['time_end'] . "</td>";
                                echo "<td>" . $row['lokaal'] . "</td>";
                                echo "<td>" . $row['met_wie'] . "</td>";
                                if($_SESSION['isAdmin']) {
                                    ?>

                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td>
                                        <a href="_dashboard/components/deleteReservation.php?id=<?php echo $row['id'];?>"><i class="material-icons" title="Remove User">close</i></a>
                                    </td>
                                <?php
                                }
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>