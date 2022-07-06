<?php

namespace Kishan\Assignment6\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Kishan\Assignment6\Model\Form as Model;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;

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
