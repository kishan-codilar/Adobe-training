<?php

namespace Unit1\SimpleForm\Model;

use Magento\Framework\Model\AbstractModel;
use Unit1\SimpleForm\Model\ResourceModel\Form as ResourceModel;

class Form extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
