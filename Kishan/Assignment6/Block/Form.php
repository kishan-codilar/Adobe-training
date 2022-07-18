<?php

namespace Kishan\Assignment6\Block;

use Magento\Framework\View\Element\Template;
use Kishan\Assignment6\Api\FormRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Kishan\Assignment6\Model\ResourceModel\Form\CollectionFactory;

class Form extends Template
{
    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $collectionFactory;
    /**
     * @var FormRepositoryInterface
     */
    private FormRepositoryInterface $formRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;


    /**
     * SimpleForm constructor.
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param FormRepositoryInterface $formRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        FormRepositoryInterface $formRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
        $this->formRepository = $formRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @return string
     */
    public function getEditUrl()
    {
         return $this->getUrl('assignment6/index/edit');
    }

    /**
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl('assignment6/index/save');
    }

    /**
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function getUpdate()
    {
        $id = $this->getRequest()->getParam('entity_id');

        $collection = $this->formRepository->getById($id);
        return $collection;
//        $id = $this->getRequest()->getParam('entity_id');
//        $col = $this->searchCriteriaBuilder->addFilter('entity_id', $id);
//        $collection = $this->formRepository->getList($this->searchCriteriaBuilder->create());
//        return $collection->getItems();
    }

    /**
     * return array
     *
     * @return array
     */
    public function getAllDetails()
    {
        $collection = $this->formRepository->getList($this->searchCriteriaBuilder->create());
        return $collection->getItems();
    }
}
