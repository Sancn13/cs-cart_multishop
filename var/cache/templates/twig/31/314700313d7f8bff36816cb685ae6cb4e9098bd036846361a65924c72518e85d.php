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

/* __string_template__21368d9947a145819deaac0e4ac039a7491d5f3d548b03d890d4dcd88fe59130 */
class __TwigTemplate_93ad218ccf3d65e2c9089b77f71bd452b3c562420c2d5ceab9e6862b0551660d extends \Twig\Template
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
        $context["parts"] = [0 => $this->getAttribute(($context["c"] ?? null), "city", [])];
        // line 2
        if ($this->getAttribute(($context["c"] ?? null), "state_descr", [])) {
            // line 3
            echo "    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
            $context["parts"] = twig_array_merge(($context["parts"] ?? null), [0 => $this->getAttribute(($context["c"] ?? null), "state_descr", [])]);
            echo "</p>
";
        }
        // line 5
        echo "
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 6
        echo $this->getAttribute(($context["c"] ?? null), "address", []);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 7
        echo twig_join_filter(($context["parts"] ?? null), ", ");
        echo " ";
        echo $this->getAttribute(($context["c"] ?? null), "zipcode", []);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 8
        echo $this->getAttribute(($context["c"] ?? null), "country_descr", []);
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><bdi>";
        // line 9
        echo $this->getAttribute(($context["c"] ?? null), "phone", []);
        echo " </bdi></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 10
        echo $this->getAttribute(($context["c"] ?? null), "users_department", []);
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 11
        echo $this->getAttribute(($context["c"] ?? null), "website", []);
        echo " </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__21368d9947a145819deaac0e4ac039a7491d5f3d548b03d890d4dcd88fe59130";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  57 => 9,  53 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set parts = [c.city] %}
{% if c.state_descr %}
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{% set parts = parts|merge([c.state_descr]) %}</p>
{% endif %}

<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.address }}</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ parts|join(', ') }} {{ c.zipcode }}</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.country_descr }} </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><bdi>{{ c.phone }} </bdi></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.users_department }} </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.website }} </p>
", "__string_template__21368d9947a145819deaac0e4ac039a7491d5f3d548b03d890d4dcd88fe59130", "");
    }
}
