<?php

declare(strict_types=1);

namespace Kishan\Assignment6\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface FormInterface extends ExtensibleDataInterface
{
    const ENTITY_ID = 'entity_id';
    const BOOLEAN = 'enable';
    const FIRSTNAME  = 'firstname';
    const LASTNAME  = 'lastname';
    const DOB = 'dob';
    const NUMBER = 'number';
    const WEIGHT  = 'weight';
    const PRICE = 'price';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getEntityId(): int;
    public function setEntityId($entityId): FormInterface;
    public function getEnable(): bool;
    public function setEnable(bool $enable):FormInterface;
    public function getFirstname(): string;
    public function setFirstname(string $firstname): FormInterface;
    public function getLastname(): string;
    public function setLastname(string $lastname): FormInterface;
    public function getDob(): string;
    public function setDob(string $dob):FormInterface;
    public function getNumber():string;
    public function setNumber(string $number): FormInterface;
    public function getWeight(): float;
    public function setWeight(float $weight):FormInterface;
    public function getPrice(): float;
    public function setPrice(float $price):FormInterface;
    public function getCreatedAt(): string;
    public function setCreatedAt(string $createdAt):FormInterface;
    public function getUpdatedAt(): string;
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
