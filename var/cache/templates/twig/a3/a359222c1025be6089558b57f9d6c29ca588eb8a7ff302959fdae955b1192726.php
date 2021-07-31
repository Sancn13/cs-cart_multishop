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

/* __string_template__a53b05df37d1fa15049d1374b861078759bab2c1842f99738a53e1d6fd02498f */
class __TwigTemplate_331186fd0772becf4e2d76973f2536b5e4e40cd4e06ecc8476667964d46e1614 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "new_shipment_was_created")]);
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["order_info"] ?? null), "firstname", [])]);
        echo "
    <br />
    <br /> ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "products_were_sent");
        echo "
    <br />
    <br />

    <b>";
        // line 8
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_id");
        echo "</b>:&nbsp;#";
        echo $this->getAttribute(($context["order_info"] ?? null), "order_id", []);
        echo "
    <br />
    <b>";
        // line 10
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping_method");
        echo "</b>:&nbsp;";
        echo $this->getAttribute(($context["shipment"] ?? null), "shipping", []);
        echo "
    <br />
    <b>";
        // line 12
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipment_date");
        echo "</b>:&nbsp;";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->dateFilter($this->getAttribute(($context["shipment"] ?? null), "timestamp", []), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "Appearance", []), "date_format", []) . ", ") . $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "Appearance", []), "time_format", [])));
        echo "
    <br /> ";
        // line 13
        if ($this->getAttribute(($context["shipment"] ?? null), "carrier_info", [])) {
            // line 14
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "carrier");
            echo "</b>:&nbsp;";
            echo $this->getAttribute($this->getAttribute(($context["shipment"] ?? null), "carrier_info", []), "name", []);
            echo "
    <br /> ";
        }
        // line 15
        echo " ";
        if ($this->getAttribute(($context["shipment"] ?? null), "tracking_number", [])) {
            // line 16
            echo "    <b>";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "tracking_number");
            echo "</b>:&nbsp; ";
            if ($this->getAttribute($this->getAttribute(($context["shipment"] ?? null), "carrier_info", []), "tracking_url", [])) {
                // line 17
                echo "    <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["shipment"] ?? null), "carrier_info", []), "tracking_url", []);
                echo "\">";
                echo $this->getAttribute(($context["shipment"] ?? null), "tracking_number", []);
                echo "</a> ";
            } else {
                echo " ";
                echo $this->getAttribute(($context["shipment"] ?? null), "tracking_number", []);
                echo " ";
            }
            // line 18
            echo "    <br />
    <br /> ";
        }
        // line 19
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["shipment"] ?? null), "carrier_info", []), "info", []);
        echo "

    <b>";
        // line 21
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "products");
        echo ":</b>
    <p>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["shipment"] ?? null), "products", []));
        foreach ($context['_seq'] as $context["hash"] => $context["amount"]) {
            echo " ";
            if (($context["amount"] > 0)) {
                echo " ";
                echo $context["amount"];
                echo "&nbsp;x&nbsp;";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["order_info"] ?? null), "products", []), $context["hash"], [], "array"), "product", []);
                echo "
      <br /> ";
                // line 24
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["order_info"] ?? null), "products", []), $context["hash"], [], "array"), "product_options", [])) {
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["order_info"] ?? null), "products", []), $context["hash"], [], "array"), "product_options", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " ";
                        echo $this->getAttribute($context["option"], "option_name", []);
                        echo ":&nbsp;";
                        echo $this->getAttribute($context["option"], "variant_name", []);
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        echo " ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "      <br /> ";
                }
                // line 26
                echo "      <br /> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hash'], $context['amount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </p>

    ";
        // line 29
        if ($this->getAttribute(($context["shipment"] ?? null), "comments", [])) {
            // line 30
            echo "    <br />
    <br />
    <b>";
            // line 32
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "comments");
            echo "</b>: ";
            echo $this->getAttribute(($context["shipment"] ?? null), "comments", []);
            echo " ";
        }
        // line 33
        echo "
  ";
        // line 34
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__a53b05df37d1fa15049d1374b861078759bab2c1842f99738a53e1d6fd02498f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 34,  188 => 33,  182 => 32,  178 => 30,  176 => 29,  172 => 27,  164 => 26,  161 => 25,  122 => 24,  110 => 23,  105 => 21,  99 => 19,  95 => 18,  84 => 17,  79 => 16,  76 => 15,  68 => 14,  66 => 13,  60 => 12,  53 => 10,  46 => 8,  39 => 4,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", { \"title\" : __(\"new_shipment_was_created\") }) }}
    {{__(\"hello_name\", {\"[name]\" : order_info.firstname})}}
    <br />
    <br /> {{ __(\"products_were_sent\") }}
    <br />
    <br />

    <b>{{ __(\"order_id\") }}</b>:&nbsp;#{{ order_info.order_id }}
    <br />
    <b>{{ __(\"shipping_method\") }}</b>:&nbsp;{{ shipment.shipping }}
    <br />
    <b>{{ __(\"shipment_date\") }}</b>:&nbsp;{{ shipment.timestamp|date(\"#{settings.Appearance.date_format}, #{settings.Appearance.time_format}\") }}
    <br /> {% if shipment.carrier_info %}
    <b>{{ __(\"carrier\") }}</b>:&nbsp;{{ shipment.carrier_info.name }}
    <br /> {% endif %} {% if shipment.tracking_number %}
    <b>{{ __(\"tracking_number\") }}</b>:&nbsp; {% if shipment.carrier_info.tracking_url %}
    <a href=\"{{ shipment.carrier_info.tracking_url }}\">{{ shipment.tracking_number }}</a> {% else %} {{ shipment.tracking_number }} {% endif %}
    <br />
    <br /> {% endif %} {{ shipment.carrier_info.info }}

    <b>{{ __(\"products\") }}:</b>
    <p>
      {% for hash, amount in shipment.products %} {% if amount > 0 %} {{ amount }}&nbsp;x&nbsp;{{ order_info.products[hash].product }}
      <br /> {% if order_info.products[hash].product_options %} {% for option in order_info.products[hash].product_options %} {{ option.option_name }}:&nbsp;{{ option.variant_name }}{% if not loop.last%}, {% endif %} {% endfor %}
      <br /> {% endif %}
      <br /> {% endif %} {% endfor %}
    </p>

    {% if shipment.comments %}
    <br />
    <br />
    <b>{{ __(\"comments\") }}</b>: {{ shipment.comments }} {% endif %}

  {{ snippet(\"footer\") }}", "__string_template__a53b05df37d1fa15049d1374b861078759bab2c1842f99738a53e1d6fd02498f", "");
    }
}
