<?php

namespace Nmb\TwigExtensionsBundle\Twig\Extensions;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ParametersHelper extends \Twig_Extension
{

    private $container;

    public function __construct(ContainerInterface  $container)
    {

        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            'getParameter' => new \Twig_Function_Method($this, 'getParameter'),
        );
    }

    public function getParameter($name)
    {
        return $this->container->getParameter($name);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'nmb_Parameters_helper';
    }
}