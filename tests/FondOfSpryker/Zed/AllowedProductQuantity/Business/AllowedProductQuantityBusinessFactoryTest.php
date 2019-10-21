<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReaderInterface;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriterInterface;
use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManager;
use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepository;

class AllowedProductQuantityBusinessFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Business\AllowedProductQuantityBusinessFactory
     */
    protected $allowedProductQuantityBusinessFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManager
     */
    protected $allowedProductQuantityEntityManagerMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepository
     */
    protected $allowedProductQuantityRepositoryMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->allowedProductQuantityEntityManagerMock = $this->getMockBuilder(AllowedProductQuantityEntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityRepositoryMock = $this->getMockBuilder(AllowedProductQuantityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityBusinessFactory = new AllowedProductQuantityBusinessFactory();
        $this->allowedProductQuantityBusinessFactory->setEntityManager($this->allowedProductQuantityEntityManagerMock);
        $this->allowedProductQuantityBusinessFactory->setRepository($this->allowedProductQuantityRepositoryMock);
    }

    /**
     * @return void
     */
    public function testCreateProductAbstractAllowedQuantityWriter(): void
    {
        $this->assertInstanceOf(ProductAbstractAllowedQuantityWriterInterface::class, $this->allowedProductQuantityBusinessFactory->createProductAbstractAllowedQuantityWriter());
    }

    /**
     * @return void
     */
    public function testCreateProductAbstractAllowedQuantityReader(): void
    {
        $this->assertInstanceOf(ProductAbstractAllowedQuantityReaderInterface::class, $this->allowedProductQuantityBusinessFactory->createProductAbstractAllowedQuantityReader());
    }
}
