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

/* __string_template__0733d72778951e940ab0c00517f22237301512e63faab5762a44834e0f9877ca */
class __TwigTemplate_18b22364d55f845abc320880a58b5a52975192f835b0be0900384e35fbc6ed5c extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "usergroup_disactivated")]);
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_usergroup_disactivated", ["[usergroups]" => ($context["usergroups"] ?? null)]);
        echo "
  ";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__0733d72778951e940ab0c00517f22237301512e63faab5762a44834e0f9877ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"usergroup_disactivated\") } ) }}
    {{ __(\"text_usergroup_disactivated\", {\"[usergroups]\": usergroups}) }}
  {{ snippet(\"footer\") }}", "__string_template__0733d72778951e940ab0c00517f22237301512e63faab5762a44834e0f9877ca", "");
    }
}
