<div id="wrapper">

    <?php include ('_sidebar.php');?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Settings</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

            <!-- /.col-lg-4 -->
        <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                    <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>
                    <li role="presentation"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Posts</a></li>
                    <li role="presentation"><a href="#advanced" aria-controls="advanced" role="tab" data-toggle="tab">Advanced</a></li>
                </ul>

                <!-- Tab panes -->
                <br>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                        <div class="row">
                            <form>
                            <div class="col-lg-6 col-xs-12">

                            <div class="form-group">
                                <label>Blog Title</label>
                                <input name="" placeholder="My Blog" class="form-control">
                                <p class="help-block">The title for the blog.</p>
                            </div>

                            <div class="form-group">
                                <label>Blog Subitle</label>
                                <input name="" placeholder="Something to write down my thoughts" class="form-control">
                                <p class="help-block">Something that hints the nature of your blog.</p>
                            </div>

                            <div class="form-group">
                                <label>Posts to show per page</label>
                                <select class="form-control">
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                </select>
                            </div>

                            </div>
                            <div class="col-lg-6 col-xs-12">
                            asdasd
                            </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="comments">
                        <div class="row">
                            <form>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label>Enable Disqus</label>
                                    <select class="form-control" name="">
                                        <option selected>On</option>
                                        <option>Off</option>
                                    </select>
                                    <p class="help-block">Enable/Disable <a href="https://disqus.com/">Disqus</a> based commenting system.</p>
                                </div>
                                <div class="form-group">
                                    <label>Disqus Custom URL</label>
                                    <input name="" placeholder="Url" class="form-control" value="//mobihack.disqus.com/embed.js">
                                    <p class="help-block">Custom URL given after <a href="https://disqus.com/profile/signup/">signup</a>.</p>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="posts">
                        <div class="row">
                            <form>
                                <div class="col-lg-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Post</label>
                                        <input name="" placeholder="PLACEHOLDER" class="form-control">
                                        <p class="help-block">help text.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="advanced">
                        <div class="row">
                            <form>
                                <div class="col-lg-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Data Directory</label>
                                        <input name="" placeholder="./data" class="form-control" value="./data">
                                        <p class="help-block">Directory for all the data.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Caching System</label>
                                        <select class="form-control" name="">
                                            <option selected>On</option>
                                            <option>Off</option>
                                        </select>
                                        <p class="help-block">Please just don't</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>