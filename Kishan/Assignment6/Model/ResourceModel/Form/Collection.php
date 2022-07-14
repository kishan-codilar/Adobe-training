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

    /**
     * @return $this|Collection|void
     */
//    protected function _initSelect()
//    {
//        $this->getSelect()
//            ->from(['main_table' => $this->getMainTable()])
//            ->joinInner(
//                'kishan_assignment',
//                'main_table.entity_id = kishan_assignment.address_id',
//                array('*')
//            );
//        echo '<pre>';
//       var_dump($this->getData());die();
//
//        return $this;
//    }
}
