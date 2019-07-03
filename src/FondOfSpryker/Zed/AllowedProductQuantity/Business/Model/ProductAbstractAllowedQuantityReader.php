<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business\Model;

use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface;
use Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class ProductAbstractAllowedQuantityReader implements ProductAbstractAllowedQuantityReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface
     */
    protected $repository;

    /**
     * @param \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface $repository
     */
    public function __construct(AllowedProductQuantityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer
     */
    public function findByIdProductAbstract(ProductAbstractTransfer $productAbstractTransfer): AllowedProductQuantityResponseTransfer
    {
        $productAbstractTransfer->requireIdProductAbstract();

        $allowedProductQuantityTransfer = $this->repository
            ->findByIdProductAbstract($productAbstractTransfer->getIdProductAbstract());

        $allowedProductQuantityResponseTransfer = (new AllowedProductQuantityResponseTransfer())
            ->setIsSuccessful(true)
            ->setAllowedProductQuantityTransfer($allowedProductQuantityTransfer);

        if ($allowedProductQuantityTransfer === null) {
            $allowedProductQuantityResponseTransfer->setIsSuccessful(false);
        }

        return $allowedProductQuantityResponseTransfer;
    }
}
