<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Model\Form;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;

interface FormRepositoryInterface
{

    /**
     * GetId
     *
     * @param Entity_id $entity_id
     * @return array[]
     */
    public function getById($entity_id);

    /**
     * GetCollection
     *
     * @return array
     */
    public function getCollection();

    public function getDataById($id);
}
