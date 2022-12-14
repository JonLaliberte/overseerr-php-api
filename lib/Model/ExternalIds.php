<?php
/**
 * ExternalIds
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
 * ExternalIds Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalIds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalIds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'facebook_id' => 'string',
'freebase_id' => 'string',
'freebase_mid' => 'string',
'imdb_id' => 'string',
'instagram_id' => 'string',
'tvdb_id' => 'float',
'tvrage_id' => 'float',
'twitter_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'facebook_id' => null,
'freebase_id' => null,
'freebase_mid' => null,
'imdb_id' => null,
'instagram_id' => null,
'tvdb_id' => null,
'tvrage_id' => null,
'twitter_id' => null    ];

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
        'facebook_id' => 'facebookId',
'freebase_id' => 'freebaseId',
'freebase_mid' => 'freebaseMid',
'imdb_id' => 'imdbId',
'instagram_id' => 'instagramId',
'tvdb_id' => 'tvdbId',
'tvrage_id' => 'tvrageId',
'twitter_id' => 'twitterId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'facebook_id' => 'setFacebookId',
'freebase_id' => 'setFreebaseId',
'freebase_mid' => 'setFreebaseMid',
'imdb_id' => 'setImdbId',
'instagram_id' => 'setInstagramId',
'tvdb_id' => 'setTvdbId',
'tvrage_id' => 'setTvrageId',
'twitter_id' => 'setTwitterId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'facebook_id' => 'getFacebookId',
'freebase_id' => 'getFreebaseId',
'freebase_mid' => 'getFreebaseMid',
'imdb_id' => 'getImdbId',
'instagram_id' => 'getInstagramId',
'tvdb_id' => 'getTvdbId',
'tvrage_id' => 'getTvrageId',
'twitter_id' => 'getTwitterId'    ];

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
        $this->container['facebook_id'] = isset($data['facebook_id']) ? $data['facebook_id'] : null;
        $this->container['freebase_id'] = isset($data['freebase_id']) ? $data['freebase_id'] : null;
        $this->container['freebase_mid'] = isset($data['freebase_mid']) ? $data['freebase_mid'] : null;
        $this->container['imdb_id'] = isset($data['imdb_id']) ? $data['imdb_id'] : null;
        $this->container['instagram_id'] = isset($data['instagram_id']) ? $data['instagram_id'] : null;
        $this->container['tvdb_id'] = isset($data['tvdb_id']) ? $data['tvdb_id'] : null;
        $this->container['tvrage_id'] = isset($data['tvrage_id']) ? $data['tvrage_id'] : null;
        $this->container['twitter_id'] = isset($data['twitter_id']) ? $data['twitter_id'] : null;
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
     * Gets facebook_id
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->container['facebook_id'];
    }

    /**
     * Sets facebook_id
     *
     * @param string $facebook_id facebook_id
     *
     * @return $this
     */
    public function setFacebookId($facebook_id)
    {
        $this->container['facebook_id'] = $facebook_id;

        return $this;
    }

    /**
     * Gets freebase_id
     *
     * @return string
     */
    public function getFreebaseId()
    {
        return $this->container['freebase_id'];
    }

    /**
     * Sets freebase_id
     *
     * @param string $freebase_id freebase_id
     *
     * @return $this
     */
    public function setFreebaseId($freebase_id)
    {
        $this->container['freebase_id'] = $freebase_id;

        return $this;
    }

    /**
     * Gets freebase_mid
     *
     * @return string
     */
    public function getFreebaseMid()
    {
        return $this->container['freebase_mid'];
    }

    /**
     * Sets freebase_mid
     *
     * @param string $freebase_mid freebase_mid
     *
     * @return $this
     */
    public function setFreebaseMid($freebase_mid)
    {
        $this->container['freebase_mid'] = $freebase_mid;

        return $this;
    }

    /**
     * Gets imdb_id
     *
     * @return string
     */
    public function getImdbId()
    {
        return $this->container['imdb_id'];
    }

    /**
     * Sets imdb_id
     *
     * @param string $imdb_id imdb_id
     *
     * @return $this
     */
    public function setImdbId($imdb_id)
    {
        $this->container['imdb_id'] = $imdb_id;

        return $this;
    }

    /**
     * Gets instagram_id
     *
     * @return string
     */
    public function getInstagramId()
    {
        return $this->container['instagram_id'];
    }

    /**
     * Sets instagram_id
     *
     * @param string $instagram_id instagram_id
     *
     * @return $this
     */
    public function setInstagramId($instagram_id)
    {
        $this->container['instagram_id'] = $instagram_id;

        return $this;
    }

    /**
     * Gets tvdb_id
     *
     * @return float
     */
    public function getTvdbId()
    {
        return $this->container['tvdb_id'];
    }

    /**
     * Sets tvdb_id
     *
     * @param float $tvdb_id tvdb_id
     *
     * @return $this
     */
    public function setTvdbId($tvdb_id)
    {
        $this->container['tvdb_id'] = $tvdb_id;

        return $this;
    }

    /**
     * Gets tvrage_id
     *
     * @return float
     */
    public function getTvrageId()
    {
        return $this->container['tvrage_id'];
    }

    /**
     * Sets tvrage_id
     *
     * @param float $tvrage_id tvrage_id
     *
     * @return $this
     */
    public function setTvrageId($tvrage_id)
    {
        $this->container['tvrage_id'] = $tvrage_id;

        return $this;
    }

    /**
     * Gets twitter_id
     *
     * @return string
     */
    public function getTwitterId()
    {
        return $this->container['twitter_id'];
    }

    /**
     * Sets twitter_id
     *
     * @param string $twitter_id twitter_id
     *
     * @return $this
     */
    public function setTwitterId($twitter_id)
    {
        $this->container['twitter_id'] = $twitter_id;

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
