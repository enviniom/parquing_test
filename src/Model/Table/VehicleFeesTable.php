<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleFees Model
 *
 * @property \App\Model\Table\VehicleTypesTable&\Cake\ORM\Association\BelongsTo $VehicleTypes
 * @property \App\Model\Table\ServiceTypesTable&\Cake\ORM\Association\BelongsTo $ServiceTypes
 *
 * @method \App\Model\Entity\VehicleFee newEmptyEntity()
 * @method \App\Model\Entity\VehicleFee newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\VehicleFee> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VehicleFee get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\VehicleFee findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\VehicleFee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\VehicleFee> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleFee|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\VehicleFee saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleFee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleFee>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleFee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleFee> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleFee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleFee>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VehicleFee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VehicleFee> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VehicleFeesTable extends Table
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

        $this->setTable('vehicle_fees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('VehicleTypes', [
            'foreignKey' => 'vehicle_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ServiceTypes', [
            'foreignKey' => 'service_type_id',
            'joinType' => 'INNER',
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
            ->integer('vehicle_type_id')
            ->notEmptyString('vehicle_type_id');

        $validator
            ->integer('service_type_id')
            ->notEmptyString('service_type_id');

        $validator
            ->integer('value')
            ->requirePresence('value', 'create')
            ->notEmptyString('value');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['vehicle_type_id'], 'VehicleTypes'), ['errorField' => 'vehicle_type_id']);
        $rules->add($rules->existsIn(['service_type_id'], 'ServiceTypes'), ['errorField' => 'service_type_id']);

        return $rules;
    }
}
