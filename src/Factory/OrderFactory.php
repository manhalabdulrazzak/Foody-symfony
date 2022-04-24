<?php

namespace App\Factory;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use Monolog\DateTimeImmutable;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class OrderFactory.
 */
class OrderFactory
{
    /**
     * Creates an order.
     */
    public function create(): Order
    {
        $order = new Order();
        $order
            ->setStatus(Order::STATUS_CART)
            ->setCreatedAt(createdAt: date_create_immutable())
            ->setUpdatedAt(updatedAt: date_create_immutable());

        return $order;
    }

    /**
     * Creates an item for a product.
     */
    public function createItem(Product $product): OrderItem
    {
        $item = new OrderItem();
        $item->setProduct($product);
        $item->setQuantity(1);

        return $item;
    }
}
