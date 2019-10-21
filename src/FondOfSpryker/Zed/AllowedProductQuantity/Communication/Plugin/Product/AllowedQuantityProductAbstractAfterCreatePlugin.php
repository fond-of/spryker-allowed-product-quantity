<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Communication\Plugin\Product;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductAbstractPluginCreateInterface;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\AllowedProductQuantityConfig getConfig()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Business\AllowedProductQuantityFacadeInterface getFacade()
 */
class AllowedQuantityProductAbstractAfterCreatePlugin extends AbstractPlugin implements ProductAbstractPluginCreateInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @see \Spryker\Zed\Product\ProductDependencyProvider

     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function create(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        return $this->getFacade()->persistProductAbstractAllowedQuantity($productAbstractTransfer);
    }
}
