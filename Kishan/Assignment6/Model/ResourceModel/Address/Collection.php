<?php

namespace Kishan\Assignment6\Model\ResourceModel\Address;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Kishan\Assignment6\Model\Address as Model;
use Kishan\Assignment6\Model\ResourceModel\Address as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Init
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
