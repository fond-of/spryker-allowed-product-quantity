<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business\Model;

use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class ProductAbstractAllowedQuantityWriter implements ProductAbstractAllowedQuantityWriterInterface
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface
     */
    protected $entityManager;

    /**
     * @param \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface $entityManager
     */
    public function __construct(AllowedProductQuantityEntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function persist(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        $allowedProductQuantityTransfer = $productAbstractTransfer->getAllowedQuantity();

        if ($allowedProductQuantityTransfer === null) {
            return $productAbstractTransfer;
        }

        if ($allowedProductQuantityTransfer->getIdProductAbstract() === null && $productAbstractTransfer->getIdProductAbstract() !== null) {
            $allowedProductQuantityTransfer->setIdProductAbstract($productAbstractTransfer->getIdProductAbstract());
        }

        $allowedProductQuantityTransfer = $this->entityManager->persist($allowedProductQuantityTransfer);

        return $productAbstractTransfer->setAllowedQuantity($allowedProductQuantityTransfer);
    }
}
