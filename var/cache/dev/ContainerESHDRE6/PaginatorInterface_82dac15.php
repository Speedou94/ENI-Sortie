<?php

namespace ContainerESHDRE6;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        if ($this->valueHolder114ed === $returnValue = $this->valueHolder114ed->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer5ff2e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder114ed) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder114ed = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer5ff2e && ($this->initializer5ff2e->__invoke($valueHolder114ed, $this, '__get', ['name' => $name], $this->initializer5ff2e) || 1) && $this->valueHolder114ed = $valueHolder114ed;

        if (isset(self::$publicProperties010f3[$name])) {
            return $this->valueHolder114ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
