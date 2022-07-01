<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Kishan\Assignment5\Model;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Coupon management object.
 */
class CouponManagement extends \Magento\Quote\Model\CouponManagement
{
    /**
     * @inheritDoc
     */
    public function set($cartId, $couponCode)
    {
        /** @var  \Magento\Quote\Model\Quote $quote */
        $quote = $this->quoteRepository->getActive($cartId);
        $code = $quote->setCouponCode($couponCode);
        if ($code) {
            throw new NoSuchEntityException(__("The coupon code is not Valid."));
        }
        return true;
    }
}
