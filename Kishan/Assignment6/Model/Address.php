<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\Data\AddressInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\AbstractExtensibleModel;
use Kishan\Assignment6\Model\ResourceModel\Address as ResourceModel;

class Address extends  AbstractExtensibleModel implements AddressInterface
{
    /**
     * Init
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inerhitDoc
     * @return int
     */
    public function getId(): int
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->getData(self::ADDRESS_ID);
    }

    /**
     * @param $addressId
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setAddressId($addressId): AddressInterface
    {
        return $this->setData(self::ADDRESS_ID, $addressId);
    }

    /**
     * @return string
     */
    public function getPermanentAddress(): string
    {
        return $this->getData(self::PERMANENT_ADDRESS);
    }

    /**
     * @param string $permanent_address
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setPermanentAddress(string $permanent_address): AddressInterface
    {
        return $this->setData(self::PERMANENT_ADDRESS, $permanent_address);
    }

    /**
     * @return string
     */
    public function getTemporaryAddress(): string
    {
        return $this->getData(self::TEMPORARY_ADDRESS);
    }

    /**
     * @param string $temporary_address
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setTemporaryAddress(string $temporary_address): AddressInterface
    {
        return $this->setData(self::TEMPORARY_ADDRESS, $temporary_address);
    }

    /**
     * @return string
     */
    public function getCreatedAt():string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param string $createdAt
     * @return \Kishan\Assignment6\Api\Data\AddressInterface
     */
    public function setCreatedAt(string $createdAt):AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @return string
     */
    public function getUpdatedAt():string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
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
     * @inerhitDoc
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\AddressExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
