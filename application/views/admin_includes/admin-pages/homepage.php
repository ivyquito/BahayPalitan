        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $subcounter ?></div>
                                    <div>Subscribers</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" style="cursor:default">
                            <div class="panel-footer">
                                <span class="pull-left">Active : <?php echo $active ?></span>
                                <span class="pull-right">Inactive : <?php echo $inactive ?></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" style="cursor:default">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo '$ '.$totalamount ?></div>
                                    <div>Total Payment</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" style="cursor:default">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><!--<i class="fa fa-arrow-circle-right"></i>--></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $abuse_reports ?></div>
                                    <div>Home Reported Abuse!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" style="cursor:default">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><!--<i class="fa fa-arrow-circle-right"></i>--></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
         </div>