<?php
/**
 * PatchingresultAdditionalNote
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
 * PatchingresultAdditionalNote Class Doc Comment
 *
 * @category    Class */
 // @description Free-form text to provide additional information about the rollback.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PatchingresultAdditionalNote implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'patchingresult_additionalNote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'patching_id' => 'int',
        'backup_id' => 'string',
        'version_before_this_patch' => 'string',
        'strategy' => 'string',
        'meta_version_before_this_patch' => 'string',
        'custom_rollback_id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'patching_status' => 'string',
        'result_message' => 'string',
        'additional_note' => 'string',
        'applied_by' => 'string',
        'job_id' => 'string',
        'complete_log' => 'string',
        'progress_messages' => 'string[]'
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
        'patching_id' => 'patchingId',
        'backup_id' => 'backupId',
        'version_before_this_patch' => 'versionBeforeThisPatch',
        'strategy' => 'strategy',
        'meta_version_before_this_patch' => 'metaVersionBeforeThisPatch',
        'custom_rollback_id' => 'customRollbackId',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'patching_status' => 'patchingStatus',
        'result_message' => 'resultMessage',
        'additional_note' => 'additionalNote',
        'applied_by' => 'appliedBy',
        'job_id' => 'jobId',
        'complete_log' => 'completeLog',
        'progress_messages' => 'progressMessages'
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
        'patching_id' => 'setPatchingId',
        'backup_id' => 'setBackupId',
        'version_before_this_patch' => 'setVersionBeforeThisPatch',
        'strategy' => 'setStrategy',
        'meta_version_before_this_patch' => 'setMetaVersionBeforeThisPatch',
        'custom_rollback_id' => 'setCustomRollbackId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'patching_status' => 'setPatchingStatus',
        'result_message' => 'setResultMessage',
        'additional_note' => 'setAdditionalNote',
        'applied_by' => 'setAppliedBy',
        'job_id' => 'setJobId',
        'complete_log' => 'setCompleteLog',
        'progress_messages' => 'setProgressMessages'
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
        'patching_id' => 'getPatchingId',
        'backup_id' => 'getBackupId',
        'version_before_this_patch' => 'getVersionBeforeThisPatch',
        'strategy' => 'getStrategy',
        'meta_version_before_this_patch' => 'getMetaVersionBeforeThisPatch',
        'custom_rollback_id' => 'getCustomRollbackId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'patching_status' => 'getPatchingStatus',
        'result_message' => 'getResultMessage',
        'additional_note' => 'getAdditionalNote',
        'applied_by' => 'getAppliedBy',
        'job_id' => 'getJobId',
        'complete_log' => 'getCompleteLog',
        'progress_messages' => 'getProgressMessages'
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
        $this->container['patching_id'] = isset($data['patching_id']) ? $data['patching_id'] : null;
        $this->container['backup_id'] = isset($data['backup_id']) ? $data['backup_id'] : null;
        $this->container['version_before_this_patch'] = isset($data['version_before_this_patch']) ? $data['version_before_this_patch'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['meta_version_before_this_patch'] = isset($data['meta_version_before_this_patch']) ? $data['meta_version_before_this_patch'] : null;
        $this->container['custom_rollback_id'] = isset($data['custom_rollback_id']) ? $data['custom_rollback_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['patching_status'] = isset($data['patching_status']) ? $data['patching_status'] : null;
        $this->container['result_message'] = isset($data['result_message']) ? $data['result_message'] : null;
        $this->container['additional_note'] = isset($data['additional_note']) ? $data['additional_note'] : null;
        $this->container['applied_by'] = isset($data['applied_by']) ? $data['applied_by'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['complete_log'] = isset($data['complete_log']) ? $data['complete_log'] : null;
        $this->container['progress_messages'] = isset($data['progress_messages']) ? $data['progress_messages'] : null;
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
     * Gets patching_id
     * @return int
     */
    public function getPatchingId()
    {
        return $this->container['patching_id'];
    }

    /**
     * Sets patching_id
     * @param int $patching_id ID of the applied patch operation.
     * @return $this
     */
    public function setPatchingId($patching_id)
    {
        $this->container['patching_id'] = $patching_id;

        return $this;
    }

    /**
     * Gets backup_id
     * @return string
     */
    public function getBackupId()
    {
        return $this->container['backup_id'];
    }

    /**
     * Sets backup_id
     * @param string $backup_id Backup ID. You can use the backup ID to manage the backup.
     * @return $this
     */
    public function setBackupId($backup_id)
    {
        $this->container['backup_id'] = $backup_id;

        return $this;
    }

    /**
     * Gets version_before_this_patch
     * @return string
     */
    public function getVersionBeforeThisPatch()
    {
        return $this->container['version_before_this_patch'];
    }

    /**
     * Sets version_before_this_patch
     * @param string $version_before_this_patch Version of the component before the patch was applied.
     * @return $this
     */
    public function setVersionBeforeThisPatch($version_before_this_patch)
    {
        $this->container['version_before_this_patch'] = $version_before_this_patch;

        return $this;
    }

    /**
     * Gets strategy
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     * @param string $strategy Patching strategy. For example, <code>Rolling</code>. To minimize service disruption, the patch is applied in a rolling pattern, patching a single node at a time.
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets meta_version_before_this_patch
     * @return string
     */
    public function getMetaVersionBeforeThisPatch()
    {
        return $this->container['meta_version_before_this_patch'];
    }

    /**
     * Sets meta_version_before_this_patch
     * @param string $meta_version_before_this_patch Version of the metadata service manager before the patch was applied.
     * @return $this
     */
    public function setMetaVersionBeforeThisPatch($meta_version_before_this_patch)
    {
        $this->container['meta_version_before_this_patch'] = $meta_version_before_this_patch;

        return $this;
    }

    /**
     * Gets custom_rollback_id
     * @return string
     */
    public function getCustomRollbackId()
    {
        return $this->container['custom_rollback_id'];
    }

    /**
     * Sets custom_rollback_id
     * @param string $custom_rollback_id ID to be used in a rollback operation.
     * @return $this
     */
    public function setCustomRollbackId($custom_rollback_id)
    {
        $this->container['custom_rollback_id'] = $custom_rollback_id;

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
     * @param string $start_date Date and time that the patch operation started.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param string $end_date Date the patch operation ended.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets patching_status
     * @return string
     */
    public function getPatchingStatus()
    {
        return $this->container['patching_status'];
    }

    /**
     * Sets patching_status
     * @param string $patching_status Status of the patching operation. For example, <code>COMPLETED</code>. <code>COMPLETED_ROLLBACK</code> is displayed when an applied patch has been rolled back.
     * @return $this
     */
    public function setPatchingStatus($patching_status)
    {
        $this->container['patching_status'] = $patching_status;

        return $this;
    }

    /**
     * Gets result_message
     * @return string
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     * @param string $result_message System message that describes the patching operation.
     * @return $this
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

        return $this;
    }

    /**
     * Gets additional_note
     * @return string
     */
    public function getAdditionalNote()
    {
        return $this->container['additional_note'];
    }

    /**
     * Sets additional_note
     * @param string $additional_note Free-form text to provide additional information about the patch.
     * @return $this
     */
    public function setAdditionalNote($additional_note)
    {
        $this->container['additional_note'] = $additional_note;

        return $this;
    }

    /**
     * Gets applied_by
     * @return string
     */
    public function getAppliedBy()
    {
        return $this->container['applied_by'];
    }

    /**
     * Sets applied_by
     * @param string $applied_by Name of the user that applied the patch. <code>system</code> displays if the patch was applied by an auto-update scheduled job.
     * @return $this
     */
    public function setAppliedBy($applied_by)
    {
        $this->container['applied_by'] = $applied_by;

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
     * @param string $job_id Job ID for the patch operation.
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets complete_log
     * @return string
     */
    public function getCompleteLog()
    {
        return $this->container['complete_log'];
    }

    /**
     * Sets complete_log
     * @param string $complete_log System messages that track the patch operations.
     * @return $this
     */
    public function setCompleteLog($complete_log)
    {
        $this->container['complete_log'] = $complete_log;

        return $this;
    }

    /**
     * Gets progress_messages
     * @return string[]
     */
    public function getProgressMessages()
    {
        return $this->container['progress_messages'];
    }

    /**
     * Sets progress_messages
     * @param string[] $progress_messages List of progress messages for the patch.
     * @return $this
     */
    public function setProgressMessages($progress_messages)
    {
        $this->container['progress_messages'] = $progress_messages;

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


