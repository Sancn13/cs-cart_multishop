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

/* __string_template__23e393fc819720e5ba48a6bcd25d602847ce4a2b1eb1158c9299fc96db2e106b */
class __TwigTemplate_18755358e2011b046b962b3808c760eeb8b6be78236fd071ed519610459e493c extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "recover_password_subj")]);
        echo "
        ";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_confirm_passwd_recovery");
        echo ":<br /><br />
        <a href=\"";
        // line 3
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__23e393fc819720e5ba48a6bcd25d602847ce4a2b1eb1158c9299fc96db2e106b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  38 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", { \"title\" : __(\"recover_password_subj\") }) }}
        {{ __(\"text_confirm_passwd_recovery\") }}:<br /><br />
        <a href=\"{{ url }}\">{{ url|puny_decode }}</a>
    {{ snippet(\"footer\") }}
", "__string_template__23e393fc819720e5ba48a6bcd25d602847ce4a2b1eb1158c9299fc96db2e106b", "");
    }
}
