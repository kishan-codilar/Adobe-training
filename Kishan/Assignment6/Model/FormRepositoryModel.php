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

class FormRepositoryModel implements FormRepositoryInterface
{
    /**
     * @var FormFactory
     */
    private $modelFactory;

    /**
     * @var ResourceModel
     */
    private $resourceModel;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var FormInterface
     */
    private $formInterface;

    /**
     * Order Extension Attributes Factory
     *
     * @var FormExtensionFactory
     */
    protected FormExtensionFactory $extensionFactory;

    /**
     * FormRepositoryModel constructor.
     * @param CollectionFactory $collectionFactory
     * @param FormFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param FormInterface $formInterface
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        FormInterface $formInterface
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory = $collectionFactory;
        $this->formInterface = $formInterface;
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
     * @return array
     */
    public function getCollection()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getData();
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
        $object=$this->modelFactory->create();
        $collection=$object->getCollection();
        $collection->addFieldToFilter('entity_id', $id);
        return $collection->getData();
    }
}
