<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e182 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82629 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesce9c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getConnection', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getMetadataFactory', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getExpressionBuilder', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'beginTransaction', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getCache', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'transactional', array('func' => $func), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'commit', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->commit();
    }

    public function rollback()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'rollback', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getClassMetadata', array('className' => $className), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'createQuery', array('dql' => $dql), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'createNamedQuery', array('name' => $name), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'createQueryBuilder', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'flush', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'clear', array('entityName' => $entityName), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->clear($entityName);
    }

    public function close()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'close', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->close();
    }

    public function persist($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'persist', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'remove', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'refresh', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'detach', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'merge', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'contains', array('entity' => $entity), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getEventManager', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getConfiguration', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'isOpen', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getUnitOfWork', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getProxyFactory', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'initializeObject', array('obj' => $obj), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'getFilters', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'isFiltersStateClean', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'hasFilters', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return $this->valueHolder7e182->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer82629 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e182) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e182 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e182->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__get', ['name' => $name], $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        if (isset(self::$publicPropertiesce9c3[$name])) {
            return $this->valueHolder7e182->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e182;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e182;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e182;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e182;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__isset', array('name' => $name), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e182;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e182;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__unset', array('name' => $name), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e182;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e182;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__clone', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        $this->valueHolder7e182 = clone $this->valueHolder7e182;
    }

    public function __sleep()
    {
        $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, '__sleep', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;

        return array('valueHolder7e182');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82629 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82629;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82629 && ($this->initializer82629->__invoke($valueHolder7e182, $this, 'initializeProxy', array(), $this->initializer82629) || 1) && $this->valueHolder7e182 = $valueHolder7e182;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e182;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e182;
    }
}
