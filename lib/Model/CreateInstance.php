<?php
/**
 * CreateInstance
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API for MySQL Cloud Service
 *
 * Use the REST API to manage MySQL Cloud Service instances
 *
 * OpenAPI spec version: 2017.01.18
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateInstance Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateInstance implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'create-instance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'service_parameters' => '\Swagger\Client\Model\CreateInstanceServiceParameters',
        'component_parameters' => '\Swagger\Client\Model\CreateInstanceComponentParameters'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'service_parameters' => 'serviceParameters',
        'component_parameters' => 'componentParameters'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'service_parameters' => 'setServiceParameters',
        'component_parameters' => 'setComponentParameters'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'service_parameters' => 'getServiceParameters',
        'component_parameters' => 'getComponentParameters'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['service_parameters'] = isset($data['service_parameters']) ? $data['service_parameters'] : null;
        $this->container['component_parameters'] = isset($data['component_parameters']) ? $data['component_parameters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['service_parameters'] === null) {
            $invalid_properties[] = "'service_parameters' can't be null";
        }
        if ($this->container['component_parameters'] === null) {
            $invalid_properties[] = "'component_parameters' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['service_parameters'] === null) {
            return false;
        }
        if ($this->container['component_parameters'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets service_parameters
     * @return \Swagger\Client\Model\CreateInstanceServiceParameters
     */
    public function getServiceParameters()
    {
        return $this->container['service_parameters'];
    }

    /**
     * Sets service_parameters
     * @param \Swagger\Client\Model\CreateInstanceServiceParameters $service_parameters
     * @return $this
     */
    public function setServiceParameters($service_parameters)
    {
        $this->container['service_parameters'] = $service_parameters;

        return $this;
    }

    /**
     * Gets component_parameters
     * @return \Swagger\Client\Model\CreateInstanceComponentParameters
     */
    public function getComponentParameters()
    {
        return $this->container['component_parameters'];
    }

    /**
     * Sets component_parameters
     * @param \Swagger\Client\Model\CreateInstanceComponentParameters $component_parameters
     * @return $this
     */
    public function setComponentParameters($component_parameters)
    {
        $this->container['component_parameters'] = $component_parameters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


