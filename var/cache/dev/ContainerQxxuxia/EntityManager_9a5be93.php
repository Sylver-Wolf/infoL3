<?php

namespace ContainerQxxuxia;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6f691 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer558cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0b956 = [
        
    ];

    public function getConnection()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getConnection', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getMetadataFactory', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getExpressionBuilder', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'beginTransaction', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getCache', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getCache();
    }

    public function transactional($func)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'transactional', array('func' => $func), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->transactional($func);
    }

    public function commit()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'commit', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->commit();
    }

    public function rollback()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'rollback', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getClassMetadata', array('className' => $className), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'createQuery', array('dql' => $dql), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'createNamedQuery', array('name' => $name), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'createQueryBuilder', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'flush', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'clear', array('entityName' => $entityName), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->clear($entityName);
    }

    public function close()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'close', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->close();
    }

    public function persist($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'persist', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'remove', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'refresh', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'detach', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'merge', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getRepository', array('entityName' => $entityName), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'contains', array('entity' => $entity), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getEventManager', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getConfiguration', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'isOpen', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getUnitOfWork', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getProxyFactory', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'initializeObject', array('obj' => $obj), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'getFilters', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'isFiltersStateClean', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'hasFilters', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return $this->valueHolder6f691->hasFilters();
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

        $instance->initializer558cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6f691) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6f691 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6f691->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__get', ['name' => $name], $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        if (isset(self::$publicProperties0b956[$name])) {
            return $this->valueHolder6f691->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f691;

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

        $targetObject = $this->valueHolder6f691;
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
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f691;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6f691;
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
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__isset', array('name' => $name), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f691;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6f691;
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
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__unset', array('name' => $name), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f691;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6f691;
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
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__clone', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        $this->valueHolder6f691 = clone $this->valueHolder6f691;
    }

    public function __sleep()
    {
        $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, '__sleep', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;

        return array('valueHolder6f691');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer558cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer558cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer558cd && ($this->initializer558cd->__invoke($valueHolder6f691, $this, 'initializeProxy', array(), $this->initializer558cd) || 1) && $this->valueHolder6f691 = $valueHolder6f691;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6f691;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6f691;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
