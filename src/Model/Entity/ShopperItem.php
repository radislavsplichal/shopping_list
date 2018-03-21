<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShopperItem Entity
 *
 * @property int $item_id
 * @property string $product
 * @property float $price
 * @property int $quantity
 * @property string $EAN
 * @property string $active_flag
 * @property string $foto
 */
class ShopperItem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'product' => true,
        'price' => true,
        'quantity' => true,
        'EAN' => true,
        'active_flag' => true,
        'foto' => true
    ];
}
