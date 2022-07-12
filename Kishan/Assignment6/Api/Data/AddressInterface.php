<?php

namespace Kishan\Assignment6\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AddressInterface extends ExtensibleDataInterface
{
    const ID = 'id';
    const ADDRESS_ID = 'address_id';
    const PERMANENT_ADDRESS  = 'permanent_address';
    const TEMPORARY_ADDRESS  = 'temporary_address';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public function getId(): int;
    public function setId($id): AddressInterface;
    public function getAddressId(): int;
    public function setAddressId($address_id): AddressInterface;
    public function getPermanentAddress(): string;
    public function setPermanentAddress(string $permanent_address): AddressInterface;
    public function getTemporaryAddress(): string;
    public function setTemporaryAddress(string $temporary_address): AddressInterface;
    public function getCreatedAt(): string;
    public function setCreatedAt(string $createdAt):AddressInterface;
    public function getUpdatedAt(): string;
    public function setUpdatedAt(string $updatedAt):AddressInterface;
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Kishan\Assignment6\Api\Data\AddressExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Kishan\Assignment6\Api\Data\AddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\AddressExtensionInterface $extensionAttributes);
}
