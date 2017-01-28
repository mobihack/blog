<?php

/* Base/admin/inc/_footer.php */
class __TwigTemplate_f5ec77ae06fa27d5b58bd9cbff670f156a797f940aae77c96b936a9a24d6a1a0 extends Twig_Template
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
        echo "<!-- jQuery -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/metisMenu.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/sb-admin-2.min.js\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/js/hackblog.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Base/admin/inc/_footer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  40 => 11,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/admin/inc/_footer.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/admin/inc/_footer.php");
    }
}
