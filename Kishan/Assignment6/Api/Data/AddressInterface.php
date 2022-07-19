<?php

namespace Kishan\Assignment6\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AddressInterface extends ExtensibleDataInterface
{
    public const ID = 'id';
    public const ADDRESS_ID = 'address_id';
    public const PERMANENT_ADDRESS  = 'permanent_address';
    public const TEMPORARY_ADDRESS  = 'temporary_address';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * Get Id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Set Id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id): AddressInterface;

    /**
     * Get Address Id
     *
     * @return int
     */
    public function getAddressId(): int;

    /**
     * Set Address Id
     *
     * @param int $addressId
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setAddressId($addressId): AddressInterface;

    /**
     * Get Permanent Address
     *
     * @return string
     */
    public function getPermanentAddress(): string;

    /**
     * Set Permanent Address
     *
     * @param string $permanent_address
     * @return $this
     */
    public function setPermanentAddress(string $permanent_address): AddressInterface;

    /**
     * Get Temporary Address
     *
     * @return string
     */
    public function getTemporaryAddress(): string;

    /**
     * Set Temporary Address
     *
     * @param string $temporary_address
     * @return $this
     */
    public function setTemporaryAddress(string $temporary_address): AddressInterface;

    /**
     * Get Created At
     *
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * Set created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt):AddressInterface;

    /**
     * Get Updated At
     *
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * Set Updated At
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt):AddressInterface;
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Kishan\Assignment6\Api\Data\AddressExtensionInterface
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
