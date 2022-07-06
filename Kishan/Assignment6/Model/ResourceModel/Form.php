<?php

namespace Kishan\Assignment6\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Form extends AbstractDb
{

    public const TABLE_NAME = 'kishandb';
    public const ID_FIELD_NAME = 'entity_id';

    /**
     * Init
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD_NAME);
    }
}
