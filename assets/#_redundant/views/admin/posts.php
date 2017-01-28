<div id="wrapper">

    <?php include ('_sidebar.php');?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Content Manager</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- /.col-lg-4 -->
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-1 col-xs-12 text-center">
                        <div class="btn-group" role="group">
                            <a class="btn<?php if($setSubPage!='all')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/all">All Posts</a>
                            <a class="btn<?php if($setSubPage!='user')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/user">Users</a>
                            <a class="btn<?php if($setSubPage!='category')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/category">Category</a>
                            <a class="btn<?php if($setSubPage!='series')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/series">Series</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1 col-xs-12 text-center add-top-margin-mobile">
                    <span class="nav nav-pills pull">
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline btn-info" href="">+ add post</a>
                            <a class="btn btn-outline btn-info" href="">+ add series</a>
                        </div>
                    </span>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <hr>
                <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                        <?php echo $blogPosts; ?>
                            <?php if(isset($noOfPages) && $noOfPages>1): ?>
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">
                                    <?php if($page==1): ?>
                                        <!--nothing currently -->
                                    <?php elseif($page>1): ?>
                                        <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page-1; ?>/">&larr; Back</a>
                                    <?php else: ?>
                                        <span>&larr; Back</span>
                                    <?php endif; ?>

                                </li>
                                <li class="next">
                                    <?php if($page==1 && $page==$noOfPages): ?>
                                        <!--nothing currently -->
                                    <?php elseif($page!=$noOfPages): ?>
                                        <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page+1; ?>/">More &rarr;</a>
                                    <?php else: ?>
                                        <span>More &rarr;</span>
                                    <?php endif; ?>
                                </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>