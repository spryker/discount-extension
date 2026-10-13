<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountConfigurationOptionsTransfer;

/**
 * Provides extension capabilities for the discount configuration options.
 */
interface DiscountConfigurationOptionsExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the provided discount configuration options with additional options.
     *
     * @api
     */
    public function expand(
        DiscountConfigurationOptionsTransfer $discountConfigurationOptionsTransfer
    ): DiscountConfigurationOptionsTransfer;
}
