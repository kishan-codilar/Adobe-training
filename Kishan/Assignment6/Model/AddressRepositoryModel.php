<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\AddressRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Kishan\Assignment6\Model\AddressFactory as ModelFactory;
use Kishan\Assignment6\Api\Data\AddressInterface;
use Kishan\Assignment6\Model\ResourceModel\Address\CollectionFactory;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;
use Kishan\Assignment6\Model\ResourceModel\Address as ResourceModel;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Kishan\Assignment6\Api\Data\FormSearchResultInterfaceFactory;

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
    /**
     * @var CollectionProcessorInterface
     */
    private CollectionProcessorInterface $collectionProcessor;

    /**
     * AddressRepositoryModel constructor.
     * @param AddressFactory $modelFactory
     * @param CollectionFactory $collectionFactory
     * @param ResourceModel $resourceModel
     * @param CollectionProcessorInterface $collectionProcessor
     * @param FormSearchResultInterfaceFactory $formSearchResultInterfaceFactory
     */
    public function __construct(
        ModelFactory $modelFactory,
        CollectionFactory $collectionFactory,
        ResourceModel $resourceModel,
        CollectionProcessorInterface $collectionProcessor,
        FormSearchResultInterfaceFactory $formSearchResultInterfaceFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionProcessor = $collectionProcessor;
        $this->formSearchResultInterfaceFactory =$formSearchResultInterfaceFactory;
    }

    /**
     * Get the Data by Id
     *
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
     * Gets the Address data
     *
     * @param int $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function getAddressDataId($id)
    {
        $collection = $this->getCollection()->addFieldToFilter('address_id', $id);
        return $collection->getData();
    }
    /**
     * Get Data list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Kishan\Assignment6\Api\Data\FormSearchResultInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, ($collection));
        $searchResults = $this->formSearchResultInterfaceFactory->create();
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setSearchCriteria($searchCriteria);
        return $searchResults;
    }
}
