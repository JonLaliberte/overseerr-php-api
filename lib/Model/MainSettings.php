<?php
/**
 * MainSettings
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
 * MainSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MainSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MainSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_key' => 'string',
'app_language' => 'string',
'application_title' => 'string',
'application_url' => 'string',
'trust_proxy' => 'bool',
'csrf_protection' => 'bool',
'hide_available' => 'bool',
'partial_requests_enabled' => 'bool',
'local_login' => 'bool',
'new_plex_login' => 'bool',
'default_permissions' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_key' => null,
'app_language' => null,
'application_title' => null,
'application_url' => null,
'trust_proxy' => null,
'csrf_protection' => null,
'hide_available' => null,
'partial_requests_enabled' => null,
'local_login' => null,
'new_plex_login' => null,
'default_permissions' => null    ];

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
        'api_key' => 'apiKey',
'app_language' => 'appLanguage',
'application_title' => 'applicationTitle',
'application_url' => 'applicationUrl',
'trust_proxy' => 'trustProxy',
'csrf_protection' => 'csrfProtection',
'hide_available' => 'hideAvailable',
'partial_requests_enabled' => 'partialRequestsEnabled',
'local_login' => 'localLogin',
'new_plex_login' => 'newPlexLogin',
'default_permissions' => 'defaultPermissions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
'app_language' => 'setAppLanguage',
'application_title' => 'setApplicationTitle',
'application_url' => 'setApplicationUrl',
'trust_proxy' => 'setTrustProxy',
'csrf_protection' => 'setCsrfProtection',
'hide_available' => 'setHideAvailable',
'partial_requests_enabled' => 'setPartialRequestsEnabled',
'local_login' => 'setLocalLogin',
'new_plex_login' => 'setNewPlexLogin',
'default_permissions' => 'setDefaultPermissions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
'app_language' => 'getAppLanguage',
'application_title' => 'getApplicationTitle',
'application_url' => 'getApplicationUrl',
'trust_proxy' => 'getTrustProxy',
'csrf_protection' => 'getCsrfProtection',
'hide_available' => 'getHideAvailable',
'partial_requests_enabled' => 'getPartialRequestsEnabled',
'local_login' => 'getLocalLogin',
'new_plex_login' => 'getNewPlexLogin',
'default_permissions' => 'getDefaultPermissions'    ];

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
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['app_language'] = isset($data['app_language']) ? $data['app_language'] : null;
        $this->container['application_title'] = isset($data['application_title']) ? $data['application_title'] : null;
        $this->container['application_url'] = isset($data['application_url']) ? $data['application_url'] : null;
        $this->container['trust_proxy'] = isset($data['trust_proxy']) ? $data['trust_proxy'] : null;
        $this->container['csrf_protection'] = isset($data['csrf_protection']) ? $data['csrf_protection'] : null;
        $this->container['hide_available'] = isset($data['hide_available']) ? $data['hide_available'] : null;
        $this->container['partial_requests_enabled'] = isset($data['partial_requests_enabled']) ? $data['partial_requests_enabled'] : null;
        $this->container['local_login'] = isset($data['local_login']) ? $data['local_login'] : null;
        $this->container['new_plex_login'] = isset($data['new_plex_login']) ? $data['new_plex_login'] : null;
        $this->container['default_permissions'] = isset($data['default_permissions']) ? $data['default_permissions'] : null;
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
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets app_language
     *
     * @return string
     */
    public function getAppLanguage()
    {
        return $this->container['app_language'];
    }

    /**
     * Sets app_language
     *
     * @param string $app_language app_language
     *
     * @return $this
     */
    public function setAppLanguage($app_language)
    {
        $this->container['app_language'] = $app_language;

        return $this;
    }

    /**
     * Gets application_title
     *
     * @return string
     */
    public function getApplicationTitle()
    {
        return $this->container['application_title'];
    }

    /**
     * Sets application_title
     *
     * @param string $application_title application_title
     *
     * @return $this
     */
    public function setApplicationTitle($application_title)
    {
        $this->container['application_title'] = $application_title;

        return $this;
    }

    /**
     * Gets application_url
     *
     * @return string
     */
    public function getApplicationUrl()
    {
        return $this->container['application_url'];
    }

    /**
     * Sets application_url
     *
     * @param string $application_url application_url
     *
     * @return $this
     */
    public function setApplicationUrl($application_url)
    {
        $this->container['application_url'] = $application_url;

        return $this;
    }

    /**
     * Gets trust_proxy
     *
     * @return bool
     */
    public function getTrustProxy()
    {
        return $this->container['trust_proxy'];
    }

    /**
     * Sets trust_proxy
     *
     * @param bool $trust_proxy trust_proxy
     *
     * @return $this
     */
    public function setTrustProxy($trust_proxy)
    {
        $this->container['trust_proxy'] = $trust_proxy;

        return $this;
    }

    /**
     * Gets csrf_protection
     *
     * @return bool
     */
    public function getCsrfProtection()
    {
        return $this->container['csrf_protection'];
    }

    /**
     * Sets csrf_protection
     *
     * @param bool $csrf_protection csrf_protection
     *
     * @return $this
     */
    public function setCsrfProtection($csrf_protection)
    {
        $this->container['csrf_protection'] = $csrf_protection;

        return $this;
    }

    /**
     * Gets hide_available
     *
     * @return bool
     */
    public function getHideAvailable()
    {
        return $this->container['hide_available'];
    }

    /**
     * Sets hide_available
     *
     * @param bool $hide_available hide_available
     *
     * @return $this
     */
    public function setHideAvailable($hide_available)
    {
        $this->container['hide_available'] = $hide_available;

        return $this;
    }

    /**
     * Gets partial_requests_enabled
     *
     * @return bool
     */
    public function getPartialRequestsEnabled()
    {
        return $this->container['partial_requests_enabled'];
    }

    /**
     * Sets partial_requests_enabled
     *
     * @param bool $partial_requests_enabled partial_requests_enabled
     *
     * @return $this
     */
    public function setPartialRequestsEnabled($partial_requests_enabled)
    {
        $this->container['partial_requests_enabled'] = $partial_requests_enabled;

        return $this;
    }

    /**
     * Gets local_login
     *
     * @return bool
     */
    public function getLocalLogin()
    {
        return $this->container['local_login'];
    }

    /**
     * Sets local_login
     *
     * @param bool $local_login local_login
     *
     * @return $this
     */
    public function setLocalLogin($local_login)
    {
        $this->container['local_login'] = $local_login;

        return $this;
    }

    /**
     * Gets new_plex_login
     *
     * @return bool
     */
    public function getNewPlexLogin()
    {
        return $this->container['new_plex_login'];
    }

    /**
     * Sets new_plex_login
     *
     * @param bool $new_plex_login new_plex_login
     *
     * @return $this
     */
    public function setNewPlexLogin($new_plex_login)
    {
        $this->container['new_plex_login'] = $new_plex_login;

        return $this;
    }

    /**
     * Gets default_permissions
     *
     * @return float
     */
    public function getDefaultPermissions()
    {
        return $this->container['default_permissions'];
    }

    /**
     * Sets default_permissions
     *
     * @param float $default_permissions default_permissions
     *
     * @return $this
     */
    public function setDefaultPermissions($default_permissions)
    {
        $this->container['default_permissions'] = $default_permissions;

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