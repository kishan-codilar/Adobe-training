<?php

namespace Kishan\Assignment6\Plugin;

use Kishan\Assignment6\Api\Data\AddressExtension;
use Kishan\Assignment6\Api\Data\AddressExtensionFactory;
use Kishan\Assignment6\Model\FormRepository;
use Kishan\Assignment6\Model\ResourceModel\Address\CollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

class AddressRepository
{
    /**
     * @var AddressExtensionFactory
     */
    protected AddressExtensionFactory $extensionFactory;

    /**
     * @var FormRepository
     */
    private FormRepository $formRepository;
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

    /**
     * AddressRepositoryInterface constructor.
     * @param AddressExtensionFactory $extensionFactory
     * @param FormRepository $formRepository
     * @param CollectionFactory $collectionFactory
     * @param AddressExtension $formExtension
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        AddressExtensionFactory $extensionFactory,
        FormRepository $formRepository,
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
     * Return the Data by Id
     *
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
//        $filters = $this->searchCriteriaBuilder->addFilter('entity_id', $address->getAddressId());
        $customAttributes = $customExtensionAttributes ? $customExtensionAttributes : $this->extensionFactory->create();
        $formAddress = $this->formRepository->getDataById($address->getAddressId());
        $customAttributes->setCustomId($formAddress);
        return $address->setExtensionAttributes($customAttributes);
    }
}
