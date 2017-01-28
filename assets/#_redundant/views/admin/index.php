<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-body">
                    <form role="form" action="<?php echo SF_INSTALLDIR; ?>/admin/index" method="post" id="hackblog-login">
                        <fieldset>
                            <div class="form-group text-center">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                                </span>
                                <p id="login-message"></p>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="login-userid" class="form-control" placeholder="User ID" name="userid" type="text" autofocus>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                <input id="login-password" class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox" style="padding: 5px 10px">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                            <hr>
                            <div class="text-center"><strong>Hack Blog</strong> &copy; <?php echo date('Y'); ?></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>