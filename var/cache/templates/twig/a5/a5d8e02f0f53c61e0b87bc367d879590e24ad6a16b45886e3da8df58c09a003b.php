<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161 */
class __TwigTemplate_d2a11d3df21b57cea2e4356dbf2f109bbea4ebc84bcd085e0850b57dfeeca18a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo ($context["subject"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ company_name }}: {{ subject }}", "__string_template__4d6e7a298ac21e7f7472fdb8dd331f1570978dcbbe1c38a3a05842814b9a1161", "");
    }
}
