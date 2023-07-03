<?php
/**
 * ShipmentSchedule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentSchedule Class Doc Comment
 *
 * @category Class
 * @description Details about the estimated delivery window.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentSchedule extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'estimated_delivery_date_time' => 'string',
        'appt_window_start_date_time' => 'string',
        'appt_window_end_date_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'estimated_delivery_date_time' => null,
        'appt_window_start_date_time' => null,
        'appt_window_end_date_time' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'estimated_delivery_date_time' => 'estimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'apptWindowStartDateTime',
        'appt_window_end_date_time' => 'apptWindowEndDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimated_delivery_date_time' => 'setEstimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'setApptWindowStartDateTime',
        'appt_window_end_date_time' => 'setApptWindowEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimated_delivery_date_time' => 'getEstimatedDeliveryDateTime',
        'appt_window_start_date_time' => 'getApptWindowStartDateTime',
        'appt_window_end_date_time' => 'getApptWindowEndDateTime'
    ];


    
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
        $this->container['estimated_delivery_date_time'] = $data['estimated_delivery_date_time'] ?? null;
        $this->container['appt_window_start_date_time'] = $data['appt_window_start_date_time'] ?? null;
        $this->container['appt_window_end_date_time'] = $data['appt_window_end_date_time'] ?? null;
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
     * Gets estimated_delivery_date_time
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDateTime()
    {
        return $this->container['estimated_delivery_date_time'];
    }

    /**
     * Sets estimated_delivery_date_time
     *
     * @param string|null $estimated_delivery_date_time Date on which the shipment is expected to reach the customer delivery location. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return self
     */
    public function setEstimatedDeliveryDateTime($estimated_delivery_date_time)
    {
        $this->container['estimated_delivery_date_time'] = $estimated_delivery_date_time;

        return $this;
    }
    /**
     * Gets appt_window_start_date_time
     *
     * @return string|null
     */
    public function getApptWindowStartDateTime()
    {
        return $this->container['appt_window_start_date_time'];
    }

    /**
     * Sets appt_window_start_date_time
     *
     * @param string|null $appt_window_start_date_time This field indicates the date and time at the start of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return self
     */
    public function setApptWindowStartDateTime($appt_window_start_date_time)
    {
        $this->container['appt_window_start_date_time'] = $appt_window_start_date_time;

        return $this;
    }
    /**
     * Gets appt_window_end_date_time
     *
     * @return string|null
     */
    public function getApptWindowEndDateTime()
    {
        return $this->container['appt_window_end_date_time'];
    }

    /**
     * Sets appt_window_end_date_time
     *
     * @param string|null $appt_window_end_date_time This field indicates the date and time at the end of the appointment window scheduled to deliver the shipment. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return self
     */
    public function setApptWindowEndDateTime($appt_window_end_date_time)
    {
        $this->container['appt_window_end_date_time'] = $appt_window_end_date_time;

        return $this;
    }
}


