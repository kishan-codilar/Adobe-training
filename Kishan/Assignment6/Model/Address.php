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
     * @return AddressInterface
     */
    public function setId($id): AddressInterface
    {
        return $this->setData(self::ID, $id);
    }

    public function getAddressId(): int
    {
        return $this->getData(self::ADDRESS_ID);
    }
    public function setAddressId($address_id): AddressInterface
    {
        return $this->setData(self::ADDRESS_ID, $address_id);
    }
    public function getPermanentAddress(): string
    {
        return $this->getData(self::PERMANENT_ADDRESS);
    }
    public function setPermanentAddress(string $permanent_address): AddressInterface
    {
        return $this->setData(self::PERMANENT_ADDRESS, $permanent_address);
    }
    public function getTemporaryAddress(): string
    {
        return $this->getData(self::TEMPORARY_ADDRESS);
    }
    public function setTemporaryAddress(string $temporary_address): AddressInterface
    {
        return $this->setData(self::TEMPORARY_ADDRESS, $temporary_address);
    }

    public function getCreatedAt():string
    {
        return $this->getData(self::CREATED_AT);
    }
    public function setCreatedAt(string $createdAt):AddressInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
    public function getUpdatedAt():string
    {
        return $this->getData(self::UPDATED_AT);
    }
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
