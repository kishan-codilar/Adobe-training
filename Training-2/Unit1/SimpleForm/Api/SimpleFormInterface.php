<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit1\SimpleForm\Api;

/**
 * @api
 * @since 100.0.2
 */
interface SimpleFormInterface
{
    /**
     * * return string
     *
     * @return string
     */
    public function getIndexUrl();

    /**
     * * return string
     *
     * @return string
     */
    public function getAddUrl();

    /**
     * * return array[]
     *
     * @return array[]
     */
    public function getAllDetails();
}
