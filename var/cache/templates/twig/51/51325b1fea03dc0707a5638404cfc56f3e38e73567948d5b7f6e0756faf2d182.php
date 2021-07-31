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

/* __string_template__d4ae422266982a58efa8c3bf6b769b56407987523ef2a98382ba10c989aeaee8 */
class __TwigTemplate_c4aa37d63f11f624a0dc66e6f0cd3b93e739c18fb06af27ec92abf3482ed9e9e extends \Twig\Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute(($context["p"] ?? null), "tax", []);
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__d4ae422266982a58efa8c3bf6b769b56407987523ef2a98382ba10c989aeaee8";
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
        return new Source("<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">{{ p.tax }}</strong></p>", "__string_template__d4ae422266982a58efa8c3bf6b769b56407987523ef2a98382ba10c989aeaee8", "");
    }
}
