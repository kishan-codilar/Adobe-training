<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Kishan\Assignment5\Controller\Cart;

class CouponPost extends \Magento\Checkout\Controller\Cart\CouponPost
{
    /**
     * * returns Magento\Framework\Controller\Result\Redirect
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $couponCode = $this->getRequest()->getParam('remove') == 1
            ? ''
            : trim($this->getRequest()->getParam('coupon_code'));

        if ($couponCode) {
            $this->messageManager->addErrorMessage(
                __(
                    'The coupon code "%1" is not valid.',
                    $couponCode
                )
            );
        }
        return $this->_goBack();
    }
}
