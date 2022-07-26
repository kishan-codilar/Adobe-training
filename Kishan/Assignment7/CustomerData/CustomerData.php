<?php

namespace Kishan\Assignment7\CustomerData;

use Magento\Customer\Model\Session;
use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomerData implements SectionSourceInterface
{
    /**
     * @var Session
     */
    private Session $session;

    /**
     * CustomerData constructor.
     * @param Session $session
     */
    public function __construct(
        Session $session
    ) {
        $this->session=$session;
    }

    /**
     * Return Array with Data for a private block
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getSectionData()
    {
        return [
            "customername" => $this->session->getCustomer()->getName(),
        ];
    }
}
