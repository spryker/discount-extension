<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

use Generated\Shared\Transfer\DiscountRuleValueValidationResponseTransfer;

/**
 * Provides extension capabilities for validating the values of a discount rule field when the discount is saved.
 *
 * Use this plugin interface together with `DecisionRulePluginInterface` or `DiscountableItemCollectorPluginInterface`.
 */
interface DiscountRuleWithValueValidationPluginInterface
{
    /**
     * Specification:
     * - Validates the values of a discount rule clause that compares exact values: `=`, `!=`, `is in` and `is not in`.
     * - Receives every entry of an `is in` and `is not in` list as a separate value.
     * - Receives the values lowercased, so they have to be matched case-insensitively.
     * - Returns `isSuccessful=true` and no invalid values when every value is valid for the field.
     * - Returns `isSuccessful=false` and the received values that are not valid for the field in `invalidValues` otherwise.
     *
     * @api
     *
     * @param list<string> $values
     */
    public function validateQueryStringValues(array $values): DiscountRuleValueValidationResponseTransfer;
}
