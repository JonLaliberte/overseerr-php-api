<?php
/**
 * SonarrSeries
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
 * SonarrSeries Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SonarrSeries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SonarrSeries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'sort_title' => 'string',
'season_count' => 'float',
'status' => 'string',
'overview' => 'string',
'network' => 'string',
'air_time' => 'string',
'images' => '\Swagger\Client\Model\SonarrSeriesImages[]',
'remote_poster' => 'string',
'seasons' => '\Swagger\Client\Model\SonarrSeriesSeasons[]',
'year' => 'float',
'path' => 'string',
'profile_id' => 'float',
'language_profile_id' => 'float',
'season_folder' => 'bool',
'monitored' => 'bool',
'use_scene_numbering' => 'bool',
'runtime' => 'float',
'tvdb_id' => 'float',
'tv_rage_id' => 'float',
'tv_maze_id' => 'float',
'first_aired' => 'string',
'last_info_sync' => 'string',
'series_type' => 'string',
'clean_title' => 'string',
'imdb_id' => 'string',
'title_slug' => 'string',
'certification' => 'string',
'genres' => 'string[]',
'tags' => 'string[]',
'added' => 'string',
'ratings' => '\Swagger\Client\Model\SonarrSeriesRatings[]',
'quality_profile_id' => 'float',
'id' => 'float',
'root_folder_path' => 'string',
'add_options' => '\Swagger\Client\Model\SonarrSeriesAddOptions[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'sort_title' => null,
'season_count' => null,
'status' => null,
'overview' => null,
'network' => null,
'air_time' => null,
'images' => null,
'remote_poster' => null,
'seasons' => null,
'year' => null,
'path' => null,
'profile_id' => null,
'language_profile_id' => null,
'season_folder' => null,
'monitored' => null,
'use_scene_numbering' => null,
'runtime' => null,
'tvdb_id' => null,
'tv_rage_id' => null,
'tv_maze_id' => null,
'first_aired' => null,
'last_info_sync' => null,
'series_type' => null,
'clean_title' => null,
'imdb_id' => null,
'title_slug' => null,
'certification' => null,
'genres' => null,
'tags' => null,
'added' => null,
'ratings' => null,
'quality_profile_id' => null,
'id' => null,
'root_folder_path' => null,
'add_options' => null    ];

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
'sort_title' => 'sortTitle',
'season_count' => 'seasonCount',
'status' => 'status',
'overview' => 'overview',
'network' => 'network',
'air_time' => 'airTime',
'images' => 'images',
'remote_poster' => 'remotePoster',
'seasons' => 'seasons',
'year' => 'year',
'path' => 'path',
'profile_id' => 'profileId',
'language_profile_id' => 'languageProfileId',
'season_folder' => 'seasonFolder',
'monitored' => 'monitored',
'use_scene_numbering' => 'useSceneNumbering',
'runtime' => 'runtime',
'tvdb_id' => 'tvdbId',
'tv_rage_id' => 'tvRageId',
'tv_maze_id' => 'tvMazeId',
'first_aired' => 'firstAired',
'last_info_sync' => 'lastInfoSync',
'series_type' => 'seriesType',
'clean_title' => 'cleanTitle',
'imdb_id' => 'imdbId',
'title_slug' => 'titleSlug',
'certification' => 'certification',
'genres' => 'genres',
'tags' => 'tags',
'added' => 'added',
'ratings' => 'ratings',
'quality_profile_id' => 'qualityProfileId',
'id' => 'id',
'root_folder_path' => 'rootFolderPath',
'add_options' => 'addOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'sort_title' => 'setSortTitle',
'season_count' => 'setSeasonCount',
'status' => 'setStatus',
'overview' => 'setOverview',
'network' => 'setNetwork',
'air_time' => 'setAirTime',
'images' => 'setImages',
'remote_poster' => 'setRemotePoster',
'seasons' => 'setSeasons',
'year' => 'setYear',
'path' => 'setPath',
'profile_id' => 'setProfileId',
'language_profile_id' => 'setLanguageProfileId',
'season_folder' => 'setSeasonFolder',
'monitored' => 'setMonitored',
'use_scene_numbering' => 'setUseSceneNumbering',
'runtime' => 'setRuntime',
'tvdb_id' => 'setTvdbId',
'tv_rage_id' => 'setTvRageId',
'tv_maze_id' => 'setTvMazeId',
'first_aired' => 'setFirstAired',
'last_info_sync' => 'setLastInfoSync',
'series_type' => 'setSeriesType',
'clean_title' => 'setCleanTitle',
'imdb_id' => 'setImdbId',
'title_slug' => 'setTitleSlug',
'certification' => 'setCertification',
'genres' => 'setGenres',
'tags' => 'setTags',
'added' => 'setAdded',
'ratings' => 'setRatings',
'quality_profile_id' => 'setQualityProfileId',
'id' => 'setId',
'root_folder_path' => 'setRootFolderPath',
'add_options' => 'setAddOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'sort_title' => 'getSortTitle',
'season_count' => 'getSeasonCount',
'status' => 'getStatus',
'overview' => 'getOverview',
'network' => 'getNetwork',
'air_time' => 'getAirTime',
'images' => 'getImages',
'remote_poster' => 'getRemotePoster',
'seasons' => 'getSeasons',
'year' => 'getYear',
'path' => 'getPath',
'profile_id' => 'getProfileId',
'language_profile_id' => 'getLanguageProfileId',
'season_folder' => 'getSeasonFolder',
'monitored' => 'getMonitored',
'use_scene_numbering' => 'getUseSceneNumbering',
'runtime' => 'getRuntime',
'tvdb_id' => 'getTvdbId',
'tv_rage_id' => 'getTvRageId',
'tv_maze_id' => 'getTvMazeId',
'first_aired' => 'getFirstAired',
'last_info_sync' => 'getLastInfoSync',
'series_type' => 'getSeriesType',
'clean_title' => 'getCleanTitle',
'imdb_id' => 'getImdbId',
'title_slug' => 'getTitleSlug',
'certification' => 'getCertification',
'genres' => 'getGenres',
'tags' => 'getTags',
'added' => 'getAdded',
'ratings' => 'getRatings',
'quality_profile_id' => 'getQualityProfileId',
'id' => 'getId',
'root_folder_path' => 'getRootFolderPath',
'add_options' => 'getAddOptions'    ];

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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sort_title'] = isset($data['sort_title']) ? $data['sort_title'] : null;
        $this->container['season_count'] = isset($data['season_count']) ? $data['season_count'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['overview'] = isset($data['overview']) ? $data['overview'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['air_time'] = isset($data['air_time']) ? $data['air_time'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['remote_poster'] = isset($data['remote_poster']) ? $data['remote_poster'] : null;
        $this->container['seasons'] = isset($data['seasons']) ? $data['seasons'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['language_profile_id'] = isset($data['language_profile_id']) ? $data['language_profile_id'] : null;
        $this->container['season_folder'] = isset($data['season_folder']) ? $data['season_folder'] : null;
        $this->container['monitored'] = isset($data['monitored']) ? $data['monitored'] : null;
        $this->container['use_scene_numbering'] = isset($data['use_scene_numbering']) ? $data['use_scene_numbering'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['tvdb_id'] = isset($data['tvdb_id']) ? $data['tvdb_id'] : null;
        $this->container['tv_rage_id'] = isset($data['tv_rage_id']) ? $data['tv_rage_id'] : null;
        $this->container['tv_maze_id'] = isset($data['tv_maze_id']) ? $data['tv_maze_id'] : null;
        $this->container['first_aired'] = isset($data['first_aired']) ? $data['first_aired'] : null;
        $this->container['last_info_sync'] = isset($data['last_info_sync']) ? $data['last_info_sync'] : null;
        $this->container['series_type'] = isset($data['series_type']) ? $data['series_type'] : null;
        $this->container['clean_title'] = isset($data['clean_title']) ? $data['clean_title'] : null;
        $this->container['imdb_id'] = isset($data['imdb_id']) ? $data['imdb_id'] : null;
        $this->container['title_slug'] = isset($data['title_slug']) ? $data['title_slug'] : null;
        $this->container['certification'] = isset($data['certification']) ? $data['certification'] : null;
        $this->container['genres'] = isset($data['genres']) ? $data['genres'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
        $this->container['quality_profile_id'] = isset($data['quality_profile_id']) ? $data['quality_profile_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['root_folder_path'] = isset($data['root_folder_path']) ? $data['root_folder_path'] : null;
        $this->container['add_options'] = isset($data['add_options']) ? $data['add_options'] : null;
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
     * Gets sort_title
     *
     * @return string
     */
    public function getSortTitle()
    {
        return $this->container['sort_title'];
    }

    /**
     * Sets sort_title
     *
     * @param string $sort_title sort_title
     *
     * @return $this
     */
    public function setSortTitle($sort_title)
    {
        $this->container['sort_title'] = $sort_title;

        return $this;
    }

    /**
     * Gets season_count
     *
     * @return float
     */
    public function getSeasonCount()
    {
        return $this->container['season_count'];
    }

    /**
     * Sets season_count
     *
     * @param float $season_count season_count
     *
     * @return $this
     */
    public function setSeasonCount($season_count)
    {
        $this->container['season_count'] = $season_count;

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
     * Gets overview
     *
     * @return string
     */
    public function getOverview()
    {
        return $this->container['overview'];
    }

    /**
     * Sets overview
     *
     * @param string $overview overview
     *
     * @return $this
     */
    public function setOverview($overview)
    {
        $this->container['overview'] = $overview;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets air_time
     *
     * @return string
     */
    public function getAirTime()
    {
        return $this->container['air_time'];
    }

    /**
     * Sets air_time
     *
     * @param string $air_time air_time
     *
     * @return $this
     */
    public function setAirTime($air_time)
    {
        $this->container['air_time'] = $air_time;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\SonarrSeriesImages[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\SonarrSeriesImages[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets remote_poster
     *
     * @return string
     */
    public function getRemotePoster()
    {
        return $this->container['remote_poster'];
    }

    /**
     * Sets remote_poster
     *
     * @param string $remote_poster remote_poster
     *
     * @return $this
     */
    public function setRemotePoster($remote_poster)
    {
        $this->container['remote_poster'] = $remote_poster;

        return $this;
    }

    /**
     * Gets seasons
     *
     * @return \Swagger\Client\Model\SonarrSeriesSeasons[]
     */
    public function getSeasons()
    {
        return $this->container['seasons'];
    }

    /**
     * Sets seasons
     *
     * @param \Swagger\Client\Model\SonarrSeriesSeasons[] $seasons seasons
     *
     * @return $this
     */
    public function setSeasons($seasons)
    {
        $this->container['seasons'] = $seasons;

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
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return float
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param float $profile_id profile_id
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets language_profile_id
     *
     * @return float
     */
    public function getLanguageProfileId()
    {
        return $this->container['language_profile_id'];
    }

    /**
     * Sets language_profile_id
     *
     * @param float $language_profile_id language_profile_id
     *
     * @return $this
     */
    public function setLanguageProfileId($language_profile_id)
    {
        $this->container['language_profile_id'] = $language_profile_id;

        return $this;
    }

    /**
     * Gets season_folder
     *
     * @return bool
     */
    public function getSeasonFolder()
    {
        return $this->container['season_folder'];
    }

    /**
     * Sets season_folder
     *
     * @param bool $season_folder season_folder
     *
     * @return $this
     */
    public function setSeasonFolder($season_folder)
    {
        $this->container['season_folder'] = $season_folder;

        return $this;
    }

    /**
     * Gets monitored
     *
     * @return bool
     */
    public function getMonitored()
    {
        return $this->container['monitored'];
    }

    /**
     * Sets monitored
     *
     * @param bool $monitored monitored
     *
     * @return $this
     */
    public function setMonitored($monitored)
    {
        $this->container['monitored'] = $monitored;

        return $this;
    }

    /**
     * Gets use_scene_numbering
     *
     * @return bool
     */
    public function getUseSceneNumbering()
    {
        return $this->container['use_scene_numbering'];
    }

    /**
     * Sets use_scene_numbering
     *
     * @param bool $use_scene_numbering use_scene_numbering
     *
     * @return $this
     */
    public function setUseSceneNumbering($use_scene_numbering)
    {
        $this->container['use_scene_numbering'] = $use_scene_numbering;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return float
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param float $runtime runtime
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

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
     * Gets tv_rage_id
     *
     * @return float
     */
    public function getTvRageId()
    {
        return $this->container['tv_rage_id'];
    }

    /**
     * Sets tv_rage_id
     *
     * @param float $tv_rage_id tv_rage_id
     *
     * @return $this
     */
    public function setTvRageId($tv_rage_id)
    {
        $this->container['tv_rage_id'] = $tv_rage_id;

        return $this;
    }

    /**
     * Gets tv_maze_id
     *
     * @return float
     */
    public function getTvMazeId()
    {
        return $this->container['tv_maze_id'];
    }

    /**
     * Sets tv_maze_id
     *
     * @param float $tv_maze_id tv_maze_id
     *
     * @return $this
     */
    public function setTvMazeId($tv_maze_id)
    {
        $this->container['tv_maze_id'] = $tv_maze_id;

        return $this;
    }

    /**
     * Gets first_aired
     *
     * @return string
     */
    public function getFirstAired()
    {
        return $this->container['first_aired'];
    }

    /**
     * Sets first_aired
     *
     * @param string $first_aired first_aired
     *
     * @return $this
     */
    public function setFirstAired($first_aired)
    {
        $this->container['first_aired'] = $first_aired;

        return $this;
    }

    /**
     * Gets last_info_sync
     *
     * @return string
     */
    public function getLastInfoSync()
    {
        return $this->container['last_info_sync'];
    }

    /**
     * Sets last_info_sync
     *
     * @param string $last_info_sync last_info_sync
     *
     * @return $this
     */
    public function setLastInfoSync($last_info_sync)
    {
        $this->container['last_info_sync'] = $last_info_sync;

        return $this;
    }

    /**
     * Gets series_type
     *
     * @return string
     */
    public function getSeriesType()
    {
        return $this->container['series_type'];
    }

    /**
     * Sets series_type
     *
     * @param string $series_type series_type
     *
     * @return $this
     */
    public function setSeriesType($series_type)
    {
        $this->container['series_type'] = $series_type;

        return $this;
    }

    /**
     * Gets clean_title
     *
     * @return string
     */
    public function getCleanTitle()
    {
        return $this->container['clean_title'];
    }

    /**
     * Sets clean_title
     *
     * @param string $clean_title clean_title
     *
     * @return $this
     */
    public function setCleanTitle($clean_title)
    {
        $this->container['clean_title'] = $clean_title;

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
     * Gets title_slug
     *
     * @return string
     */
    public function getTitleSlug()
    {
        return $this->container['title_slug'];
    }

    /**
     * Sets title_slug
     *
     * @param string $title_slug title_slug
     *
     * @return $this
     */
    public function setTitleSlug($title_slug)
    {
        $this->container['title_slug'] = $title_slug;

        return $this;
    }

    /**
     * Gets certification
     *
     * @return string
     */
    public function getCertification()
    {
        return $this->container['certification'];
    }

    /**
     * Sets certification
     *
     * @param string $certification certification
     *
     * @return $this
     */
    public function setCertification($certification)
    {
        $this->container['certification'] = $certification;

        return $this;
    }

    /**
     * Gets genres
     *
     * @return string[]
     */
    public function getGenres()
    {
        return $this->container['genres'];
    }

    /**
     * Sets genres
     *
     * @param string[] $genres genres
     *
     * @return $this
     */
    public function setGenres($genres)
    {
        $this->container['genres'] = $genres;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets added
     *
     * @return string
     */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
     * Sets added
     *
     * @param string $added added
     *
     * @return $this
     */
    public function setAdded($added)
    {
        $this->container['added'] = $added;

        return $this;
    }

    /**
     * Gets ratings
     *
     * @return \Swagger\Client\Model\SonarrSeriesRatings[]
     */
    public function getRatings()
    {
        return $this->container['ratings'];
    }

    /**
     * Sets ratings
     *
     * @param \Swagger\Client\Model\SonarrSeriesRatings[] $ratings ratings
     *
     * @return $this
     */
    public function setRatings($ratings)
    {
        $this->container['ratings'] = $ratings;

        return $this;
    }

    /**
     * Gets quality_profile_id
     *
     * @return float
     */
    public function getQualityProfileId()
    {
        return $this->container['quality_profile_id'];
    }

    /**
     * Sets quality_profile_id
     *
     * @param float $quality_profile_id quality_profile_id
     *
     * @return $this
     */
    public function setQualityProfileId($quality_profile_id)
    {
        $this->container['quality_profile_id'] = $quality_profile_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets root_folder_path
     *
     * @return string
     */
    public function getRootFolderPath()
    {
        return $this->container['root_folder_path'];
    }

    /**
     * Sets root_folder_path
     *
     * @param string $root_folder_path root_folder_path
     *
     * @return $this
     */
    public function setRootFolderPath($root_folder_path)
    {
        $this->container['root_folder_path'] = $root_folder_path;

        return $this;
    }

    /**
     * Gets add_options
     *
     * @return \Swagger\Client\Model\SonarrSeriesAddOptions[]
     */
    public function getAddOptions()
    {
        return $this->container['add_options'];
    }

    /**
     * Sets add_options
     *
     * @param \Swagger\Client\Model\SonarrSeriesAddOptions[] $add_options add_options
     *
     * @return $this
     */
    public function setAddOptions($add_options)
    {
        $this->container['add_options'] = $add_options;

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
