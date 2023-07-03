<?php
/**
 * OrderItemStatusReceivingStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorOrdersV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * OrderItemStatusReceivingStatus Class Doc Comment
 *
 * @category Class
 * @description Item receive status at the buyer's warehouse.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatusReceivingStatus extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus_receivingStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'receive_status' => 'string',
        'received_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity',
        'last_receive_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'receive_status' => null,
        'received_quantity' => null,
        'last_receive_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'receive_status' => 'receiveStatus',
        'received_quantity' => 'receivedQuantity',
        'last_receive_date' => 'lastReceiveDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receive_status' => 'setReceiveStatus',
        'received_quantity' => 'setReceivedQuantity',
        'last_receive_date' => 'setLastReceiveDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receive_status' => 'getReceiveStatus',
        'received_quantity' => 'getReceivedQuantity',
        'last_receive_date' => 'getLastReceiveDate'
    ];



    const RECEIVE_STATUS_NOT_RECEIVED = 'NOT_RECEIVED';
    const RECEIVE_STATUS_PARTIALLY_RECEIVED = 'PARTIALLY_RECEIVED';
    const RECEIVE_STATUS_RECEIVED = 'RECEIVED';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReceiveStatusAllowableValues()
    {
        $baseVals = [
            self::RECEIVE_STATUS_NOT_RECEIVED,
            self::RECEIVE_STATUS_PARTIALLY_RECEIVED,
            self::RECEIVE_STATUS_RECEIVED,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['receive_status'] = $data['receive_status'] ?? null;
        $this->container['received_quantity'] = $data['received_quantity'] ?? null;
        $this->container['last_receive_date'] = $data['last_receive_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getReceiveStatusAllowableValues();
        if (
            !is_null($this->container['receive_status']) &&
            !in_array(strtoupper($this->container['receive_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'receive_status', must be one of '%s'",
                $this->container['receive_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets receive_status
     *
     * @return string|null
     */
    public function getReceiveStatus()
    {
        return $this->container['receive_status'];
    }

    /**
     * Sets receive_status
     *
     * @param string|null $receive_status Receive status of the line item.
     *
     * @return self
     */
    public function setReceiveStatus($receive_status)
    {
        $allowedValues = $this->getReceiveStatusAllowableValues();
        if (!is_null($receive_status) &&!in_array(strtoupper($receive_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'receive_status', must be one of '%s'",
                    $receive_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['receive_status'] = $receive_status;

        return $this;
    }
    /**
     * Gets received_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getReceivedQuantity()
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $received_quantity received_quantity
     *
     * @return self
     */
    public function setReceivedQuantity($received_quantity)
    {
        $this->container['received_quantity'] = $received_quantity;

        return $this;
    }
    /**
     * Gets last_receive_date
     *
     * @return string|null
     */
    public function getLastReceiveDate()
    {
        return $this->container['last_receive_date'];
    }

    /**
     * Sets last_receive_date
     *
     * @param string|null $last_receive_date The date when the most recent item was received at the buyer's warehouse. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setLastReceiveDate($last_receive_date)
    {
        $this->container['last_receive_date'] = $last_receive_date;

        return $this;
    }
}


