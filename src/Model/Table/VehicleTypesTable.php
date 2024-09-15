<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleTypes Model
 *
 * @property \App\Model\Table\ServicesTable&\Cake\ORM\Association\HasMany $Services
 * @property \App\Model\Table\VehicleFeesTable&\Cake\ORM\Association\HasMany $VehicleFees
 *
 * @method \App\Model\Entity\VehicleType newEmptyEntity()
 * @method \App\Model\Entity\VehicleType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\VehicleType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VehicleType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\VehicleType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\VehicleType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\VehicleType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\VehicleType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleType> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VehicleTypesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('vehicle_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Services', [
            'foreignKey' => 'vehicle_type_id',
        ]);
        $this->hasMany('VehicleFees', [
            'foreignKey' => 'vehicle_type_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
