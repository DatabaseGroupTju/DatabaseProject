            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><strong>毕业生信息管理系统</strong></a>
    				
    		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> 账户</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> 注销</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            <!--/. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                    <li>
                        <a href="import.php"><i class="fa fa-cloud-download"></i> 导入信息</a>
                    </li>
                    <li>
                        <a href="export.php"><i class="fa fa-cloud-upload"></i> 导出信息 </a>
                    </li>
                    <li>
                            <a href="#"><i class="fa fa-picture-o"></i> 数据分析<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="data-analysis.php">数据统计</a>
                                </li>
                                <li>
                                    <a href="pic-analysis.php">图表分析</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                            <a href="recover.php"><i class="fa fa-fw fa-undo"></i> 数据恢复</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-search"></i> 查询毕业生信息</a>
                    </li>
                    <li>
    					<li>
                            <a href="#"><i class="fa fa-edit"></i> 修改毕业生信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insert.php">插入</a>
                                </li>
                                <li>
                                    <a href="delete.php">删除</a>
                                </li>
                                <li>
                                    <a href="update.php">更新</a>
                                </li>
                            </ul>
                        </li>
                    </li>
                    <li>
                                    <a href="#"><i class="fa fa-id-card"></i> 管理员信息修改<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                                    <li>
                                                        <a href="AddAdmin.php">添加管理员</a>
                                                    </li>
                                                    <li>
                                                        <a href="DeleteAdmin.php">删除管理员</a>
                                                    </li>
                                    </ul>
                    </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->