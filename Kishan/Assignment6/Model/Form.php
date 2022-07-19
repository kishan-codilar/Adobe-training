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
     * Form Constructor.
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * Return the Entity Id
     *
     * @inerhitDoc
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Sets the entity Id
     *
     * @param int $entityId
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setEntityId($entityId): FormInterface
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Return the Status
     *
     * @inerhitDoc
     * @return bool
     */
    public function getEnable():bool
    {
        return $this->getData(self::ENABLE);
    }

    /**
     * Sets the status
     *
     * @param bool $enable
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setEnable(bool $enable):FormInterface
    {
        return $this->setData(self::ENABLE, $enable);
    }

    /**
     * Return the first name
     *
     * @inerhitDoc
     * @return string
     */
    public function getFirstname():string
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * Sets the first name
     *
     * @param string $firstname
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setFirstname(string $firstname): FormInterface
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * Return the last name
     *
     * @return string
     */
    public function getLastname():string
    {
        return $this->getData(self::LASTNAME);
    }
    /**
     * Sets the Last name
     *
     * @param string $lastname
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setLastname(string $lastname): FormInterface
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * Return the  Date of birth
     *
     * @return string
     */
    public function getDob(): string
    {
        return $this->getData(self::DOB);
    }

    /**
     * Sets the Date of Birth
     *
     * @param string $dob
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setDob(string $dob):FormInterface
    {
        return $this->setData(self::DOB, $dob);
    }

    /**
     * Return the Mobile Number
     *
     * @inerhitDoc
     * @return string
     */
    public function getNumber(): string
    {
        return $this->getData(self::NUMBER);
    }

    /**
     * Sets the Mobile Number
     *
     * @param string $number
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setNumber(string $number): FormInterface
    {
        return $this->setData(self::NUMBER, $number);
    }

    /**
     * Returhn the Weight
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->getData(self::WEIGHT);
    }

    /**
     * Sets the Weight
     *
     * @param float $weight
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setWeight(float $weight):FormInterface
    {
        return $this->setData(self::WEIGHT, $weight);
    }

    /**
     * Return the Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->getData(self::PRICE);
    }

    /**
     * Sets the Price
     *
     * @param float $price
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setPrice(float $price):FormInterface
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * Gets the Created Dare
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
     * @return \Kishan\Assignment6\Api\Data\FormInterface
     */
    public function setCreatedAt(string $createdAt):FormInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Gets the Updated Date
     *
     * @return string
     */
    public function getUpdatedAt():string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Sets the Updated Date
     *
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
     * @inheritDoc
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
