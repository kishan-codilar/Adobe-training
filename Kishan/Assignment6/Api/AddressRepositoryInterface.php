<?php

namespace Kishan\Assignment6\Api;

use Kishan\Assignment6\Model\Form;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;

interface AddressRepositoryInterface
{
    /**
     * GetId
     *
     * @param int $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function getById($id);

    /**
     * Return Collection
     *
     * @return array Collection[]
     */
    public function getCollection();

    /**
     * Return AddressDataId
     *
     * @param int $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function getAddressDataId($id);
}
