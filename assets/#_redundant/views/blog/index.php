    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo SF_INSTALLDIR; ?>/assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo $blogPosts; ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php if($page==1): ?>
                        <!--nothing currently -->
                        <?php elseif($page>1): ?>
                            <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page-1; ?>/">&larr; Newer Posts</a>
                        <?php else: ?>
                            <span>&larr; Newer Posts</span>
                        <?php endif; ?>

                    </li>
                    <li class="next">
                        <?php if($page==1 && $page==$noOfPages): ?>
                            <!--nothing currently -->
                        <?php elseif($page!=$noOfPages): ?>
                            <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page+1; ?>/">Older Posts &rarr;</a>
                        <?php else: ?>
                            <span>Older Posts &rarr;</span>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
