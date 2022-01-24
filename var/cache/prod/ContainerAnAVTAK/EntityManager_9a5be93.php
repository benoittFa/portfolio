<?php

namespace ContainerAnAVTAK;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4ff82 = null;
    private $initializer3966d = null;
    private static $publicProperties2a254 = [
        
    ];
    public function getConnection()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getConnection', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getMetadataFactory', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getExpressionBuilder', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'beginTransaction', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getCache', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'transactional', array('func' => $func), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'commit', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->commit();
    }
    public function rollback()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'rollback', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getClassMetadata', array('className' => $className), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'createQuery', array('dql' => $dql), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'createNamedQuery', array('name' => $name), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'createQueryBuilder', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'flush', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'clear', array('entityName' => $entityName), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->clear($entityName);
    }
    public function close()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'close', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->close();
    }
    public function persist($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'persist', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'remove', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'refresh', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'detach', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'merge', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'contains', array('entity' => $entity), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getEventManager', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getConfiguration', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'isOpen', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getUnitOfWork', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getProxyFactory', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'initializeObject', array('obj' => $obj), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'getFilters', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'isFiltersStateClean', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'hasFilters', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return $this->valueHolder4ff82->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3966d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder4ff82) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4ff82 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder4ff82->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__get', ['name' => $name], $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        if (isset(self::$publicProperties2a254[$name])) {
            return $this->valueHolder4ff82->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff82;
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
        $targetObject = $this->valueHolder4ff82;
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
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff82;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4ff82;
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
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__isset', array('name' => $name), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff82;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4ff82;
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
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__unset', array('name' => $name), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff82;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4ff82;
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
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__clone', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        $this->valueHolder4ff82 = clone $this->valueHolder4ff82;
    }
    public function __sleep()
    {
        $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, '__sleep', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
        return array('valueHolder4ff82');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3966d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3966d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3966d && ($this->initializer3966d->__invoke($valueHolder4ff82, $this, 'initializeProxy', array(), $this->initializer3966d) || 1) && $this->valueHolder4ff82 = $valueHolder4ff82;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4ff82;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4ff82;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
