<?php

namespace EdRush\Extbaser\VO;

use EdRush\Extbaser\VO\ExtensionBuilderConfiguration\Module;
use EdRush\Extbaser\VO\ExtensionBuilderConfiguration\Properties;
use EdRush\Extbaser\VO\ExtensionBuilderConfiguration\Log;

/**
 * @author weberius
 */
class ExtensionBuilderConfiguration
{
    /**
     * @var Module[]
     */
    public $modules = array();

    /**
     * @var Properties
     */
    public $properties;

    /**
     * @var array
     */
    public $wires = array();

    /**
     * @var Log
     */
    public $log;

    public function __construct()
    {
        $this->properties = new Properties();
        $this->log = new Log();
    }

    public function addModule(Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Extension key is in $this->properties.
     *
     * @return ExtensionBuilderConfiguration
     */
    public function setExtensionKey($extensionKey)
    {
        $this->properties->setExtensionKey($extensionKey);

        return $this;
    }

    /**
     * Last modified is in $this->log.
     *
     * @return ExtensionBuilderConfiguration
     */
    public function setLastModified($last_modified)
    {
        $this->log->setLastModified($last_modified);

        return $this;
    }

    public function getModules()
    {
        return $this->modules;
    }
    public function setModules(array $modules)
    {
        $this->modules = $modules;

        return $this;
    }
    public function getProperties()
    {
        return $this->properties;
    }
    public function setProperties(Properties $properties)
    {
        $this->properties = $properties;

        return $this;
    }
    public function getWires()
    {
        return $this->wires;
    }
    public function setWires(array $wires)
    {
        $this->wires = $wires;

        return $this;
    }
    public function getLog()
    {
        return $this->log;
    }
    public function setLog(Log $log)
    {
        $this->log = $log;

        return $this;
    }
}
