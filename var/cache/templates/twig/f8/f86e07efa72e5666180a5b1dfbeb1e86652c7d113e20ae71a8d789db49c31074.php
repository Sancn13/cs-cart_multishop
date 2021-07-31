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

/* __string_template__98719a7a23b6eb9276f39f700fb7e6e796879ae7cd31e572e76575c6f7872bec */
class __TwigTemplate_34ea6249ae60dd3da6820b604350f3c032c23fcb441045e3b1459ab6e270c9eb extends \Twig\Template
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
        echo "
        ";
        // line 2
        if ((((((($this->getAttribute(($context["u"] ?? null), "b_firstname", []) || $this->getAttribute(($context["u"] ?? null), "b_lastname", [])) || $this->getAttribute(($context["u"] ?? null), "b_address", [])) || $this->getAttribute(($context["u"] ?? null), "b_address_2", [])) || $this->getAttribute(($context["u"] ?? null), "b_city", [])) || $this->getAttribute(($context["u"] ?? null), "b_state_descr", [])) || $this->getAttribute(($context["u"] ?? null), "b_zipcode", []))) {
            // line 3
            echo "        <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "bill_to");
            echo "</h2>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <strong>";
            // line 5
            echo $this->getAttribute(($context["u"] ?? null), "b_firstname", []);
            echo " ";
            echo $this->getAttribute(($context["u"] ?? null), "b_lastname", []);
            echo "</strong>
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 8
            echo $this->getAttribute(($context["u"] ?? null), "b_address", []);
            echo " <br>";
            echo $this->getAttribute(($context["u"] ?? null), "b_address_2", []);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 11
            echo $this->getAttribute(($context["u"] ?? null), "b_city", []);
            echo ", ";
            echo $this->getAttribute(($context["u"] ?? null), "b_state_descr", []);
            echo " ";
            echo $this->getAttribute(($context["u"] ?? null), "b_zipcode", []);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 14
            echo $this->getAttribute(($context["u"] ?? null), "b_country_descr", []);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <bdi>";
            // line 17
            echo $this->getAttribute(($context["u"] ?? null), "b_phone", []);
            echo "</bdi>
        </p>
        ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__98719a7a23b6eb9276f39f700fb7e6e796879ae7cd31e572e76575c6f7872bec";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  67 => 14,  57 => 11,  49 => 8,  41 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
        {% if u.b_firstname or u.b_lastname or u.b_address or u.b_address_2 or u.b_city or u.b_state_descr or u.b_zipcode %}
        <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">{{__(\"bill_to\")}}</h2>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <strong>{{u.b_firstname}} {{u.b_lastname}}</strong>
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            {{u.b_address}} <br>{{u.b_address_2}}
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            {{u.b_city}}, {{u.b_state_descr}} {{u.b_zipcode}}
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            {{u.b_country_descr}}
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <bdi>{{u.b_phone}}</bdi>
        </p>
        {% endif %}
", "__string_template__98719a7a23b6eb9276f39f700fb7e6e796879ae7cd31e572e76575c6f7872bec", "");
    }
}
