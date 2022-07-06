<?php

namespace Kishan\Assignment6\Model;

use Magento\Framework\Model\AbstractModel;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;

class Form extends AbstractModel
{
    /**
     * Init
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
