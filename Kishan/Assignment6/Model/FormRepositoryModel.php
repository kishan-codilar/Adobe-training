<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\FormRepositoryInterface;
use Kishan\Assignment6\Model\Form as Model;
use Kishan\Assignment6\Model\FormFactory as ModelFactory;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;
use Kishan\Assignment6\Api\Data\FormInterface;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;
use Kishan\Assignment6\Model\ResourceModel\Form\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Kishan\Assignment6\Api\Data\FormExtensionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Kishan\Assignment6\Api\Data\FormSearchResultInterfaceFactory;

class FormRepositoryModel implements FormRepositoryInterface
{
    /**
     * @var FormFactory
     */
    private FormFactory $modelFactory;

    /**
     * @var ResourceModel
     */
    private ResourceModel $resourceModel;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var FormInterface
     */
    private FormInterface $formInterface;

    /**
     * Order Extension Attributes Factory
     *
     * @var FormExtensionFactory
     */
    protected FormExtensionFactory $extensionFactory;
    /**
     * @var CollectionProcessorInterface
     */
    private CollectionProcessorInterface $collectionProcessor;
    /**
     * @var FormSearchResultInterfaceFactory
     */
    private FormSearchResultInterfaceFactory $formSearchResultInterfaceFactory;

    /**
     * FormRepositoryModel constructor.
     * @param CollectionFactory $collectionFactory
     * @param FormFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param FormInterface $formInterface
     * @param CollectionProcessorInterface $collectionProcessor
     * @param FormSearchResultInterfaceFactory $formSearchResultInterfaceFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        FormInterface $formInterface,
        CollectionProcessorInterface $collectionProcessor,
        FormSearchResultInterfaceFactory $formSearchResultInterfaceFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory = $collectionFactory;
        $this->formInterface = $formInterface;
        $this->collectionProcessor = $collectionProcessor;
        $this->formSearchResultInterfaceFactory = $formSearchResultInterfaceFactory;
    }

    /**
     * Get Id
     *
     * @param int $entityId
     * @return \Kishan\Assignment6\Model\Form
     */
    public function getById($entityId)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $entityId);
        return $model;
    }

    /**
     * Return Collection
     *
     * @return Collection
     */
    public function getCollection()
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }

    /**
     * Get array Data
     *
     * @param $id
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function getDataById($id)
    {
//        $list = $this->getCollection()->addFieldToFilter('entity_id', ['in'=>$id]);
//        return $list->getData();
        $collection=$this->getCollection()->addFieldToFilter('entity_id', $id);
        return $collection->getData();
    }

    /**
     * Get Data list
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Kishan\Assignment6\Api\Data\FormSearchResultInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, ($collection));
        $searchResults = $this->formSearchResultInterfaceFactory->create();
//        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setSearchCriteria($searchCriteria);
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function create()
    {
        return $this->modelFactory->create();
    }

    /**
     * @inheritDoc
     */
    public function save(\Kishan\Assignment6\Api\Data\FormInterface $modelData)
    {
        return $this->resourceModel->save($modelData);
    }

    /**
     * @inheritDoc
     */
    public function load($value, $field = null)
    {
        $model = $this->create();
        $this->resourceModel->load($model, $value, $field);
        return $model;
    }
}
