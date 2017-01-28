<div id="wrapper">

    <?php include ('_sidebar.php');?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User Manager</h1>
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
                            <a class="btn<?php if($setSubPage!='all')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/all">All Users</a>
                            <a class="btn<?php if($setSubPage!='user')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/user">Administrator</a>
                            <a class="btn<?php if($setSubPage!='category')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/category">Editor</a>
                            <a class="btn<?php if($setSubPage!='series')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/series">Author</a>
                            <a class="btn<?php if($setSubPage!='series')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/series">Contributor</a>
                            <a class="btn<?php if($setSubPage!='series')echo ' btn-outline'; ?> btn-info" href="<?php echo SF_INSTALLDIR; ?>/admin/posts/series">Followers (beta)</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1 col-xs-12 text-center add-top-margin-mobile">
                    <span>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline btn-info" href="'.SF_INSTALLDIR.'/admin/users/add=user/">+ add user</a>
                            <a class="btn btn-outline btn-info" href="'.SF_INSTALLDIR.'/admin/users/add=users/">+ add users</a>
                            <a class="btn btn-outline btn-warning" href="">? about user roles</a>
                        </div>
                    </span>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                        <?php echo $userList; ?>
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
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Administrator</h2>
                        <p>An Administrator has full power over the site and can do everything related to site administration*. Administrators can create more Administrators, invite new users,  remove users, and change user roles. They have complete control over posts, pages, uploaded files, comments, settings, themes, imports, exports, other users – the whole shebang.

                            Nothing related to site-administration is off-limits for Administrators, including deleting the entire site. This is why we recommend having only one administrator per blog.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Editor</h2>
                        <p>An Editor can create, edit, publish, and delete any post or page (not just their own), as well as moderate comments and manage categories, tags, and links.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Author</h2>
                        <p>An Author can create, edit, publish, and delete only their own posts, as well as upload files and images. Authors do not have access to create, modify, or delete pages, nor can they modify posts by other users. Authors can edit comments made on their posts.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Contributor</h2>
                        <p>A Contributor can create and edit only their own posts, but cannot publish them. When one of their posts is ready to be published, or has been revised, the Administrator needs to be notified personally by the Contributor to review it. Furthermore, once a Contributor’s post is approved and published by an Administrator, it can no longer be edited by the Contributor.

                            Contributors do not have the ability to upload files or images, but they can see your site’s stats.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Follower</h2>
                        <p>Followers do not have any editing privileges on your site whatsoever; they are simply people who have signed up to receive updates each time you publish a new post. The only thing they can do on your site is leave comments (if you have them enabled), though they do not have to be a Follower to do so.

                            If your blog is public, anyone can follow it, but you can also send out invitations to specific people you’d like to share your blog with.

                            If your blog is private, nobody will be able to follow it unless you specifically invite them, at which point they become a Viewer.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="page-header">Viewer</h2>
                        <p>Viewers are users who can only view private sites. Like Followers, Viewers do not have any editing privileges. All they can do is simply read the private site they were invited to and leave comments on it (again, only if you’ve enabled them).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>