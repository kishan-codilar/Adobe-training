<?php

namespace Kishan\Assignment5\Plugin;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Quote\Model\CouponManagement as Subject;

class CouponManagement
{
    /**
     * @var \Magento\Quote\Api\CartRepositoryInterface
     */
    protected $quoteRepository;

    /**
     * CouponManagement constructor.
     * @param \Magento\Quote\Api\CartRepositoryInterface $quoteRepository
     */
    public function __construct(
        \Magento\Quote\Api\CartRepositoryInterface $quoteRepository
    ) {
        $this->quoteRepository = $quoteRepository;
    }
    /**
     * * AroundSet
     *
     * @param Subject $subject
     * @param callable $proceed
     * @param int $cartId
     * @param string $couponCode
     * @return true
     * @throws NoSuchEntityException
     */
    public function aroundSet(Subject $subject, callable $proceed, int $cartId, string $couponCode)
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
