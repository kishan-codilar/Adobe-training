<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\FormRepositoryInterface;
use Kishan\Assignment6\Model\Form as Model;
use Kishan\Assignment6\Model\FormFactory as ModelFactory;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;
use Kishan\Assignment6\Model\ResourceModel\Form\Collection;
use Kishan\Assignment6\Model\ResourceModel\Form\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;

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

    public function __construct(
        CollectionFactory $collectionFactory,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    ) {
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Return Model
     *
     * @param int $Id
     * @return Model
     * @throws NoSuchEntityException
     */
    public function getById($Id)
    {
        $model = $this->modelFactory->create();
        $model->load($Id);
        if (!$model->getId()) {
            throw new NoSuchEntityException(__('Id %1 does not exist', $Id));
        }
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
}
