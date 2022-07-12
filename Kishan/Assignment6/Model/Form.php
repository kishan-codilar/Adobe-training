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
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param int $entityId
     * @return FormInterface
     */
    public function setEntityId($entityId): FormInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    public function getEnable():bool
    {
        return $this->getData(self::ENABLE);
    }

    public function setEnable(bool $enable):FormInterface
    {
        return $this->setData(self::ENABLE, $enable);
    }

    public function getFirstname():string
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * @param string $firstname
     * @return FormInterface
     */
    public function setFirstname(string $firstname): FormInterface
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    public function getLastname():string
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * @param string $lastname
     * @return FormInterface
     */
    public function setLastname(string $lastname): FormInterface
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    public function getDob(): string
    {
        return $this->getData(self::Dob);
    }

    public function setDob(string $dob):FormInterface
    {
        return $this->setData(self::DOB, $dob);
    }

    /**
     * @inerhitDoc
     */
    public function getNumber(): string
    {
        return $this->getData(self::NUMBER);
    }

    /**
     * @param string $number
     * @return FormInterface
     */
    public function setNumber(string $number): FormInterface
    {
        return $this->setData(self::NUMBER, $number);
    }

    public function getWeight(): float
    {
        return $this->getData(self::WEIGHT);
    }

    public function setWeight(float $weight):FormInterface
    {
        return $this->setData(self::WEIGHT, $weight);
    }

    public function getPrice(): float
    {
        return $this->getData(self::PRICE);
    }

    public function setPrice(float $price):FormInterface
    {
        return $this->setData(self::PRICE, $price);
    }

    public function getCreatedAt():string
    {
        return $this->getData(self::CREATED_AT);
    }
    public function setCreatedAt(string $createdAt):FormInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
    public function getUpdatedAt():string
    {
        return $this->getData(self::UPDATED_AT);
    }
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
