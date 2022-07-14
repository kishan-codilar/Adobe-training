<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Model\Form;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;

interface FormRepositoryInterface
{

    /**
     * GetId
     *
     * @param int $entityId
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function getById($entityId);

    /**
     * GetCollection
     *
     * @return array
     */
    public function getCollection();

    /**
     * @param $id
     * @return mixed
     */
    public function getDataById($id);
}
