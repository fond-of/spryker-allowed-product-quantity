<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business;

use Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

interface AllowedProductQuantityFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function persistProductAbstractAllowedQuantity(
        ProductAbstractTransfer $productAbstractTransfer
    ): ProductAbstractTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer
     */
    public function findProductAbstractAllowedQuantity(
        ProductAbstractTransfer $productAbstractTransfer
    ): AllowedProductQuantityResponseTransfer;
}
