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

class FormRepository implements FormRepositoryInterface
{
    /**
     * @var ModelFactory
     */
    private ModelFactory $modelFactory;

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
     * FormRepository constructor.
     * @param CollectionFactory $collectionFactory
     * @param ModelFactory $modelFactory
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
     * Get Data
     *
     * @param int $id
     * @return \Kishan\Assignment6\Model\Form
     */
    public function getDataById($id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id);
        return $model;
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

    /**
     * @inheritDoc
     */
    public function create()
    {
        return $this->modelFactory->create();
    }

    /**
     * @inheritDoc
     * @throws \Magento\Framework\Exception\AlreadyExistsException
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
    /**
     * @inheritDoc
     */
    public function saveForm($data)
    {
        $model=$this->create();
        $model->setEnable($data['enable']);
        $model->setFirstname($data['firstname']);
        $model->setLastname($data['lastname']);
        $model->setDob($data['dob']);
        $model->setNumber($data['number']);
        $model->setWeight($data['weight']);
        $model->setPrice($data['price']);
        $this->save($model);
        return 'Success';
    }
    /**
     * @inheritDoc
     */
    public function deleteById($entityId)
    {
        $model = $this->load($entityId);
        $model->delete();
        return 'successfully deleted the record';
    }
}
