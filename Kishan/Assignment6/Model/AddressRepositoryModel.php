<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\AddressRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Kishan\Assignment6\Model\AddressFactory as ModelFactory;
use Kishan\Assignment6\Api\Data\AddressInterface;
use Kishan\Assignment6\Model\ResourceModel\Address\CollectionFactory;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;
use Kishan\Assignment6\Model\ResourceModel\Address as ResourceModel;

class AddressRepositoryModel implements AddressRepositoryInterface
{
    /**
     * @var FormFactory
     */
    private $modelFactory;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var ResourceModel
     */
    private ResourceModel $resourceModel;

    public function __construct(
        ModelFactory $modelFactory,
        CollectionFactory $collectionFactory,
        ResourceModel $resourceModel
    ) {
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->resourceModel = $resourceModel;
    }

    /**
     * @param int $id
     * @return \Kishan\Assignment6\Model\Address
     */
    public function getById($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model;
    }

    /**
     * Return Collection
     *
     * @return ResourceModel\Address\Collection
     */
    public function getCollection()
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }

    /**
     * @param $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function getAddressDataId($id)
    {
        $collection = $this->getCollection()->addFieldToFilter('address_id', $id);
        return $collection->getData();
    }
}
