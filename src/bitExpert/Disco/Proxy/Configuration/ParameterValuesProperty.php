<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco\Proxy\Configuration;

use ProxyManager\Generator\Util\UniqueIdentifierGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * The property will store the parameters which can be injected into the bean creation methods.
 * A parameter represents a value from the application configuration.
 */
class ParameterValuesProperty extends PropertyGenerator
{
    /**
     * Creates a new {@link \bitExpert\Disco\Proxy\Configuration\ParameterValuesProperty}.
     */
    public function __construct()
    {
        parent::__construct(UniqueIdentifierGenerator::getIdentifier('parameterValues'));

        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setDefaultValue([]);
        $this->setDocBlock('@var array Collection of scalar values which can be injected into beans');
    }
}
