<?php
/**
 * DeleteBackupItem
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
 * OpenAPI spec version: 2017.01.06
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
 * DeleteBackupItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeleteBackupItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'delete-backup-item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'operation' => 'string',
        'job_id' => 'string',
        'status' => 'string',
        'start_date' => 'string',
        'complete_date' => 'string',
        'status_details' => 'string'
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
        'operation' => 'operation',
        'job_id' => 'jobId',
        'status' => 'status',
        'start_date' => 'startDate',
        'complete_date' => 'completeDate',
        'status_details' => 'statusDetails'
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
        'operation' => 'setOperation',
        'job_id' => 'setJobId',
        'status' => 'setStatus',
        'start_date' => 'setStartDate',
        'complete_date' => 'setCompleteDate',
        'status_details' => 'setStatusDetails'
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
        'operation' => 'getOperation',
        'job_id' => 'getJobId',
        'status' => 'getStatus',
        'start_date' => 'getStartDate',
        'complete_date' => 'getCompleteDate',
        'status_details' => 'getStatusDetails'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['complete_date'] = isset($data['complete_date']) ? $data['complete_date'] : null;
        $this->container['status_details'] = isset($data['status_details']) ? $data['status_details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets operation
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     * @param string $operation Type of operation that was executed. Set to <code>delete</code>.
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets job_id
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     * @param string $job_id Job ID for the delete backup operation.
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the delete backup operation. Valid values include: <code>Completed</code>, <code>Failed</code>, <code>Deleted</code>, or <code>Delete In Progress</code>.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param string $start_date Date and time the delete backup operation started.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets complete_date
     * @return string
     */
    public function getCompleteDate()
    {
        return $this->container['complete_date'];
    }

    /**
     * Sets complete_date
     * @param string $complete_date Date and time the delete backup operation completed.
     * @return $this
     */
    public function setCompleteDate($complete_date)
    {
        $this->container['complete_date'] = $complete_date;

        return $this;
    }

    /**
     * Gets status_details
     * @return string
     */
    public function getStatusDetails()
    {
        return $this->container['status_details'];
    }

    /**
     * Sets status_details
     * @param string $status_details History of system messages. Each message is separated by an ellipses <code>{...}</code>.
     * @return $this
     */
    public function setStatusDetails($status_details)
    {
        $this->container['status_details'] = $status_details;

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


