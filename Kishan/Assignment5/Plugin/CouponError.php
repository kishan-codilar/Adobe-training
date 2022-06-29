<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Kishan\Assignment5\Plugin;

use Magento\Checkout\Controller\Cart\CouponPost;

class CouponError extends \Magento\Checkout\Controller\Cart\CouponPost
{
    /**
     * * returns Magento\Framework\Controller\Result\Redirect
     *
     * @param CouponPost $subject
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function aroundExecute(CouponPost $subject)
    {
        $couponCode = $this->getRequest()->getParam('remove') == 1
            ? ''
            : trim($this->getRequest()->getParam('coupon_code'));

        if ($couponCode) {
            $subject->messageManager->addErrorMessage(
                __(
                    'The coupon code "%1" is not valid.',
                    $couponCode
                )
            );
        }
        return $subject->_goBack();
    }
}
