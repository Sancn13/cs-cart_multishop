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

/* __string_template__c088df6a108b62a48fb7681d28a691fdb976670f9c5569518f6d662c28ffb605 */
class __TwigTemplate_d209a9ec55eaeb8c3d189c61bd2c0e3e1e09d7a0cdd73b15c54e033e88b0def5 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "event.vendor_status_changed.suspended.title");
    }

    public function getTemplateName()
    {
        return "__string_template__c088df6a108b62a48fb7681d28a691fdb976670f9c5569518f6d662c28ffb605";
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
        return new Source("{{ __(\"event.vendor_status_changed.suspended.title\") }}", "__string_template__c088df6a108b62a48fb7681d28a691fdb976670f9c5569518f6d662c28ffb605", "");
    }
}
