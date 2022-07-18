<?php

declare(strict_types=1);

namespace Kishan\Assignment6\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface FormInterface extends ExtensibleDataInterface
{
    const ENTITY_ID = 'entity_id';
    const ENABLE = 'enable';
    const FIRSTNAME  = 'firstname';
    const LASTNAME  = 'lastname';
    const DOB = 'dob';
    const NUMBER = 'number';
    const WEIGHT  = 'weight';
    const PRICE = 'price';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Return Entity Id
     *
     * @return int
     */
    public function getEntityId(): int;

    /**
     * Set Entity ID
     *
     * @param int $entityId
     * @return $this
     */
    public function setEntityId(int $entityId): FormInterface;

    /**
     * Return Enable value
     *
     * @return bool
     */
    public function getEnable(): bool;

    /**
     * set Enable
     *
     * @param bool $enable
     * @return $this
     */
    public function setEnable(bool $enable):FormInterface;

    /**
     * Return string
     *
     * @return string
     */
    public function getFirstname(): string;

    /**
     * Set First name
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname(string $firstname): FormInterface;

    /**
     * Return Last name
     *
     * @return string
     */
    public function getLastname(): string;

    /**
     * Set last name
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname): FormInterface;

    /**
     * Return DOB
     *
     * @return string
     */
    public function getDob(): string;

    /**
     * Set DOB
     *
     * @param string $dob
     * @return $this
     */
    public function setDob(string $dob):FormInterface;

    /**
     * Return Number
     *
     * @return string
     */
    public function getNumber():string;

    /**
     * Set Number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number): FormInterface;

    /**
     * Return weight
     *
     * @return float
     */
    public function getWeight(): float;

    /**
     * set weight
     *
     * @param float $weight
     * @return $this
     */
    public function setWeight(float $weight):FormInterface;

    /**
     * Return Price
     *
     * @return float
     */
    public function getPrice(): float;

    /**
     * Set Price
     *
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price):FormInterface;

    /**
     * Return Created At
     *
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * Set Createed At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt):FormInterface;

    /**
     * Return Updated At
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
    public function setUpdatedAt(string $updatedAt):FormInterface;

    /**
     * Return FormExtensionInterface
     *
     * @return \Kishan\Assignment6\Api\Data\FormExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * Set FormExtensionInterface
     *
     * @param \Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttribute
     * @return mixed
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttribute);
}
