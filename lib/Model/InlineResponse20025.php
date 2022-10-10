<?php
/**
 * InlineResponse20025
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Overseerr API
 *
 * This is the documentation for the Overseerr API backend.  Two primary authentication methods are supported:  - **Cookie Authentication**: A valid sign-in to the `/auth/plex` or `/auth/local` will generate a valid authentication cookie. - **API Key Authentication**: Sign-in is also possible by passing an `X-Api-Key` header along with a valid API Key generated by Overseerr.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20025 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20025 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_25';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'year' => 'float',
'url' => 'string',
'critics_score' => 'float',
'critics_rating' => 'string',
'audience_score' => 'float',
'audience_rating' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'year' => null,
'url' => null,
'critics_score' => null,
'critics_rating' => null,
'audience_score' => null,
'audience_rating' => null    ];

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
        'title' => 'title',
'year' => 'year',
'url' => 'url',
'critics_score' => 'criticsScore',
'critics_rating' => 'criticsRating',
'audience_score' => 'audienceScore',
'audience_rating' => 'audienceRating'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'year' => 'setYear',
'url' => 'setUrl',
'critics_score' => 'setCriticsScore',
'critics_rating' => 'setCriticsRating',
'audience_score' => 'setAudienceScore',
'audience_rating' => 'setAudienceRating'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'year' => 'getYear',
'url' => 'getUrl',
'critics_score' => 'getCriticsScore',
'critics_rating' => 'getCriticsRating',
'audience_score' => 'getAudienceScore',
'audience_rating' => 'getAudienceRating'    ];

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

    const CRITICS_RATING_ROTTEN = 'Rotten';
const CRITICS_RATING_FRESH = 'Fresh';
const CRITICS_RATING_CERTIFIED_FRESH = 'Certified Fresh';
const AUDIENCE_RATING_SPILLED = 'Spilled';
const AUDIENCE_RATING_UPRIGHT = 'Upright';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCriticsRatingAllowableValues()
    {
        return [
            self::CRITICS_RATING_ROTTEN,
self::CRITICS_RATING_FRESH,
self::CRITICS_RATING_CERTIFIED_FRESH,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAudienceRatingAllowableValues()
    {
        return [
            self::AUDIENCE_RATING_SPILLED,
self::AUDIENCE_RATING_UPRIGHT,        ];
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['critics_score'] = isset($data['critics_score']) ? $data['critics_score'] : null;
        $this->container['critics_rating'] = isset($data['critics_rating']) ? $data['critics_rating'] : null;
        $this->container['audience_score'] = isset($data['audience_score']) ? $data['audience_score'] : null;
        $this->container['audience_rating'] = isset($data['audience_rating']) ? $data['audience_rating'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCriticsRatingAllowableValues();
        if (!is_null($this->container['critics_rating']) && !in_array($this->container['critics_rating'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'critics_rating', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAudienceRatingAllowableValues();
        if (!is_null($this->container['audience_rating']) && !in_array($this->container['audience_rating'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'audience_rating', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets year
     *
     * @return float
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param float $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets critics_score
     *
     * @return float
     */
    public function getCriticsScore()
    {
        return $this->container['critics_score'];
    }

    /**
     * Sets critics_score
     *
     * @param float $critics_score critics_score
     *
     * @return $this
     */
    public function setCriticsScore($critics_score)
    {
        $this->container['critics_score'] = $critics_score;

        return $this;
    }

    /**
     * Gets critics_rating
     *
     * @return string
     */
    public function getCriticsRating()
    {
        return $this->container['critics_rating'];
    }

    /**
     * Sets critics_rating
     *
     * @param string $critics_rating critics_rating
     *
     * @return $this
     */
    public function setCriticsRating($critics_rating)
    {
        $allowedValues = $this->getCriticsRatingAllowableValues();
        if (!is_null($critics_rating) && !in_array($critics_rating, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'critics_rating', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['critics_rating'] = $critics_rating;

        return $this;
    }

    /**
     * Gets audience_score
     *
     * @return float
     */
    public function getAudienceScore()
    {
        return $this->container['audience_score'];
    }

    /**
     * Sets audience_score
     *
     * @param float $audience_score audience_score
     *
     * @return $this
     */
    public function setAudienceScore($audience_score)
    {
        $this->container['audience_score'] = $audience_score;

        return $this;
    }

    /**
     * Gets audience_rating
     *
     * @return string
     */
    public function getAudienceRating()
    {
        return $this->container['audience_rating'];
    }

    /**
     * Sets audience_rating
     *
     * @param string $audience_rating audience_rating
     *
     * @return $this
     */
    public function setAudienceRating($audience_rating)
    {
        $allowedValues = $this->getAudienceRatingAllowableValues();
        if (!is_null($audience_rating) && !in_array($audience_rating, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'audience_rating', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['audience_rating'] = $audience_rating;

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
