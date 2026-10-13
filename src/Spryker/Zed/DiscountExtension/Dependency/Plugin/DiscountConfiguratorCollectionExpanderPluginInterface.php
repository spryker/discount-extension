<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountConfiguratorCollectionTransfer;

/**
 * Provides extension capabilities for a discount configurator collection read as a whole, so that a plugin can load
 * its data for every discount with one query instead of once per discount.
 */
interface DiscountConfiguratorCollectionExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands every `DiscountConfiguratorCollection.discountConfigurators` entry with additional data.
     * - Is called once per collection; implementations are expected to load their data in bulk by the discount ids.
     *
     * @api
     */
    public function expand(
        DiscountConfiguratorCollectionTransfer $discountConfiguratorCollectionTransfer
    ): DiscountConfiguratorCollectionTransfer;
}
