{{ include('Base/admin/inc/_header.php') }}

<div id="wrapper">

    {{ include('admin/inc/_sidebar.php') }}

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
                            <a class="btn{% if setSubPage=='all' or setSubPage=='' %} btn-outline{% endif %} btn-info" href="{{ SF_INSTALLDIR }}/admin/sub/posts/all">All Posts</a>
                            <a class="btn{% if setSubPage=='user' %} btn-outline{% endif %} btn-info" href="{{ SF_INSTALLDIR }}/admin/sub/posts/user">Users</a>
                            <a class="btn{% if setSubPage=='category' %} btn-outline{% endif %} btn-info" href="{{ SF_INSTALLDIR }}/admin/sub/posts/category">Categories</a>
                            <a class="btn{% if setSubPage=='series' %} btn-outline{% endif %} btn-info" href="{{ SF_INSTALLDIR }}/admin/sub/posts/series">Series</a>

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

                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">

                                    {% if page==1 %}
                                    <!--nothing currently -->
                                    {% elseif page>1 %}
                                    <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page-1; ?>/">&larr; Newer Posts</a>
                                    {% else %}
                                    <span>&larr; Newer Posts</span>
                                    {% endif %}

                                </li>
                                <li class="next">
                                    {% if page==1 and page==noOfPages %}
                                    <!--nothing currently -->
                                    {% elseif page!=noOfPages %}
                                    <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page+1; ?>/">Older Posts &rarr;</a>
                                    {% else %}
                                    <span>Older Posts &rarr;</span>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>

{{ include('Base/admin/inc/_footer.php') }}