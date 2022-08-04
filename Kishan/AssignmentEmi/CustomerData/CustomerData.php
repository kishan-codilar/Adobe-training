<?php

namespace Kishan\AssignmentEmi\CustomerData;

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
     * Return Array with data for a private block
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getSectionData()
    {
        $gender=$this->session->getCustomer()->getGender();
        if ($gender==1) {
            $gender = 'male';
        } elseif ($gender) {
            $gender='female';
        }
        return [
            "customergender" => $gender,
        ];
    }
}
