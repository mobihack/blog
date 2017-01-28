<?php

/* Base/admin/inc/_header.php */
class __TwigTemplate_371c53336a7e5d627255f1b1d97ca10f889656f7425d6945dae3dedd1641b5cb extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Blog - Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/css/styles.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["SF_INSTALLDIR"]) ? $context["SF_INSTALLDIR"] : null), "html", null, true);
        echo "/assets/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
";
    }

    public function getTemplateName()
    {
        return "Base/admin/inc/_header.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  45 => 19,  41 => 18,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Base/admin/inc/_header.php", "/opt/lampp/htdocs/Projects/blog_2/vendor/app/Views/Base/admin/inc/_header.php");
    }
}
