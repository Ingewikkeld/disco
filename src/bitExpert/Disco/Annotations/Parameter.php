<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco\Annotations;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\AnnotationException;

/**
 * @Annotation
 * @Target({"ANNOTATION"})
 * @Attributes({
 *   @Attribute("name", type = "string"),
 *   @Attribute("default", type = "string"),
 *   @Attribute("required", type = "bool")
 * })
 */
class Parameter
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $defaultValue;
    /**
     * @var bool
     */
    protected $required;

    /**
     * Creates a new {@link \bitExpert\Disco\Annotations\Parameter}.
     *
     * @param array $attributes
     * @throws AnnotationException
     */
    public function __construct(array $attributes = [])
    {
        if (isset($attributes['value']) && isset($attributes['value']['name'])) {
            $this->name = $attributes['value']['name'];
        } else {
            throw new AnnotationException('name attribute missing!');
        }

        if (isset($attributes['value']) && isset($attributes['value']['default'])) {
            $this->defaultValue = $attributes['value']['default'];
        }

        $this->required = true;
        if (isset($attributes['value']) && isset($attributes['value']['required'])) {
            $this->required = (bool) $attributes['value']['required'];
        }
    }

    /**
     * Returns the name of the configuration value to use.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the default value to use in case the configuration value is not defined.
     *
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Returns true if the parameter is required, false for an optional parameter.
     *
     * @return bool
     */
    public function isRequired()
    {
        return $this->required;
    }
}
