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
    protected $extensionFactory;

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
     * Return Model
     *
     * @param $entity_id
     * @return Model
     * @throws NoSuchEntityException
     */
    public function getById($entity_id)
    {
        $model = $this->modelFactory->create();
        $model->load($entity_id);
        if ($this->formInterface->getExtensionAttributes()) {
            return $model;
        }
//         if (!$model->getId()) {
//            throw new NoSuchEntityException(__('Id %1 does not exist', $entity_id));
//        }


        return $model->getData();
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
     * @param $id
     * @return array
     */
    public function getDataById($id)
    {
        $list = $this->getCollection()->addFieldToFilter('entity_id', ['in'=>$id]);
        return $list->getData();
    }
}
