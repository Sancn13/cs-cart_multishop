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

/* __string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7 */
class __TwigTemplate_bb47e51060ca457b37a1fecbf66ca22dc3daf829c3458d4b18f47fb419eeb295 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7";
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
        return new Source("{{ __(\"vendor_plans.revenue_exceeded_subj\") }}", "__string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7", "");
    }
}
