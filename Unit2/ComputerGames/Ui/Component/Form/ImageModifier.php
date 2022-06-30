<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Ui\Component\Form;

use Magento\Ui\DataProvider\Modifier\ModifierInterface;
use \Magento\Store\Model\StoreManagerInterface;
use \Magento\Catalog\Model\ImageUploader;

class ImageModifier implements ModifierInterface
{
    /**
     * @var StoreManagerInterface
     */
    protected StoreManagerInterface $storeManager;

    /**
     * @var ImageUploader
     */
    protected ImageUploader $imageUploader;

    /**
     * ImageModifier constructor.
     * @param StoreManagerInterface $storeManager
     * @param ImageUploader $imageUploader
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        ImageUploader $imageUploader
    ) {
        $this->storeManager = $storeManager;
        $this->imageUploader = $imageUploader;
    }
    /**
     * * return array
     *
     * @param array $meta
     * @return array
     */
    public function modifyMeta(array $meta)
    {
        return $meta;
    }

    /**
     * ModifyData
     *
     * @param mixed $data
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function modifyData(array $data)
    {
        foreach ($data as $image) {
            $imageData = $image->getData();
            if (isset($imageData['image'])) {
                $arrayImageData = [];
                $arrayImageData[0]['name'] = 'Image';
                $arrayImageData[0]['url'] = $this->storeManager->getStore()->getBaseUrl(
                    \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
                )
                    . $this->imageUploader->getFilePath(
                        $this->imageUploader->getBasePath(),
                        $image->getImage()
                    );
                $imageData['image'] = $arrayImageData;
            }

            $image->setData($imageData);
            $data[$image->getId()] = $imageData;
        }

        return $data;
    }
}
