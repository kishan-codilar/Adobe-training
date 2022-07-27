<?php

namespace Kishan\Assignment6\Plugin;

use Kishan\Assignment6\Api\Data\FormExtension;
use Kishan\Assignment6\Api\Data\FormExtensionFactory;
use Kishan\Assignment6\Model\AddressRepository;
use Kishan\Assignment6\Model\ResourceModel\Form\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class FormRepository
{
    /**
     * Order Extension Attributes Factory
     *
     * @var FormExtensionFactory
     */
    protected FormExtensionFactory $extensionFactory;

    /**
     * @var AddressRepository
     */
    private AddressRepository $addressRepository;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var FormExtension
     */
    private FormExtension $formExtension;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;

    /**
     * FormRepositoryInterface constructor.
     * @param FormExtensionFactory $extensionFactory
     * @param AddressRepository $addressRepository
     * @param CollectionFactory $collectionFactory
     * @param FormExtension $formExtension
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        FormExtensionFactory $extensionFactory,
        AddressRepository $addressRepository,
        CollectionFactory $collectionFactory,
        FormExtension $formExtension,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->addressRepository = $addressRepository;
        $this->collectionFactory = $collectionFactory;
        $this->formExtension = $formExtension;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * Return the Data by Id
     *
     * @param \Kishan\Assignment6\Api\FormRepositoryInterface $subject
     * @param \Kishan\Assignment6\Api\Data\FormInterface $form
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function afterGetById(
        \Kishan\Assignment6\Api\FormRepositoryInterface $subject,
        \Kishan\Assignment6\Api\Data\FormInterface $form
    ) {
        $extensionAttributes = $form->getExtensionAttributes();
        $filters = $this->searchCriteriaBuilder->addFilter('address_id', $form->getEntityId());
        $extensionAttribute = $extensionAttributes ? $extensionAttributes : $this->extensionFactory->create();
        $formAddress = $this->addressRepository->getList($filters->create())->getItems();
        $extensionAttribute->setAddressId($formAddress);
        return $form->setExtensionAttributes($extensionAttribute);
    }
}
