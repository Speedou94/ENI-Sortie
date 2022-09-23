<?php

namespace ContainerESHDRE6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder114ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5ff2e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties010f3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getConnection', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getMetadataFactory', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getExpressionBuilder', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'beginTransaction', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getCache', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'transactional', array('func' => $func), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'commit', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->commit();
    }

    public function rollback()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'rollback', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getClassMetadata', array('className' => $className), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'createQuery', array('dql' => $dql), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'createNamedQuery', array('name' => $name), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'createQueryBuilder', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'flush', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'clear', array('entityName' => $entityName), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->clear($entityName);
    }

    public function close()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'close', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->close();
    }

    public function persist($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'persist', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'remove', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'refresh', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'detach', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'merge', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'contains', array('entity' => $entity), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getEventManager', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getConfiguration', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'isOpen', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getUnitOfWork', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getProxyFactory', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'initializeObject', array('obj' => $obj), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'getFilters', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'isFiltersStateClean', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'hasFilters', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return $this->valueHolder114ed->hasFilters();
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

        $instance->initializer5ff2e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder114ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder114ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder114ed->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__get', ['name' => $name], $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        if (isset(self::$publicProperties010f3[$name])) {
            return $this->valueHolder114ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114ed;

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

        $targetObject = $this->valueHolder114ed;
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
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder114ed;
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
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__isset', array('name' => $name), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder114ed;
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
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__unset', array('name' => $name), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder114ed;
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
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__clone', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        $this->valueHolder114ed = clone $this->valueHolder114ed;
    }

    public function __sleep()
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__sleep', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        return array('valueHolder114ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5ff2e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5ff2e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'initializeProxy', array(), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder114ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder114ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
