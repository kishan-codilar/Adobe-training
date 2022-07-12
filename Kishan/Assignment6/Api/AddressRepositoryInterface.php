<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Model\Form;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;

interface AddressRepositoryInterface
{
    /**
     * GetId
     *
     * @param Entity_id $id
     * @return array[]
     */
    public function getById($id);
}
