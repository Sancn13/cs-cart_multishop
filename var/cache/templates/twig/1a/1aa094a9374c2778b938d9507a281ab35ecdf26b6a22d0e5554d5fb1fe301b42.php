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

/* __string_template__b2042ce937eddbb9489fc6ee494082e396815d4c64e62dfc5786e4e9a94959b7 */
class __TwigTemplate_0dadb0ebb6d1ac348a40946df739c3928349fe94a751f608cbd07de6875577a9 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_o_subj", ["[order]" => $this->getAttribute(($context["order_info"] ?? null), "order_id", [])]);
    }

    public function getTemplateName()
    {
        return "__string_template__b2042ce937eddbb9489fc6ee494082e396815d4c64e62dfc5786e4e9a94959b7";
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
        return new Source("{{ company_name }}: {{ __(\"change_order_status_o_subj\", {\"[order]\": order_info.order_id}) }}", "__string_template__b2042ce937eddbb9489fc6ee494082e396815d4c64e62dfc5786e4e9a94959b7", "");
    }
}
