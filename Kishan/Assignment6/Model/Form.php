<?php

namespace Kishan\Assignment6\Model;

use Kishan\Assignment6\Api\Data\FormExtensionInterface;
use Kishan\Assignment6\Api\Data\FormInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\AbstractExtensibleModel;
use Kishan\Assignment6\Model\ResourceModel\Form as ResourceModel;

class Form extends AbstractExtensibleModel implements FormInterface
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inerhitDoc
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param int $entityId
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setEntityId($entityId): FormInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @inerhitDoc
     * @return bool
     */
    public function getEnable():bool
    {
        return $this->getData(self::ENABLE);
    }

    /**
     * @param bool $enable
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setEnable(bool $enable):FormInterface
    {
        return $this->setData(self::ENABLE, $enable);
    }

    /**
     * @inerhitDoc
     * @return string
     */
    public function getFirstname():string
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * @param string $firstname
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setFirstname(string $firstname): FormInterface
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * @return string
     */
    public function getLastname():string
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * @param string $lastname
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setLastname(string $lastname): FormInterface
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * @return string
     */
    public function getDob(): string
    {
        return $this->getData(self::DOB);
    }

    /**
     * @param string $dob
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setDob(string $dob):FormInterface
    {
        return $this->setData(self::DOB, $dob);
    }

    /**
     * @inerhitDoc
     * @return string
     */
    public function getNumber(): string
    {
        return $this->getData(self::NUMBER);
    }

    /**
     * @param string $number
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setNumber(string $number): FormInterface
    {
        return $this->setData(self::NUMBER, $number);
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->getData(self::WEIGHT);
    }

    /**
     * @param float $weight
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setWeight(float $weight):FormInterface
    {
        return $this->setData(self::WEIGHT, $weight);
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->getData(self::PRICE);
    }

    /**
     * @param float $price
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setPrice(float $price):FormInterface
    {
        return $this->setData(self::PRICE, $price);
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
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setCreatedAt(string $createdAt):FormInterface
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
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setUpdatedAt(string $updatedAt):FormInterface
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
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
