<?php

/* test/test.html.twig */
class __TwigTemplate_530e277378fc59c6b06f08f3dd46b9e71b3b94bb2da779fb4a42f3e63c7bb7ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<body>

<div id=\"home\"class=\"container-fluid\">
    <header class=\"row\">
        <h1>Easy Wedding</h1>



    </header>
    <main class=\"row\">
        <nav class=\"col-lg-12\">
            <h1 id=\"id1\">Connexion</h1>
            <input type=\"text\" name=\"name\"><input type=\"password\" name=\"mdp\"><input type=\"submit\" name=\"submit\">
            <ul>
                <li>Home</li>
                <li>Inscription</li>
                <li>Photos</li>
                <li>Contact</li>
            </ul>
        </nav>


        <article  class=\"col-lg-6\">
            <h1>article1</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum delectus quidem nobis, impedit soluta mollitia dignissimos error itaque tempora. Aspernatur sed blanditiis libero culpa quos, nisi atque esse nihil Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga maiores pariatur alias vitae tenetur nemo quis inventore, minima magnam, deserunt odit nam! Nulla magnam pariatur obcaecati, qui quam, impedit sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi aliquam cupiditate delectus natus amet. Incidunt repudiandae deserunt, illum quaerat ipsum rem odio commodi cupiditate deleniti ea expedita consectetur, natus.
        </article>
        <article class=\"col-lg-6\">
            <h1>article2</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum delectus quidem nobis, impedit soluta mollitia dignissimos error itaque tempora. Aspernatur sed blanditiis libero culpa quos, nisi atque esse nihil Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga maiores pariatur alias vitae tenetur nemo quis inventore, minima magnam, deserunt odit nam! Nulla magnam pariatur obcaecati, qui quam, impeditlorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis fugit doloribus sunt sapiente, corrupti numquam, earum molestiae iure maxime in nostrum sit facilis nemo. Magnam quam voluptate consequatur inventore numquam?
        </article>
    </main>
</div>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<body>

<div id=\"home\"class=\"container-fluid\">
    <header class=\"row\">
        <h1>Easy Wedding</h1>



    </header>
    <main class=\"row\">
        <nav class=\"col-lg-12\">
            <h1 id=\"id1\">Connexion</h1>
            <input type=\"text\" name=\"name\"><input type=\"password\" name=\"mdp\"><input type=\"submit\" name=\"submit\">
            <ul>
                <li>Home</li>
                <li>Inscription</li>
                <li>Photos</li>
                <li>Contact</li>
            </ul>
        </nav>


        <article  class=\"col-lg-6\">
            <h1>article1</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum delectus quidem nobis, impedit soluta mollitia dignissimos error itaque tempora. Aspernatur sed blanditiis libero culpa quos, nisi atque esse nihil Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga maiores pariatur alias vitae tenetur nemo quis inventore, minima magnam, deserunt odit nam! Nulla magnam pariatur obcaecati, qui quam, impedit sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi aliquam cupiditate delectus natus amet. Incidunt repudiandae deserunt, illum quaerat ipsum rem odio commodi cupiditate deleniti ea expedita consectetur, natus.
        </article>
        <article class=\"col-lg-6\">
            <h1>article2</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum delectus quidem nobis, impedit soluta mollitia dignissimos error itaque tempora. Aspernatur sed blanditiis libero culpa quos, nisi atque esse nihil Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga maiores pariatur alias vitae tenetur nemo quis inventore, minima magnam, deserunt odit nam! Nulla magnam pariatur obcaecati, qui quam, impeditlorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis fugit doloribus sunt sapiente, corrupti numquam, earum molestiae iure maxime in nostrum sit facilis nemo. Magnam quam voluptate consequatur inventore numquam?
        </article>
    </main>
</div>

</body>
{% endblock %}
", "test/test.html.twig", "C:\\Users\\Dell\\Documents\\ProjectEssaie\\templates\\test\\test.html.twig");
    }
}
