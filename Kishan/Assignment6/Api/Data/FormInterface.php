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
     * @return int
     */
    public function getEntityId(): int;

    /**
     * @param int $entityId
     * @return $this
     */
    public function setEntityId(int $entityId): FormInterface;

    /**
     * @return bool
     */
    public function getEnable(): bool;

    /**
     * @param bool $enable
     * @return $this
     */
    public function setEnable(bool $enable):FormInterface;

    /**
     * @return string
     */
    public function getFirstname(): string;

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname(string $firstname): FormInterface;

    /**
     * @return string
     */
    public function getLastname(): string;

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname): FormInterface;

    /**
     * @return string
     */
    public function getDob(): string;

    /**
     * @param string $dob
     * @return $this
     */
    public function setDob(string $dob):FormInterface;

    /**
     * @return string
     */
    public function getNumber():string;

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber(string $number): FormInterface;

    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight(float $weight):FormInterface;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price):FormInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt):FormInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt):FormInterface;
    /**
     * @return \Kishan\Assignment6\Api\Data\FormExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * @param \Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttribute
     * @return mixed
     */
    public function setExtensionAttributes(\Kishan\Assignment6\Api\Data\FormExtensionInterface $extensionAttribute);
}
