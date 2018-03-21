<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShopperItem Model
 *
 * @method \App\Model\Entity\ShopperItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShopperItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ShopperItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShopperItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShopperItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShopperItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShopperItem findOrCreate($search, callable $callback = null, $options = [])
 */
class ShopperItemTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('shopper_item');
        $this->setDisplayField('item_id');
        $this->setPrimaryKey('item_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('item_id')
            ->allowEmpty('item_id', 'create');

        $validator
            ->scalar('product')
            ->maxLength('product', 45)
            ->allowEmpty('product');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        $validator
            ->scalar('EAN')
            ->maxLength('EAN', 45)
            ->allowEmpty('EAN');

        $validator
            ->scalar('active_flag')
            ->allowEmpty('active_flag');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 45)
            ->allowEmpty('foto');

        return $validator;
    }
}
