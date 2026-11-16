<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\AgentPageExtension\Dependency\Plugin;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Use this plugin interface for expanding the agent login form with additional fields.
 */
interface AgentLoginFormExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the agent login form with additional fields (e.g. a CAPTCHA challenge field).
     * - Executed when the login form is built; must not change the existing fields.
     *
     * @api
     *
     * @param array<string, mixed> $options
     */
    public function expand(FormBuilderInterface $builder, array $options): FormBuilderInterface;
}
