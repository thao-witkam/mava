<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_082a91335f7cbd6f8fc2324f0d987ab4e0adc82f6d4659533804eef636383a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082a91335f7cbd6f8fc2324f0d987ab4e0adc82f6d4659533804eef636383a02->enter($__internal_082a91335f7cbd6f8fc2324f0d987ab4e0adc82f6d4659533804eef636383a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1421d8fa3feb85a2192effe11c893f375a801d0ef638ca0601d10de46d212d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1421d8fa3feb85a2192effe11c893f375a801d0ef638ca0601d10de46d212d4e->enter($__internal_1421d8fa3feb85a2192effe11c893f375a801d0ef638ca0601d10de46d212d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_082a91335f7cbd6f8fc2324f0d987ab4e0adc82f6d4659533804eef636383a02->leave($__internal_082a91335f7cbd6f8fc2324f0d987ab4e0adc82f6d4659533804eef636383a02_prof);

        
        $__internal_1421d8fa3feb85a2192effe11c893f375a801d0ef638ca0601d10de46d212d4e->leave($__internal_1421d8fa3feb85a2192effe11c893f375a801d0ef638ca0601d10de46d212d4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d32b11b1c2eae272c1766fa0624ad8fb923c7d049735aec52a7a14c3bfd23681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32b11b1c2eae272c1766fa0624ad8fb923c7d049735aec52a7a14c3bfd23681->enter($__internal_d32b11b1c2eae272c1766fa0624ad8fb923c7d049735aec52a7a14c3bfd23681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_347627246c999d3814746ef3087402ef356d3166eb0a40a1963acaaed9a86eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347627246c999d3814746ef3087402ef356d3166eb0a40a1963acaaed9a86eff->enter($__internal_347627246c999d3814746ef3087402ef356d3166eb0a40a1963acaaed9a86eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_347627246c999d3814746ef3087402ef356d3166eb0a40a1963acaaed9a86eff->leave($__internal_347627246c999d3814746ef3087402ef356d3166eb0a40a1963acaaed9a86eff_prof);

        
        $__internal_d32b11b1c2eae272c1766fa0624ad8fb923c7d049735aec52a7a14c3bfd23681->leave($__internal_d32b11b1c2eae272c1766fa0624ad8fb923c7d049735aec52a7a14c3bfd23681_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae374d72581ddd8e994518a1ea926e7950dead22e69bf1d1da3357e909250606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae374d72581ddd8e994518a1ea926e7950dead22e69bf1d1da3357e909250606->enter($__internal_ae374d72581ddd8e994518a1ea926e7950dead22e69bf1d1da3357e909250606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_034fe031bfc789a76dcc51820ba609bebaf1dcbdabb0f1733388240c9ad7e61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034fe031bfc789a76dcc51820ba609bebaf1dcbdabb0f1733388240c9ad7e61f->enter($__internal_034fe031bfc789a76dcc51820ba609bebaf1dcbdabb0f1733388240c9ad7e61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_034fe031bfc789a76dcc51820ba609bebaf1dcbdabb0f1733388240c9ad7e61f->leave($__internal_034fe031bfc789a76dcc51820ba609bebaf1dcbdabb0f1733388240c9ad7e61f_prof);

        
        $__internal_ae374d72581ddd8e994518a1ea926e7950dead22e69bf1d1da3357e909250606->leave($__internal_ae374d72581ddd8e994518a1ea926e7950dead22e69bf1d1da3357e909250606_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e90d64bcca3c780b26402960d1a31ce62e913d086c263a0517efb2e5b2deb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e90d64bcca3c780b26402960d1a31ce62e913d086c263a0517efb2e5b2deb2c->enter($__internal_6e90d64bcca3c780b26402960d1a31ce62e913d086c263a0517efb2e5b2deb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a047affd89842fa153afb82c9dab8c19a5c01f69530f655da4c900a338da323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a047affd89842fa153afb82c9dab8c19a5c01f69530f655da4c900a338da323->enter($__internal_0a047affd89842fa153afb82c9dab8c19a5c01f69530f655da4c900a338da323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0a047affd89842fa153afb82c9dab8c19a5c01f69530f655da4c900a338da323->leave($__internal_0a047affd89842fa153afb82c9dab8c19a5c01f69530f655da4c900a338da323_prof);

        
        $__internal_6e90d64bcca3c780b26402960d1a31ce62e913d086c263a0517efb2e5b2deb2c->leave($__internal_6e90d64bcca3c780b26402960d1a31ce62e913d086c263a0517efb2e5b2deb2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/devmob/PhpstormProjects/samples/mava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
