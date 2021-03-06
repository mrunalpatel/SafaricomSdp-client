<?php
/**
 * CPModify
 *
 * PHP version 5
 *
 * @category Class
 * @package  Safaricom\Sdp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SDP
 *
 * To Test SDP API's Login with valid Username and Password. Add the Token in the X-Authorization as an key starting the value with Bearer along with Token in authorization     filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Safaricom\Sdp\model;

use \ArrayAccess;
use \Safaricom\Sdp\ObjectSerializer;

/**
 * CPModify Class Doc Comment
 *
 * @category Class
 * @package  Safaricom\Sdp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CPModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CPModify';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_id' => 'string',
        'request_time_stamp' => 'string',
        'operation' => 'string',
        'id' => 'string',
        'name' => 'string',
        'desc' => 'string',
        'email_id' => 'string',
        'parent_id' => 'string',
        'username' => 'string',
        'password' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'status' => 'string',
        'allowed_ips' => 'string[]',
        'cdp' => '\Safaricom\Sdp\model\CPRegisterCdp',
        'cms' => '\Safaricom\Sdp\model\CPRegisterCms',
        'apis' => '\Safaricom\Sdp\model\CPRegisterApis',
        'shortcodes' => '\Safaricom\Sdp\model\CPRegisterShortcodes',
        'sender_name' => '\Safaricom\Sdp\model\CPRegisterSenderName',
        'scheduled_start_time' => 'string',
        'scheduled_end_time' => 'string',
        'quota_refund_type' => 'string',
        'charging_models' => 'string[]',
        'offer_types' => 'string[]',
        'charging_system' => 'string[]',
        'created_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_id' => null,
        'request_time_stamp' => null,
        'operation' => null,
        'id' => null,
        'name' => null,
        'desc' => null,
        'email_id' => null,
        'parent_id' => null,
        'username' => null,
        'password' => null,
        'start_date' => null,
        'end_date' => null,
        'status' => null,
        'allowed_ips' => null,
        'cdp' => null,
        'cms' => null,
        'apis' => null,
        'shortcodes' => null,
        'sender_name' => null,
        'scheduled_start_time' => null,
        'scheduled_end_time' => null,
        'quota_refund_type' => null,
        'charging_models' => null,
        'offer_types' => null,
        'charging_system' => null,
        'created_by' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_id' => 'requestId',
        'request_time_stamp' => 'requestTimeStamp',
        'operation' => 'operation',
        'id' => 'id',
        'name' => 'name',
        'desc' => 'desc',
        'email_id' => 'emailId',
        'parent_id' => 'parentId',
        'username' => 'username',
        'password' => 'password',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'status' => 'status',
        'allowed_ips' => 'allowedIps',
        'cdp' => 'cdp',
        'cms' => 'cms',
        'apis' => 'apis',
        'shortcodes' => 'shortcodes',
        'sender_name' => 'senderName',
        'scheduled_start_time' => 'scheduledStartTime',
        'scheduled_end_time' => 'scheduledEndTime',
        'quota_refund_type' => 'quotaRefundType',
        'charging_models' => 'chargingModels',
        'offer_types' => 'offerTypes',
        'charging_system' => 'chargingSystem',
        'created_by' => 'createdBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
        'request_time_stamp' => 'setRequestTimeStamp',
        'operation' => 'setOperation',
        'id' => 'setId',
        'name' => 'setName',
        'desc' => 'setDesc',
        'email_id' => 'setEmailId',
        'parent_id' => 'setParentId',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'allowed_ips' => 'setAllowedIps',
        'cdp' => 'setCdp',
        'cms' => 'setCms',
        'apis' => 'setApis',
        'shortcodes' => 'setShortcodes',
        'sender_name' => 'setSenderName',
        'scheduled_start_time' => 'setScheduledStartTime',
        'scheduled_end_time' => 'setScheduledEndTime',
        'quota_refund_type' => 'setQuotaRefundType',
        'charging_models' => 'setChargingModels',
        'offer_types' => 'setOfferTypes',
        'charging_system' => 'setChargingSystem',
        'created_by' => 'setCreatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
        'request_time_stamp' => 'getRequestTimeStamp',
        'operation' => 'getOperation',
        'id' => 'getId',
        'name' => 'getName',
        'desc' => 'getDesc',
        'email_id' => 'getEmailId',
        'parent_id' => 'getParentId',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'allowed_ips' => 'getAllowedIps',
        'cdp' => 'getCdp',
        'cms' => 'getCms',
        'apis' => 'getApis',
        'shortcodes' => 'getShortcodes',
        'sender_name' => 'getSenderName',
        'scheduled_start_time' => 'getScheduledStartTime',
        'scheduled_end_time' => 'getScheduledEndTime',
        'quota_refund_type' => 'getQuotaRefundType',
        'charging_models' => 'getChargingModels',
        'offer_types' => 'getOfferTypes',
        'charging_system' => 'getChargingSystem',
        'created_by' => 'getCreatedBy'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['request_time_stamp'] = isset($data['request_time_stamp']) ? $data['request_time_stamp'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['allowed_ips'] = isset($data['allowed_ips']) ? $data['allowed_ips'] : null;
        $this->container['cdp'] = isset($data['cdp']) ? $data['cdp'] : null;
        $this->container['cms'] = isset($data['cms']) ? $data['cms'] : null;
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
        $this->container['shortcodes'] = isset($data['shortcodes']) ? $data['shortcodes'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['scheduled_start_time'] = isset($data['scheduled_start_time']) ? $data['scheduled_start_time'] : null;
        $this->container['scheduled_end_time'] = isset($data['scheduled_end_time']) ? $data['scheduled_end_time'] : null;
        $this->container['quota_refund_type'] = isset($data['quota_refund_type']) ? $data['quota_refund_type'] : null;
        $this->container['charging_models'] = isset($data['charging_models']) ? $data['charging_models'] : null;
        $this->container['offer_types'] = isset($data['offer_types']) ? $data['offer_types'] : null;
        $this->container['charging_system'] = isset($data['charging_system']) ? $data['charging_system'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id request_id
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets request_time_stamp
     *
     * @return string
     */
    public function getRequestTimeStamp()
    {
        return $this->container['request_time_stamp'];
    }

    /**
     * Sets request_time_stamp
     *
     * @param string $request_time_stamp request_time_stamp
     *
     * @return $this
     */
    public function setRequestTimeStamp($request_time_stamp)
    {
        $this->container['request_time_stamp'] = $request_time_stamp;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string $email_id email_id
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets allowed_ips
     *
     * @return string[]
     */
    public function getAllowedIps()
    {
        return $this->container['allowed_ips'];
    }

    /**
     * Sets allowed_ips
     *
     * @param string[] $allowed_ips allowed_ips
     *
     * @return $this
     */
    public function setAllowedIps($allowed_ips)
    {
        $this->container['allowed_ips'] = $allowed_ips;

        return $this;
    }

    /**
     * Gets cdp
     *
     * @return \Safaricom\Sdp\model\CPRegisterCdp
     */
    public function getCdp()
    {
        return $this->container['cdp'];
    }

    /**
     * Sets cdp
     *
     * @param \Safaricom\Sdp\model\CPRegisterCdp $cdp cdp
     *
     * @return $this
     */
    public function setCdp($cdp)
    {
        $this->container['cdp'] = $cdp;

        return $this;
    }

    /**
     * Gets cms
     *
     * @return \Safaricom\Sdp\model\CPRegisterCms
     */
    public function getCms()
    {
        return $this->container['cms'];
    }

    /**
     * Sets cms
     *
     * @param \Safaricom\Sdp\model\CPRegisterCms $cms cms
     *
     * @return $this
     */
    public function setCms($cms)
    {
        $this->container['cms'] = $cms;

        return $this;
    }

    /**
     * Gets apis
     *
     * @return \Safaricom\Sdp\model\CPRegisterApis
     */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
     * Sets apis
     *
     * @param \Safaricom\Sdp\model\CPRegisterApis $apis apis
     *
     * @return $this
     */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;

        return $this;
    }

    /**
     * Gets shortcodes
     *
     * @return \Safaricom\Sdp\model\CPRegisterShortcodes
     */
    public function getShortcodes()
    {
        return $this->container['shortcodes'];
    }

    /**
     * Sets shortcodes
     *
     * @param \Safaricom\Sdp\model\CPRegisterShortcodes $shortcodes shortcodes
     *
     * @return $this
     */
    public function setShortcodes($shortcodes)
    {
        $this->container['shortcodes'] = $shortcodes;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return \Safaricom\Sdp\model\CPRegisterSenderName
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param \Safaricom\Sdp\model\CPRegisterSenderName $sender_name sender_name
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets scheduled_start_time
     *
     * @return string
     */
    public function getScheduledStartTime()
    {
        return $this->container['scheduled_start_time'];
    }

    /**
     * Sets scheduled_start_time
     *
     * @param string $scheduled_start_time scheduled_start_time
     *
     * @return $this
     */
    public function setScheduledStartTime($scheduled_start_time)
    {
        $this->container['scheduled_start_time'] = $scheduled_start_time;

        return $this;
    }

    /**
     * Gets scheduled_end_time
     *
     * @return string
     */
    public function getScheduledEndTime()
    {
        return $this->container['scheduled_end_time'];
    }

    /**
     * Sets scheduled_end_time
     *
     * @param string $scheduled_end_time scheduled_end_time
     *
     * @return $this
     */
    public function setScheduledEndTime($scheduled_end_time)
    {
        $this->container['scheduled_end_time'] = $scheduled_end_time;

        return $this;
    }

    /**
     * Gets quota_refund_type
     *
     * @return string
     */
    public function getQuotaRefundType()
    {
        return $this->container['quota_refund_type'];
    }

    /**
     * Sets quota_refund_type
     *
     * @param string $quota_refund_type quota_refund_type
     *
     * @return $this
     */
    public function setQuotaRefundType($quota_refund_type)
    {
        $this->container['quota_refund_type'] = $quota_refund_type;

        return $this;
    }

    /**
     * Gets charging_models
     *
     * @return string[]
     */
    public function getChargingModels()
    {
        return $this->container['charging_models'];
    }

    /**
     * Sets charging_models
     *
     * @param string[] $charging_models charging_models
     *
     * @return $this
     */
    public function setChargingModels($charging_models)
    {
        $this->container['charging_models'] = $charging_models;

        return $this;
    }

    /**
     * Gets offer_types
     *
     * @return string[]
     */
    public function getOfferTypes()
    {
        return $this->container['offer_types'];
    }

    /**
     * Sets offer_types
     *
     * @param string[] $offer_types offer_types
     *
     * @return $this
     */
    public function setOfferTypes($offer_types)
    {
        $this->container['offer_types'] = $offer_types;

        return $this;
    }

    /**
     * Gets charging_system
     *
     * @return string[]
     */
    public function getChargingSystem()
    {
        return $this->container['charging_system'];
    }

    /**
     * Sets charging_system
     *
     * @param string[] $charging_system charging_system
     *
     * @return $this
     */
    public function setChargingSystem($charging_system)
    {
        $this->container['charging_system'] = $charging_system;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


