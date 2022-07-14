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


    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param $id
     * @return $this
     */
    public function setId($id): AddressInterface;

    /**
     * @return int
     */
    public function getAddressId(): int;

    /**
     * @param $addressId
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setAddressId($addressId): AddressInterface;

    /**
     * @return string
     */
    public function getPermanentAddress(): string;

    /**
     * @param string $permanent_address
     * @return $this
     */
    public function setPermanentAddress(string $permanent_address): AddressInterface;

    /**
     * @return string
     */
    public function getTemporaryAddress(): string;

    /**
     * @param string $temporary_address
     * @return $this
     */
    public function setTemporaryAddress(string $temporary_address): AddressInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt):AddressInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * @param string $updatedAt
     * @return $this
     */
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
