<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco;

use Interop\Container\ContainerInterface;

/**
 * This interface is implemented by objects that hold a number of bean definitions,
 * each uniquely identified by a bean identifier (name).
 */
interface BeanFactory extends ContainerInterface
{
}
