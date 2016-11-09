<?php

/* common/views/common.html */
class __TwigTemplate_585ce9d669b0cf4e78e8167d3adef5137030bfe83d7d25a6743e047d6eff40a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>personal MVC</title>
    <link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />
  </head>
  <body>
  ";
        // line 11
        $this->loadTemplate("common/views/header.html", "common/views/common.html", 11)->display($context);
        // line 12
        echo "  <div class=\"container background\">
    <content>
     ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "    </content>
    </div>
  ";
        // line 19
        $this->loadTemplate("common/views/footer.html", "common/views/common.html", 19)->display($context);
        // line 20
        echo "  </body>
  <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
</html>";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "common/views/common.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  46 => 20,  44 => 19,  40 => 17,  38 => 14,  34 => 12,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>personal MVC</title>
    <link rel=\"stylesheet\" href=\"../../public/css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"../../public/css/my.css\" type=\"text/css\" />
  </head>
  <body>
  {% include 'common/views/header.html' %}
  <div class=\"container background\">
    <content>
     {% block content%}

     {% endblock %}
    </content>
    </div>
  {% include 'common/views/footer.html' %}
  </body>
  <script type=\"text/javascript\" src=\"../../public/js/jquery-3.0.0.js\"></script>
  <script type=\"text/javascript\" src=\"../../public/js/bootstrap.min.js\"></script>
</html>", "common/views/common.html", "D:\\person_git\\Permvc\\PerMVC\\application\\common\\views\\common.html");
    }
}