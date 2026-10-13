<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountConfiguratorTransfer;
use Generated\Shared\Transfer\ErrorCollectionTransfer;

/**
 * Provides extension capabilities for the discount configurator validation.
 */
interface DiscountConfiguratorValidatorRulePluginInterface
{
    /**
     * Specification:
     * - Validates the provided discount configurator against a project specific rule.
     * - Returns an `ErrorCollection` with one `Error` per violation, the glossary key in `Error.message` and the
     *   validated transfer property path in `Error.entityIdentifier`.
     * - Returns an empty `ErrorCollection` when the rule is satisfied.
     *
     * @api
     */
    public function validate(DiscountConfiguratorTransfer $discountConfiguratorTransfer): ErrorCollectionTransfer;
}
