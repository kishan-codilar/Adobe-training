<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Model\Form;

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
     * @return mixed
     */
    public function getCollection();
}
