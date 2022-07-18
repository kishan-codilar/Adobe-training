<?php

namespace Kishan\Assignment6\Plugin;

use Kishan\Assignment6\Api\Data\AddressExtension;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;
use Kishan\Assignment6\Model\FormRepositoryModel;
use Kishan\Assignment6\Model\ResourceModel\Address\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class AddressRepositoryInterface
{
    /**
     * @var AddressExtensionFactory
     */
    protected AddressExtensionFactory $extensionFactory;

    /**
     * @var FormRepositoryModel
     */
    private FormRepositoryModel $formRepository;
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var AddressExtension
     */
    private AddressExtension $formExtension;
    /**
     * @var SearchCriteriaBuilder
     */
    private SearchCriteriaBuilder $searchCriteriaBuilder;

    public function __construct(
        AddressExtensionFactory $extensionFactory,
        FormRepositoryModel $formRepository,
        CollectionFactory $collectionFactory,
        AddressExtension $formExtension,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->formRepository = $formRepository;
        $this->collectionFactory = $collectionFactory;
        $this->formExtension = $formExtension;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @param \Kishan\Assignment6\Api\AddressRepositoryInterface $subject
     * @param \Kishan\Assignment6\Api\Data\AddressInterface $address
     *
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function afterGetById(
        \Kishan\Assignment6\Api\AddressRepositoryInterface $subject,
        \Kishan\Assignment6\Api\Data\AddressInterface $address
    ) {
        $customExtensionAttributes = $address->getExtensionAttributes();
        $filters = $this->searchCriteriaBuilder->addFilter('entity_id', $address->getAddressId());
        $customAttributes = $customExtensionAttributes ? $customExtensionAttributes : $this->extensionFactory->create();
        $formAddress = $this->formRepository->getList($filters->create())->getItems();
        $customAttributes->setCustomId($formAddress);
        return $address->setExtensionAttributes($customAttributes);
    }
}
