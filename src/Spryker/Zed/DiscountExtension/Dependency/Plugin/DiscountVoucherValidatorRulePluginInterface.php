<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountVoucherTransfer;
use Generated\Shared\Transfer\ErrorCollectionTransfer;

/**
 * Provides extension capabilities for the discount voucher validation.
 */
interface DiscountVoucherValidatorRulePluginInterface
{
    /**
     * Specification:
     * - Validates the provided discount voucher against a project specific rule.
     * - Returns an `ErrorCollection` with one `Error` per violation, the glossary key in `Error.message` and the
     *   validated transfer property path in `Error.entityIdentifier`.
     * - Returns an empty `ErrorCollection` when the rule is satisfied.
     *
     * @api
     */
    public function validate(DiscountVoucherTransfer $discountVoucherTransfer): ErrorCollectionTransfer;
}
