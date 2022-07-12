<?php

namespace Kishan\Assignment6\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Address extends AbstractDb
{

    public const TABLE_NAME = 'kishan_assignment';
    public const ID_FIELD_NAME = 'id';

    /**
     * Init
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD_NAME);
    }
}
