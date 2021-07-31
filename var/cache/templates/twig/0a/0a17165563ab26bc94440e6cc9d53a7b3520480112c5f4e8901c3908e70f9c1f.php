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

/* __string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804 */
class __TwigTemplate_3dadf459a43b67e62f90c0ae8bff879c041b6feaf6fa6c8acbdf08537c1a3e44 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.vendor_days_before_suspend.subject");
    }

    public function getTemplateName()
    {
        return "__string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804";
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
        return new Source("{{ __(\"vendor_debt_payout.vendor_days_before_suspend.subject\") }}", "__string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804", "");
    }
}
