<?php

/* Base/admin/inc/_sidebar.php */
class __TwigTemplate_b604afe7a7f9b157a05cd76cf776edcd5d9982ed227615bd1df17a259e891b52 extends Twig_Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top navbar-inverse\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"main\"><span class=\"fa fa-gavel\"> </span> Hack Blog</a>
    </div>
    <!-- /.navbar-header -->

    <ul class=\"nav navbar-top-links navbar-right text-center\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>Read All Messages</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-tasks\">
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 1</strong>
                                <span class=\"pull-right text-muted\">40% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 2</strong>
                                <span class=\"pull-right text-muted\">20% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                    <span class=\"sr-only\">20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 3</strong>
                                <span class=\"pull-right text-muted\">60% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 4</strong>
                                <span class=\"pull-right text-muted\">80% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Tasks</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["notification"]) {
            if (($context["id"] < 5)) {
                // line 151
                echo "                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-check-square-o fa-fw\"></i> New ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], 2, array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], 0, array()), "html", null, true);
                echo "
                            <span class=\"pull-right text-muted small\"><em>";
                // line 155
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], 1, array()), "d m y"), "html", null, true);
                echo "</em></span>
                        </div>
                    </a>
                </li>

                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                <?php for (\$i=0;\$i<5;\$i++): ?>

                    <li class=\"divider\"></li>

                <?php endfor; ?>

                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Alerts</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li class=\"user-media\"><div class=\"media\">
                        <div class=\"media-left media-top\">
                            <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/settings/profile\">
                                <img class=\"media-object\" style=\"height: 4em; width: 4em;border-radius: 50%;\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/data/author_img/user-img.jpg\" alt=\"Enrique Iglesius Image\">
                            </a>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">Enrique Iglesius <small>(@user)</small></h4>
                            <p>Account started on December 31, 2016</p>
                            <span>Total <b>1</b> posts!</span>
                        </div>
                    </div></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/settings/profile\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                </li>
                <li><a href=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/settings/site\"><i class=\"fa fa-cogs fa-fw\"></i> Settings</a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
                <li>
                    <span>Menu</span>
                </li>
                <li>
                    <a href=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/main\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                </li>
                <li>
                    <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/sub/pages\"><i class=\"fa fa-sticky-note fa-fw\"></i> Page Manager</a>
                </li>
                <li>
                    <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/sub/posts\"><i class=\"fa fa-comment fa-fw\"></i> Content Manager</a>
                </li>
                <li>
                    <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/sub/users\"><i class=\"fa fa-users fa-fw\"></i> User Manager</a>
                </li>

                <li>
                    <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Settings<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/sub/settings/profile\"><i class=\"fa fa-user fa-fw\"></i> Profile Settings</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/sub/settings/site\"><i class=\"fa fa-cogs fa-fw\"></i> Site Settings</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/admin/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>";
    }

    public function getTemplateName()
    {
        return "Base/admin/inc/_sidebar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 241,  305 => 235,  299 => 232,  289 => 225,  283 => 222,  277 => 219,  271 => 216,  252 => 200,  246 => 197,  241 => 195,  228 => 185,  224 => 184,  199 => 161,  186 => 155,  180 => 154,  175 => 151,  170 => 150,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/admin/inc/_sidebar.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/admin/inc/_sidebar.php");
    }
}
