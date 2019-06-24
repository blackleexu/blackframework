<?php /*a:2:{s:68:"E:\wamp64\www\blackframework\application\admin\view\index\index.html";i:1561284830;s:70:"E:\wamp64\www\blackframework\application\admin\view\layout\layout.html";i:1561281331;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Musik | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/blackframework/public/static/js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/blackframework/public/static/js/datatables/datatables.css" type="text/css"/>
  
  <!--<link rel="stylesheet" href="/blackframework/public/static/js/zui/css/zui.css">-->
  <!--<link rel="stylesheet" href="/blackframework/public/static/js/zui/lib/uploader/zui.uploader.css">-->
  
  <!--<script src="/blackframework/public/static/js/zui/js/zui.js"></script>-->
  <!--<script src="/blackframework/public/static/js/zui/lib/uploader/zui.uploader.js"></script>-->

  <!--[if lt IE 9]>
  <script src="/blackframework/public/static/js/ie/html5shiv.js"></script>
  <script src="/blackframework/public/static/js/ie/respond.min.js"></script>
  <script src="/blackframework/public/static/js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
<section class="vbox">
  <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
    <div class="navbar-header aside bg-info dk">
      <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
        <i class="icon-list"></i>
      </a>
      <a href="index.html" class="navbar-brand text-lt">
        <i class="icon-earphones"></i>
        <img src="/blackframework/public/static/images//logo.png" alt="." class="hide">
        <span class="hidden-nav-xs m-l-sm">Musik</span>
      </a>
      <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
        <i class="icon-settings"></i>
      </a>
    </div>      <ul class="nav navbar-nav hidden-xs">
    <li>
      <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
        <i class="fa fa-indent text"></i>
        <i class="fa fa-dedent text-active"></i>
      </a>
    </li>
  </ul>
    <div class="navbar-right ">
      <ul class="nav navbar-nav m-n hidden-xs nav-user user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
            <i class="icon-bell"></i>
            <span class="badge badge-sm up bg-danger count">2</span>
          </a>
          <section class="dropdown-menu aside-xl animated fadeInUp">
            <section class="panel bg-white">
              <div class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </div>
              <div class="list-group list-group-alt">
                <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="/blackframework/public/static/images//a0.png" alt="..." class="img-circle">
                    </span>
                  <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                </a>
                <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                </a>
              </div>
              <div class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </div>
            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/blackframework/public/static/images//a0.png" alt="...">
              </span>
            John.Smith <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <span class="arrow top"></span>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-black dk aside hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f-md scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <ul class="nav bg clearfix">
                  <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                    Discover
                  </li>
                  <li>
                    <a href="index.html">
                      <i class="icon-disc icon text-success"></i>
                      <span class="font-bold">What's new</span>
                    </a>
                  </li>
                  <li>
                    <a href="genres.html">
                      <i class="icon-music-tone-alt icon text-info"></i>
                      <span class="font-bold">Genres</span>
                    </a>
                  </li>
                  <li>
                    <a href="events.html">
                      <i class="icon-drawer icon text-primary-lter"></i>
                      <b class="badge bg-primary pull-right">6</b>
                      <span class="font-bold">Events</span>
                    </a>
                  </li>
                  <li>
                    <a href="listen.html">
                      <i class="icon-list icon  text-info-dker"></i>
                      <span class="font-bold">Listen</span>
                    </a>
                  </li>
                  <li>
                    <a href="video.html" data-target="#content" data-el="#bjax-el" data-replace="true">
                      <i class="icon-social-youtube icon  text-primary"></i>
                      <span class="font-bold">Video</span>
                    </a>
                  </li>
                  <li class="m-b hidden-nav-xs"></li>
                </ul>
                <ul class="nav" data-ride="collapse">
                  <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                    Interface
                  </li>
                  <li  class="active">
                    <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                      <i class="icon-grid icon">
                      </i>
                      <span>Pages</span>
                    </a>
                    <ul class="nav dk text-sm">
                      <li >
                        <a href="profile.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Profile</span>
                        </a>
                      </li>
                      <li  class="active">
                        <a href="blog.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Blog</span>
                        </a>
                      </li>
                      <li >
                        <a href="invoice.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Invoice</span>
                        </a>
                      </li>
                      <li >
                        <a href="gmap.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Google Map</span>
                        </a>
                      </li>
                      <li >
                        <a href="jvectormap.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Vector Map</span>
                        </a>
                      </li>
                      <li >
                        <a href="signin.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Signin</span>
                        </a>
                      </li>
                      <li >
                        <a href="signup.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>Signup</span>
                        </a>
                      </li>
                      <li >
                        <a href="404.html" class="auto">
                          <i class="fa fa-angle-right text-xs"></i>

                          <span>404</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <!-- / nav -->
            </div>
          </section>
        </section>
      </aside>
      <!-- /.aside -->
      <section id="content">
            
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none"><?php echo htmlentities($table_title); ?></h3>
        </div>
        
        <section class="panel panel-default">
            <header class="panel-heading">
                <?php echo htmlentities($table_title.'列表'); ?>
            </header>
            <div class="row wrapper">
                <!--<div class="col-sm-5 m-b-xs">-->
                    <!--<select class="input-sm form-control input-s-sm inline v-middle">-->
                        <!--<option value="1">删除</option>-->
                        <!--<option value="3">导出</option>-->
                    <!--</select>-->
                    <!--<button class="btn btn-sm btn-default">Apply</button>-->
                <!--</div>-->
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <!--<th style="width:20px;"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>-->
                            <th>用户名</th>
                            <th>创建日期</th>
                            <th style="width: 20rem;">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <!--<td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>-->
                        <td><?php echo htmlentities($item['name']); ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$item['create_time']); ?></td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info btn-rounded"> 查看</a>
                            <a href="#" class="btn btn-xs btn-dark btn-rounded"> 编辑</a>
                            <a href="#" class="btn btn-xs btn-danger btn-rounded"> 删除</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <small class="text-muted inline m-t-sm m-b-sm"> 共 <?php echo htmlentities($list->total()); ?> 条 </small>
                    </div>
                    <div class="col-sm-9 text-right dataTables_wrapper text-center-xs text-xs">
                        <?php echo $list; ?>
                        <!--&nbsp;-->
                        <!--<div class="pull-right" id="">-->
                            <!--<label>-->
                                <!--<select name="" aria-controls="" class="">-->
                                    <!--<option value="10">10</option>-->
                                    <!--<option value="15">15</option>-->
                                    <!--<option value="20">20</option>-->
                                    <!--<option value="50">50</option>-->
                                <!--</select>-->
                                <!--&nbsp;行-->
                            <!--</label>-->
                        <!--</div>-->
                    </div>
                </div>
            </footer>
        </section>
    </section>
</section>

      </section>
    </section>
  </section>
</section>
<script src="/blackframework/public/static/js/jquery.min.js"></script>
<script src="/blackframework/public/static/js/bootstrap.js"></script>
<script src="/blackframework/public/static/js/app.js"></script>
<script src="/blackframework/public/static/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/blackframework/public/static/js/app.plugin.js"></script>
<script src="/blackframework/public/static/js/jPlayer/jquery.jplayer.min.js"></script>
<script src="/blackframework/public/static/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script src="/blackframework/public/static/js/jPlayer/demo.js"></script>
<script src="/blackframework/public/static/js/datatables/jquery.dataTables.min.js"></script>
<script src="/blackframework/public/static/js/datatables/jquery.csv-0.71.min.js"></script>
<script src="/blackframework/public/static/js/datatables/demo.js"></script>
</body>
</html>
