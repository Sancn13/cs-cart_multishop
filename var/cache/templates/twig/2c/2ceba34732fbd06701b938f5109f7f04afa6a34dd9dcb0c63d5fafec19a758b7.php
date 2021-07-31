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

/* __string_template__afc36231ad5de80c0553ac80884d5bae62b1d6e4a94beda1abc70cab1541d6e9 */
class __TwigTemplate_503f21ea5db9d63b313a2206456ae0606ece2f171787d03d81671ccf58433522 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_p_subj", ["[order]" => $this->getAttribute(($context["order_info"] ?? null), "order_id", [])]);
    }

    public function getTemplateName()
    {
        return "__string_template__afc36231ad5de80c0553ac80884d5bae62b1d6e4a94beda1abc70cab1541d6e9";
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
        return new Source("{{ company_name }}: {{ __(\"change_order_status_p_subj\", {\"[order]\": order_info.order_id}) }}", "__string_template__afc36231ad5de80c0553ac80884d5bae62b1d6e4a94beda1abc70cab1541d6e9", "");
    }
}
