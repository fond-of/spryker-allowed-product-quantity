<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Communication\Plugin\Product;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductAbstractPluginUpdateInterface;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\AllowedProductQuantityConfig getConfig()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Business\AllowedProductQuantityFacadeInterface getFacade()
 */
class AllowedQuantityProductAbstractAfterUpdatePlugin extends AbstractPlugin implements ProductAbstractPluginUpdateInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @see \Spryker\Zed\Product\ProductDependencyProvider
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function update(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        return $this->getFacade()->persistProductAbstractAllowedQuantity($productAbstractTransfer);
    }
}
