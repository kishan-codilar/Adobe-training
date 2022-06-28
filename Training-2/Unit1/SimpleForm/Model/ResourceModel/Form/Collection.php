<?php

namespace Unit1\SimpleForm\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Unit1\SimpleForm\Model\Form as Model;
use Unit1\SimpleForm\Model\ResourceModel\Form as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
