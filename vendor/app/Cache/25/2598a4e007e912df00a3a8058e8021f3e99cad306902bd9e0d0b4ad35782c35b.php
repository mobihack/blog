<?php

/* Base/admin/mainPage.php */
class __TwigTemplate_a9768592ad3a0db2cc4fbb65ddd851bbffb4e864e2a80f98971919c42aa7e73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "Base/admin/inc/_header.php");
        echo "

<div id=\"wrapper\">

    ";
        // line 5
        echo twig_include($this->env, $context, "Base/admin/inc/_sidebar.php");
        echo "

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-comments fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\"><?php echo \$dasboardData['postCount']; ?></div>
                                <div>Total Posts!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-user fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\"><?php echo \$dasboardData['userCount']; ?></div>
                                <div>Total Authors!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-yellow\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-asterisk fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">0</div>
                                <div>Coming Soon!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"panel panel-red\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-support fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\"><?php echo \$dasboardData['isLocked']; ?></div>
                                <div>Blog Lock!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-8\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-clock-o fa-fw\"></i> Responsive Timeline
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-badge\"><i class=\"fa fa-check\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        <p><small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> 11 hours ago via Twitter</small>
                                        </p>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-badge warning\"><i class=\"fa fa-credit-card\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge danger\"><i class=\"fa fa-bomb\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge info\"><i class=\"fa fa-save\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                        <hr>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-gear\"></i> <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                <li><a href=\"#\">Action</a>
                                                </li>
                                                <li><a href=\"#\">Another action</a>
                                                </li>
                                                <li><a href=\"#\">Something else here</a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li><a href=\"#\">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"timeline-inverted\">
                                <div class=\"timeline-badge success\"><i class=\"fa fa-graduation-cap\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"list-group\">
                            ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["notification"]) {
            if (($context["id"] < 10)) {
                // line 232
                echo "                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-check-square-o fa-fw\"></i> New ";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], 2, array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], 0, array()), "html", null, true);
                echo "
                                <span class=\"pull-right text-muted small\">
                                    <em>";
                // line 235
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], 1, array()), "d m y"), "html", null, true);
                echo "</em>
                                </span>
                            </a>

                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                    </span>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                                <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                    </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                        <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

                <div class=\"chat-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-comments fa-fw\"></i> Chat
                        <div class=\"btn-group pull-right\">
                            <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-chevron-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu slidedown\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-check-circle fa-fw\"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-times fa-fw\"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-clock-o fa-fw\"></i> Away
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"chat\">
                            <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <strong class=\"primary-font\">Jack Sparrow</strong>
                                        <small class=\"pull-right text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <small class=\" text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                        <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <strong class=\"primary-font\">Jack Sparrow</strong>
                                        <small class=\"pull-right text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\">
                                        <small class=\" text-muted\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                        <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                            <span class=\"input-group-btn\">
                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                        Send
                                    </button>
                                </span>
                        </div>
                    </div>
                    <!-- /.panel-footer -->
                </div>
                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>

";
        // line 419
        echo twig_include($this->env, $context, "Base/admin/inc/_footer.php");
    }

    public function getTemplateName()
    {
        return "Base/admin/mainPage.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 419,  282 => 240,  270 => 235,  263 => 233,  260 => 232,  255 => 231,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/admin/mainPage.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/admin/mainPage.php");
    }
}
