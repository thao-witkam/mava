<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f48045a35da4b426cb60d2da4d4ad9707f59e5d163ac944b14ec148d00bf739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f48045a35da4b426cb60d2da4d4ad9707f59e5d163ac944b14ec148d00bf739->enter($__internal_2f48045a35da4b426cb60d2da4d4ad9707f59e5d163ac944b14ec148d00bf739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ca60cb5a26107319d9df89065ce4d303093811240ab7a7a1ad422774bc75bec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca60cb5a26107319d9df89065ce4d303093811240ab7a7a1ad422774bc75bec8->enter($__internal_ca60cb5a26107319d9df89065ce4d303093811240ab7a7a1ad422774bc75bec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2f48045a35da4b426cb60d2da4d4ad9707f59e5d163ac944b14ec148d00bf739->leave($__internal_2f48045a35da4b426cb60d2da4d4ad9707f59e5d163ac944b14ec148d00bf739_prof);

        
        $__internal_ca60cb5a26107319d9df89065ce4d303093811240ab7a7a1ad422774bc75bec8->leave($__internal_ca60cb5a26107319d9df89065ce4d303093811240ab7a7a1ad422774bc75bec8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10c6a11b9ef3fdf20c3072a9b3fd5dd5685eca59c2029ddce11854f51359b485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c6a11b9ef3fdf20c3072a9b3fd5dd5685eca59c2029ddce11854f51359b485->enter($__internal_10c6a11b9ef3fdf20c3072a9b3fd5dd5685eca59c2029ddce11854f51359b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1221f44fa9caa6ea378add00dd111ab3b9b8c02803c5b93368b9c59035184a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1221f44fa9caa6ea378add00dd111ab3b9b8c02803c5b93368b9c59035184a1->enter($__internal_a1221f44fa9caa6ea378add00dd111ab3b9b8c02803c5b93368b9c59035184a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1221f44fa9caa6ea378add00dd111ab3b9b8c02803c5b93368b9c59035184a1->leave($__internal_a1221f44fa9caa6ea378add00dd111ab3b9b8c02803c5b93368b9c59035184a1_prof);

        
        $__internal_10c6a11b9ef3fdf20c3072a9b3fd5dd5685eca59c2029ddce11854f51359b485->leave($__internal_10c6a11b9ef3fdf20c3072a9b3fd5dd5685eca59c2029ddce11854f51359b485_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a03734878fc601148a5548fc514fa6aef92a5c06ee538fa4016a76f6bdf5bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a03734878fc601148a5548fc514fa6aef92a5c06ee538fa4016a76f6bdf5bef->enter($__internal_6a03734878fc601148a5548fc514fa6aef92a5c06ee538fa4016a76f6bdf5bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae79cb918d529bf3ecfd194dd2244a24e9e9c1e9f38d037ab8120097c7a8287a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae79cb918d529bf3ecfd194dd2244a24e9e9c1e9f38d037ab8120097c7a8287a->enter($__internal_ae79cb918d529bf3ecfd194dd2244a24e9e9c1e9f38d037ab8120097c7a8287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae79cb918d529bf3ecfd194dd2244a24e9e9c1e9f38d037ab8120097c7a8287a->leave($__internal_ae79cb918d529bf3ecfd194dd2244a24e9e9c1e9f38d037ab8120097c7a8287a_prof);

        
        $__internal_6a03734878fc601148a5548fc514fa6aef92a5c06ee538fa4016a76f6bdf5bef->leave($__internal_6a03734878fc601148a5548fc514fa6aef92a5c06ee538fa4016a76f6bdf5bef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef11ab86b0058d36c3dd6b9f6293c03c93cd12911ce5875c212c1d7ad664510b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef11ab86b0058d36c3dd6b9f6293c03c93cd12911ce5875c212c1d7ad664510b->enter($__internal_ef11ab86b0058d36c3dd6b9f6293c03c93cd12911ce5875c212c1d7ad664510b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0089bc91ecfc599cb88d5f4b0694ee5fb9a8c11cf37e72aeae4d650dde32ab22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0089bc91ecfc599cb88d5f4b0694ee5fb9a8c11cf37e72aeae4d650dde32ab22->enter($__internal_0089bc91ecfc599cb88d5f4b0694ee5fb9a8c11cf37e72aeae4d650dde32ab22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0089bc91ecfc599cb88d5f4b0694ee5fb9a8c11cf37e72aeae4d650dde32ab22->leave($__internal_0089bc91ecfc599cb88d5f4b0694ee5fb9a8c11cf37e72aeae4d650dde32ab22_prof);

        
        $__internal_ef11ab86b0058d36c3dd6b9f6293c03c93cd12911ce5875c212c1d7ad664510b->leave($__internal_ef11ab86b0058d36c3dd6b9f6293c03c93cd12911ce5875c212c1d7ad664510b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acd98465446afe240ba1bbb973c635e4518276d560d16e6a7e58c5dc558e1e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd98465446afe240ba1bbb973c635e4518276d560d16e6a7e58c5dc558e1e19->enter($__internal_acd98465446afe240ba1bbb973c635e4518276d560d16e6a7e58c5dc558e1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91f4aef10af10ead0648fde39d44d512eda16b71f6bbdf209e99eec884b3d512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f4aef10af10ead0648fde39d44d512eda16b71f6bbdf209e99eec884b3d512->enter($__internal_91f4aef10af10ead0648fde39d44d512eda16b71f6bbdf209e99eec884b3d512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91f4aef10af10ead0648fde39d44d512eda16b71f6bbdf209e99eec884b3d512->leave($__internal_91f4aef10af10ead0648fde39d44d512eda16b71f6bbdf209e99eec884b3d512_prof);

        
        $__internal_acd98465446afe240ba1bbb973c635e4518276d560d16e6a7e58c5dc558e1e19->leave($__internal_acd98465446afe240ba1bbb973c635e4518276d560d16e6a7e58c5dc558e1e19_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/devmob/PhpstormProjects/samples/mava/app/Resources/views/base.html.twig");
    }
}
