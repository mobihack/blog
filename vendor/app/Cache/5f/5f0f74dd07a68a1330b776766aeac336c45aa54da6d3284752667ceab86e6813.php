<?php

/* Base/blog/inc/_footer.php */
class __TwigTemplate_403b923e43ea72070469b3b0b75f901b3fde92ae857088d1470cb1ce70bcab03 extends Twig_Template
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
        echo "
    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/clean-blog.min.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Base/blog/inc/_footer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 46,  66 => 43,  60 => 40,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/blog/inc/_footer.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/blog/inc/_footer.php");
    }
}
