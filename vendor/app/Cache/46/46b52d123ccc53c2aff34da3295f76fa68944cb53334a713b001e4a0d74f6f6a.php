<?php

/* Base/blog/index.php */
class __TwigTemplate_fa88a421a56e5820dbd3a84baab292376e779e1125b8a8b6c48d914847107e7b extends Twig_Template
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
        echo twig_include($this->env, $context, "Base/blog/inc/_header.php");
        echo "

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/img/home-bg.jpg')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        <h1>Clean Blog</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1 col-xs-12\">
                <h2 class=\"page-header\">";
        // line 23
        if (($this->getAttribute((isset($context["pageHeader"]) ? $context["pageHeader"] : null), "type", array()) == "custom")) {
            echo "Posts from ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageHeader"]) ? $context["pageHeader"] : null), "data", array()), "html", null, true);
        } else {
            echo "Latest Posts";
        }
        echo "</h2>
            </div>
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogPosts"]) ? $context["blogPosts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "
                <div class=\"post-preview\">
                    <a href=\"";
            // line 29
            echo $this->getAttribute($context["post"], "posturl", array());
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subtitle", array()), "html", null, true);
            echo "
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "authorurl", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</a> on ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "formatted_date", array()), "html", null, true);
            echo "</p>
                </div>
                <hr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                <!-- Pager -->
                <ul class=\"pager\">
                    <li class=\"previous\">

                        ";
        // line 47
        if (((isset($context["page"]) ? $context["page"] : null) == 1)) {
            // line 48
            echo "                        <!--nothing currently -->
                        ";
        } elseif ((        // line 49
(isset($context["page"]) ? $context["page"] : null) > 1)) {
            // line 50
            echo "                            <a href=\"<?php echo SF_INSTALLDIR; ?>/page/<?php echo \$page-1; ?>/\">&larr; Newer Posts</a>
                        ";
        } else {
            // line 52
            echo "                            <span>&larr; Newer Posts</span>
                        ";
        }
        // line 54
        echo "
                    </li>
                    <li class=\"next\">
                        ";
        // line 57
        if ((((isset($context["page"]) ? $context["page"] : null) == 1) && ((isset($context["page"]) ? $context["page"] : null) == (isset($context["noOfPages"]) ? $context["noOfPages"] : null)))) {
            // line 58
            echo "                            <!--nothing currently -->
                        ";
        } elseif ((        // line 59
(isset($context["page"]) ? $context["page"] : null) != (isset($context["noOfPages"]) ? $context["noOfPages"] : null))) {
            // line 60
            echo "                            <a href=\"<?php echo SF_INSTALLDIR; ?>/page/<?php echo \$page+1; ?>/\">Older Posts &rarr;</a>
                        ";
        } else {
            // line 62
            echo "                            <span>Older Posts &rarr;</span>
                        ";
        }
        // line 64
        echo "                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

";
        // line 72
        echo twig_include($this->env, $context, "Base/blog/inc/_footer.php");
    }

    public function getTemplateName()
    {
        return "Base/blog/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  140 => 64,  136 => 62,  132 => 60,  130 => 59,  127 => 58,  125 => 57,  120 => 54,  116 => 52,  112 => 50,  110 => 49,  107 => 48,  105 => 47,  98 => 42,  83 => 37,  77 => 34,  71 => 31,  66 => 29,  62 => 27,  58 => 26,  47 => 23,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/blog/index.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/blog/index.php");
    }
}
