<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DiscountExtension\Dependency\Plugin;

/**
 * Provides extension capabilities for loading the values of a discount rule field on demand.
 *
 * Use this plugin interface together with `DecisionRulePluginInterface` or `DiscountableItemCollectorPluginInterface`.
 */
interface DiscountRuleWithValueSuggestUrlPluginInterface
{
    /**
     * Specification:
     * - Returns the Back Office URL that suggests values for the field of the discount rule.
     * - The URL is requested with the `term` query parameter that holds the text typed by the user.
     * - The URL responds with JSON in the `{"results": [{"id": "<value>", "text": "<label>"}]}` format.
     * - `id` is the value stored in the discount query string, it is compared by the discount rule.
     *
     * @api
     */
    public function getQueryStringValueSuggestUrl(): string;
}
