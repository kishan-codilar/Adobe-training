<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\Data\AddressInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\AbstractExtensibleModel;
use Kishan\Assignment6\Model\ResourceModel\Address as ResourceModel;

class Address extends AbstractExtensibleModel implements AddressInterface
{
    /**
     * Address constructor.
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * Return the Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->getData(self::ID);
    }

    /**
     * Sets the Id
     *
     * @param int $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Return the address id
     *
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->getData(self::ADDRESS_ID);
    }

    /**
     * Sets the Address Id
     *
     * @param int $addressId
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setAddressId($addressId): AddressInterface
    {
        return $this->setData(self::ADDRESS_ID, $addressId);
    }

    /**
     * Gets the Permanent Address
     *
     * @return string
     */
    public function getPermanentAddress(): string
    {
        return $this->getData(self::PERMANENT_ADDRESS);
    }

    /**
     * Sets the Permanent Address
     *
     * @param string $permanent_address
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setPermanentAddress(string $permanent_address): AddressInterface
    {
        return $this->setData(self::PERMANENT_ADDRESS, $permanent_address);
    }

    /**
     * Return the Temporary Address
     *
     * @return string
     */
    public function getTemporaryAddress(): string
    {
        return $this->getData(self::TEMPORARY_ADDRESS);
    }

    /**
     * Sets the Temporary Address
     *
     * @param string $temporary_address
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setTemporaryAddress(string $temporary_address): AddressInterface
    {
        return $this->setData(self::TEMPORARY_ADDRESS, $temporary_address);
    }

    /**
     * Gets the Created Date
     *
     * @return string
     */
    public function getCreatedAt():string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Sets the created Date
     *
     * @param string $createdAt
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setCreatedAt(string $createdAt):AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Return the Updated Date
     *
     * @return string
     */
    public function getUpdatedAt():string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set the Updated Date
     *
     * @param string $updatedAt
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setUpdatedAt(string $updatedAt):AddressInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }
    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\AddressExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
