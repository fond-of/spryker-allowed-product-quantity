<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Dependency;

interface AllowedProductQuantityEvents
{
    /**
     * Specification
     * - This events will be used for allowed_product_quantity publishing
     *
     * @api
     *
     * @var string
     */
    public const ALLOWED_PRODUCT_QUANTITY_PUBLISH = 'AllowedProductQuantity.allowed_product_quantity.publish';

    /**
     * Specification
     * - This events will be used for allowed_product_quantity un-publishing
     *
     * @api
     *
     * @var string
     */
    public const ALLOWED_PRODUCT_QUANTITY_UNPUBLISH = 'AllowedProductQuantity.allowed_product_quantity.unpublish';

    /**
     * Specification
     * - This events will be used for spy_product_review entity creation
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_FOS_ALLOWED_PRODUCT_QUANTITY_CREATE = 'Entity.fos_allowed_product_quantity.create';

    /**
     * Specification
     * - This events will be used for fos_allowed_product_quantity entity update
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_FOS_ALLOWED_PRODUCT_QUANTITY_UPDATE = 'Entity.fos_allowed_product_quantity.update';

    /**
     * Specification
     * - This events will be used for fos_allowed_product_quantity entity deletion
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_FOS_ALLOWED_PRODUCT_QUANTITY_DELETE = 'Entity.fos_allowed_product_quantity.delete';
}
