<?php
/**
 * CreateInstanceServiceParameters
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
 * CreateInstanceServiceParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateInstanceServiceParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'create-instance-service-parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'service_name' => 'string',
        'service_description' => 'string',
        'metering_frequency' => 'string',
        'backup_destination' => 'string',
        'cloud_storage_container' => 'string',
        'cloud_storage_user' => 'string',
        'cloud_storage_password' => 'string',
        'cloud_storage_container_auto_generate' => 'bool',
        'vm_user' => 'string',
        'vm_public_key_text' => 'string',
        'no_rollback' => 'bool'
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
        'service_name' => 'serviceName',
        'service_description' => 'serviceDescription',
        'metering_frequency' => 'meteringFrequency',
        'backup_destination' => 'backupDestination',
        'cloud_storage_container' => 'cloudStorageContainer',
        'cloud_storage_user' => 'cloudStorageUser',
        'cloud_storage_password' => 'cloudStoragePassword',
        'cloud_storage_container_auto_generate' => 'cloudStorageContainerAutoGenerate',
        'vm_user' => 'vmUser',
        'vm_public_key_text' => 'vmPublicKeyText',
        'no_rollback' => 'noRollback'
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
        'service_name' => 'setServiceName',
        'service_description' => 'setServiceDescription',
        'metering_frequency' => 'setMeteringFrequency',
        'backup_destination' => 'setBackupDestination',
        'cloud_storage_container' => 'setCloudStorageContainer',
        'cloud_storage_user' => 'setCloudStorageUser',
        'cloud_storage_password' => 'setCloudStoragePassword',
        'cloud_storage_container_auto_generate' => 'setCloudStorageContainerAutoGenerate',
        'vm_user' => 'setVmUser',
        'vm_public_key_text' => 'setVmPublicKeyText',
        'no_rollback' => 'setNoRollback'
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
        'service_name' => 'getServiceName',
        'service_description' => 'getServiceDescription',
        'metering_frequency' => 'getMeteringFrequency',
        'backup_destination' => 'getBackupDestination',
        'cloud_storage_container' => 'getCloudStorageContainer',
        'cloud_storage_user' => 'getCloudStorageUser',
        'cloud_storage_password' => 'getCloudStoragePassword',
        'cloud_storage_container_auto_generate' => 'getCloudStorageContainerAutoGenerate',
        'vm_user' => 'getVmUser',
        'vm_public_key_text' => 'getVmPublicKeyText',
        'no_rollback' => 'getNoRollback'
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
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['service_description'] = isset($data['service_description']) ? $data['service_description'] : null;
        $this->container['metering_frequency'] = isset($data['metering_frequency']) ? $data['metering_frequency'] : null;
        $this->container['backup_destination'] = isset($data['backup_destination']) ? $data['backup_destination'] : null;
        $this->container['cloud_storage_container'] = isset($data['cloud_storage_container']) ? $data['cloud_storage_container'] : null;
        $this->container['cloud_storage_user'] = isset($data['cloud_storage_user']) ? $data['cloud_storage_user'] : null;
        $this->container['cloud_storage_password'] = isset($data['cloud_storage_password']) ? $data['cloud_storage_password'] : null;
        $this->container['cloud_storage_container_auto_generate'] = isset($data['cloud_storage_container_auto_generate']) ? $data['cloud_storage_container_auto_generate'] : null;
        $this->container['vm_user'] = isset($data['vm_user']) ? $data['vm_user'] : null;
        $this->container['vm_public_key_text'] = isset($data['vm_public_key_text']) ? $data['vm_public_key_text'] : null;
        $this->container['no_rollback'] = isset($data['no_rollback']) ? $data['no_rollback'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['service_name'] === null) {
            $invalid_properties[] = "'service_name' can't be null";
        }
        if ($this->container['vm_public_key_text'] === null) {
            $invalid_properties[] = "'vm_public_key_text' can't be null";
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
        if ($this->container['service_name'] === null) {
            return false;
        }
        if ($this->container['vm_public_key_text'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets service_name
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     * @param string $service_name Name of MySQL Cloud Service instance. The service name:<ul><li>Must not exceed 50 characters.</li><li>Must start with a letter.</li><li>Must contain only letters, numbers, or hyphens.</li><li>Must not end with a hyphen.</li><li>Must not contain any other special characters.</li><li>Must be unique within the identity domain.</li></ul>
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets service_description
     * @return string
     */
    public function getServiceDescription()
    {
        return $this->container['service_description'];
    }

    /**
     * Sets service_description
     * @param string $service_description Free-form text that provides additional information about the service instance.
     * @return $this
     */
    public function setServiceDescription($service_description)
    {
        $this->container['service_description'] = $service_description;

        return $this;
    }

    /**
     * Gets metering_frequency
     * @return string
     */
    public function getMeteringFrequency()
    {
        return $this->container['metering_frequency'];
    }

    /**
     * Sets metering_frequency
     * @param string $metering_frequency The billing frequency of the service instance; either <code>MONTHLY</code> or <code>HOURLY</code>.
     * @return $this
     */
    public function setMeteringFrequency($metering_frequency)
    {
        $this->container['metering_frequency'] = $metering_frequency;

        return $this;
    }

    /**
     * Gets backup_destination
     * @return string
     */
    public function getBackupDestination()
    {
        return $this->container['backup_destination'];
    }

    /**
     * Sets backup_destination
     * @param string $backup_destination Backup destination. Valid values are: <li><code>BOTH</code> - Both Cloud Storage and Local Storage</li><li><code>NONE</code> - None</li>
     * @return $this
     */
    public function setBackupDestination($backup_destination)
    {
        $this->container['backup_destination'] = $backup_destination;

        return $this;
    }

    /**
     * Gets cloud_storage_container
     * @return string
     */
    public function getCloudStorageContainer()
    {
        return $this->container['cloud_storage_container'];
    }

    /**
     * Sets cloud_storage_container
     * @param string $cloud_storage_container Name of the Oracle Storage Cloud Service container used to provide storage for your service instance backups. Use the following format to specify the container name: <code>&lt;<i>storageservicename</i>&gt;-&lt;<i>storageidentitydomain</i>&gt;&#47;&lt;<i>containername</i>&gt;</code><p><b>Notes</b>:<ul><li>An Oracle Storage Cloud Service container is not required when provisioning a MySQL Cloud Service instance.</li><li>Do not use an Oracle Storage Cloud container that you use to back up MySQL Cloud Service instances for any other purpose. Using the container for multiple purposes can result in billing errors.</li></ul>
     * @return $this
     */
    public function setCloudStorageContainer($cloud_storage_container)
    {
        $this->container['cloud_storage_container'] = $cloud_storage_container;

        return $this;
    }

    /**
     * Gets cloud_storage_user
     * @return string
     */
    public function getCloudStorageUser()
    {
        return $this->container['cloud_storage_user'];
    }

    /**
     * Sets cloud_storage_user
     * @param string $cloud_storage_user Username for the Oracle Storage Cloud Service administrator.
     * @return $this
     */
    public function setCloudStorageUser($cloud_storage_user)
    {
        $this->container['cloud_storage_user'] = $cloud_storage_user;

        return $this;
    }

    /**
     * Gets cloud_storage_password
     * @return string
     */
    public function getCloudStoragePassword()
    {
        return $this->container['cloud_storage_password'];
    }

    /**
     * Sets cloud_storage_password
     * @param string $cloud_storage_password Password for the Oracle Storage Cloud Service administrator.
     * @return $this
     */
    public function setCloudStoragePassword($cloud_storage_password)
    {
        $this->container['cloud_storage_password'] = $cloud_storage_password;

        return $this;
    }

    /**
     * Gets cloud_storage_container_auto_generate
     * @return bool
     */
    public function getCloudStorageContainerAutoGenerate()
    {
        return $this->container['cloud_storage_container_auto_generate'];
    }

    /**
     * Sets cloud_storage_container_auto_generate
     * @param bool $cloud_storage_container_auto_generate Indicate whether to create an Oracle Storage Cloud container automatically.
     * @return $this
     */
    public function setCloudStorageContainerAutoGenerate($cloud_storage_container_auto_generate)
    {
        $this->container['cloud_storage_container_auto_generate'] = $cloud_storage_container_auto_generate;

        return $this;
    }

    /**
     * Gets vm_user
     * @return string
     */
    public function getVmUser()
    {
        return $this->container['vm_user'];
    }

    /**
     * Sets vm_user
     * @param string $vm_user VM operating system user that is valid for variations of compute based services. It will default to the username <code>opc</code> when not specified.
     * @return $this
     */
    public function setVmUser($vm_user)
    {
        $this->container['vm_user'] = $vm_user;

        return $this;
    }

    /**
     * Gets vm_public_key_text
     * @return string
     */
    public function getVmPublicKeyText()
    {
        return $this->container['vm_public_key_text'];
    }

    /**
     * Sets vm_public_key_text
     * @param string $vm_public_key_text Public key for the secure shell (SSH). This key will be used for authentication when connecting to the MySQL Cloud Service instance using an SSH client. You generate an SSH public-private key pair using a standard SSH key generation tool.
     * @return $this
     */
    public function setVmPublicKeyText($vm_public_key_text)
    {
        $this->container['vm_public_key_text'] = $vm_public_key_text;

        return $this;
    }

    /**
     * Gets no_rollback
     * @return bool
     */
    public function getNoRollback()
    {
        return $this->container['no_rollback'];
    }

    /**
     * Sets no_rollback
     * @param bool $no_rollback This optional property can be set to <code>true</code> to avoid automatic rollback and retry for the service.
     * @return $this
     */
    public function setNoRollback($no_rollback)
    {
        $this->container['no_rollback'] = $no_rollback;

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


