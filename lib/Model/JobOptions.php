<?php
/**
 * JobOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cielo24
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cielo24
 *
 * The cielo24 Web Services Platform API allows developers to easily integrate transcription, captioning and keyword extraction into their applications without having to use a manual web portal.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: devs@cielo24.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cielo24\Model;

use \ArrayAccess;
use \Cielo24\ObjectSerializer;

/**
 * JobOptions Class Doc Comment
 *
 * @category Class
 * @package  Cielo24
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_approval_steps' => 'string[]',
        'customer_approval_tool' => 'string',
        'custom_metadata' => 'object',
        'notes' => 'mixed',
        'return_iwp' => '\Cielo24\Model\IWPEnum[]',
        'generate_media_intelligence_iwp' => '\Cielo24\Model\IWPEnum[]',
        'speaker_id' => 'string',
        'audio_description' => 'string',
        'on_screen_text' => 'string',
        'music_lyrics' => 'string',
        'custom_special_handling' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_approval_steps' => null,
        'customer_approval_tool' => null,
        'custom_metadata' => null,
        'notes' => null,
        'return_iwp' => null,
        'generate_media_intelligence_iwp' => null,
        'speaker_id' => null,
        'audio_description' => null,
        'on_screen_text' => null,
        'music_lyrics' => null,
        'custom_special_handling' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_approval_steps' => 'customer_approval_steps',
        'customer_approval_tool' => 'customer_approval_tool',
        'custom_metadata' => 'custom_metadata',
        'notes' => 'notes',
        'return_iwp' => 'return_iwp',
        'generate_media_intelligence_iwp' => 'generate_media_intelligence_iwp',
        'speaker_id' => 'speaker_id',
        'audio_description' => 'audio_description',
        'on_screen_text' => 'on_screen_text',
        'music_lyrics' => 'music_lyrics',
        'custom_special_handling' => 'custom_special_handling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_approval_steps' => 'setCustomerApprovalSteps',
        'customer_approval_tool' => 'setCustomerApprovalTool',
        'custom_metadata' => 'setCustomMetadata',
        'notes' => 'setNotes',
        'return_iwp' => 'setReturnIwp',
        'generate_media_intelligence_iwp' => 'setGenerateMediaIntelligenceIwp',
        'speaker_id' => 'setSpeakerId',
        'audio_description' => 'setAudioDescription',
        'on_screen_text' => 'setOnScreenText',
        'music_lyrics' => 'setMusicLyrics',
        'custom_special_handling' => 'setCustomSpecialHandling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_approval_steps' => 'getCustomerApprovalSteps',
        'customer_approval_tool' => 'getCustomerApprovalTool',
        'custom_metadata' => 'getCustomMetadata',
        'notes' => 'getNotes',
        'return_iwp' => 'getReturnIwp',
        'generate_media_intelligence_iwp' => 'getGenerateMediaIntelligenceIwp',
        'speaker_id' => 'getSpeakerId',
        'audio_description' => 'getAudioDescription',
        'on_screen_text' => 'getOnScreenText',
        'music_lyrics' => 'getMusicLyrics',
        'custom_special_handling' => 'getCustomSpecialHandling'
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
        return self::$openAPIModelName;
    }

    public const CUSTOMER_APPROVAL_STEPS_TRANSLATION = 'TRANSLATION';
    public const CUSTOMER_APPROVAL_STEPS__RETURN = 'RETURN';
    public const CUSTOMER_APPROVAL_TOOL_AMARA = 'AMARA';
    public const CUSTOMER_APPROVAL_TOOL_CIELO24 = 'CIELO24';
    public const SPEAKER_ID_TRUE = 'true';
    public const SPEAKER_ID_FALSE = 'false';
    public const AUDIO_DESCRIPTION_TRUE = 'true';
    public const AUDIO_DESCRIPTION_FALSE = 'false';
    public const ON_SCREEN_TEXT_TRUE = 'true';
    public const ON_SCREEN_TEXT_FALSE = 'false';
    public const MUSIC_LYRICS_TRUE = 'true';
    public const MUSIC_LYRICS_FALSE = 'false';
    public const CUSTOM_SPECIAL_HANDLING_TRUE = 'true';
    public const CUSTOM_SPECIAL_HANDLING_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerApprovalStepsAllowableValues()
    {
        return [
            self::CUSTOMER_APPROVAL_STEPS_TRANSLATION,
            self::CUSTOMER_APPROVAL_STEPS__RETURN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerApprovalToolAllowableValues()
    {
        return [
            self::CUSTOMER_APPROVAL_TOOL_AMARA,
            self::CUSTOMER_APPROVAL_TOOL_CIELO24,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpeakerIdAllowableValues()
    {
        return [
            self::SPEAKER_ID_TRUE,
            self::SPEAKER_ID_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAudioDescriptionAllowableValues()
    {
        return [
            self::AUDIO_DESCRIPTION_TRUE,
            self::AUDIO_DESCRIPTION_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnScreenTextAllowableValues()
    {
        return [
            self::ON_SCREEN_TEXT_TRUE,
            self::ON_SCREEN_TEXT_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMusicLyricsAllowableValues()
    {
        return [
            self::MUSIC_LYRICS_TRUE,
            self::MUSIC_LYRICS_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomSpecialHandlingAllowableValues()
    {
        return [
            self::CUSTOM_SPECIAL_HANDLING_TRUE,
            self::CUSTOM_SPECIAL_HANDLING_FALSE,
        ];
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
        $this->container['customer_approval_steps'] = $data['customer_approval_steps'] ?? null;
        $this->container['customer_approval_tool'] = $data['customer_approval_tool'] ?? 'CIELO24';
        $this->container['custom_metadata'] = $data['custom_metadata'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['return_iwp'] = $data['return_iwp'] ?? null;
        $this->container['generate_media_intelligence_iwp'] = $data['generate_media_intelligence_iwp'] ?? null;
        $this->container['speaker_id'] = $data['speaker_id'] ?? 'false';
        $this->container['audio_description'] = $data['audio_description'] ?? 'false';
        $this->container['on_screen_text'] = $data['on_screen_text'] ?? 'false';
        $this->container['music_lyrics'] = $data['music_lyrics'] ?? 'false';
        $this->container['custom_special_handling'] = $data['custom_special_handling'] ?? 'false';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCustomerApprovalToolAllowableValues();
        if (!is_null($this->container['customer_approval_tool']) && !in_array($this->container['customer_approval_tool'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customer_approval_tool', must be one of '%s'",
                $this->container['customer_approval_tool'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpeakerIdAllowableValues();
        if (!is_null($this->container['speaker_id']) && !in_array($this->container['speaker_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'speaker_id', must be one of '%s'",
                $this->container['speaker_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAudioDescriptionAllowableValues();
        if (!is_null($this->container['audio_description']) && !in_array($this->container['audio_description'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'audio_description', must be one of '%s'",
                $this->container['audio_description'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOnScreenTextAllowableValues();
        if (!is_null($this->container['on_screen_text']) && !in_array($this->container['on_screen_text'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'on_screen_text', must be one of '%s'",
                $this->container['on_screen_text'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMusicLyricsAllowableValues();
        if (!is_null($this->container['music_lyrics']) && !in_array($this->container['music_lyrics'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'music_lyrics', must be one of '%s'",
                $this->container['music_lyrics'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCustomSpecialHandlingAllowableValues();
        if (!is_null($this->container['custom_special_handling']) && !in_array($this->container['custom_special_handling'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'custom_special_handling', must be one of '%s'",
                $this->container['custom_special_handling'],
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
     * Gets customer_approval_steps
     *
     * @return string[]|null
     */
    public function getCustomerApprovalSteps()
    {
        return $this->container['customer_approval_steps'];
    }

    /**
     * Sets customer_approval_steps
     *
     * @param string[]|null $customer_approval_steps Requires your approval of a job at specified points in the workflow. When the job is ready for approval you will be emailed a link that will take you to a web based tool you can use to view, edit and approve the job. You may request approval at two points in the workflow: before translation and before the job is returned.
     *
     * @return self
     */
    public function setCustomerApprovalSteps($customer_approval_steps)
    {
        $allowedValues = $this->getCustomerApprovalStepsAllowableValues();
        if (!is_null($customer_approval_steps) && array_diff($customer_approval_steps, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'customer_approval_steps', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_approval_steps'] = $customer_approval_steps;

        return $this;
    }

    /**
     * Gets customer_approval_tool
     *
     * @return string|null
     */
    public function getCustomerApprovalTool()
    {
        return $this->container['customer_approval_tool'];
    }

    /**
     * Sets customer_approval_tool
     *
     * @param string|null $customer_approval_tool Determines which web based tool to use for viewing, editing and approving jobs.
     *
     * @return self
     */
    public function setCustomerApprovalTool($customer_approval_tool)
    {
        $allowedValues = $this->getCustomerApprovalToolAllowableValues();
        if (!is_null($customer_approval_tool) && !in_array($customer_approval_tool, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customer_approval_tool', must be one of '%s'",
                    $customer_approval_tool,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_approval_tool'] = $customer_approval_tool;

        return $this;
    }

    /**
     * Gets custom_metadata
     *
     * @return object|null
     */
    public function getCustomMetadata()
    {
        return $this->container['custom_metadata'];
    }

    /**
     * Sets custom_metadata
     *
     * @param object|null $custom_metadata A JSON dictionary of key value pairs. These will be used as substitution strings when building the callback URL and custom DFXP caption header.
     *
     * @return self
     */
    public function setCustomMetadata($custom_metadata)
    {
        $this->container['custom_metadata'] = $custom_metadata;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return mixed|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param mixed|null $notes Allows you to provide text that will be displayed to the transcriber when the job is processed. An HTML included will be escaped.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets return_iwp
     *
     * @return \Cielo24\Model\IWPEnum[]|null
     */
    public function getReturnIwp()
    {
        return $this->container['return_iwp'];
    }

    /**
     * Sets return_iwp
     *
     * @param \Cielo24\Model\IWPEnum[]|null $return_iwp Allows you to receive additional callbacks when interim versions of the job are completed. If you specified a callback_url, then a callback will sent for FINAL regardless of the value of this option.
     *
     * @return self
     */
    public function setReturnIwp($return_iwp)
    {
        $this->container['return_iwp'] = $return_iwp;

        return $this;
    }

    /**
     * Gets generate_media_intelligence_iwp
     *
     * @return \Cielo24\Model\IWPEnum[]|null
     */
    public function getGenerateMediaIntelligenceIwp()
    {
        return $this->container['generate_media_intelligence_iwp'];
    }

    /**
     * Sets generate_media_intelligence_iwp
     *
     * @param \Cielo24\Model\IWPEnum[]|null $generate_media_intelligence_iwp Requests that media intelligence be generated for the specified interim/final versions of the transcript. Media intelligence data is added to the ElementList and can be retrieve using the get_elementlist API call. See [ElementList](https://cielo24.readthedocs.io/en/latest/output_formats/elementlist.html#media-intelligence-label) for details.
     *
     * @return self
     */
    public function setGenerateMediaIntelligenceIwp($generate_media_intelligence_iwp)
    {
        $this->container['generate_media_intelligence_iwp'] = $generate_media_intelligence_iwp;

        return $this;
    }

    /**
     * Gets speaker_id
     *
     * @return string|null
     */
    public function getSpeakerId()
    {
        return $this->container['speaker_id'];
    }

    /**
     * Sets speaker_id
     *
     * @param string|null $speaker_id Requests that speaker names be identified.
     *
     * @return self
     */
    public function setSpeakerId($speaker_id)
    {
        $allowedValues = $this->getSpeakerIdAllowableValues();
        if (!is_null($speaker_id) && !in_array($speaker_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'speaker_id', must be one of '%s'",
                    $speaker_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['speaker_id'] = $speaker_id;

        return $this;
    }

    /**
     * Gets audio_description
     *
     * @return string|null
     */
    public function getAudioDescription()
    {
        return $this->container['audio_description'];
    }

    /**
     * Sets audio_description
     *
     * @param string|null $audio_description Requests that all noises and sounds be identified.
     *
     * @return self
     */
    public function setAudioDescription($audio_description)
    {
        $allowedValues = $this->getAudioDescriptionAllowableValues();
        if (!is_null($audio_description) && !in_array($audio_description, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'audio_description', must be one of '%s'",
                    $audio_description,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['audio_description'] = $audio_description;

        return $this;
    }

    /**
     * Gets on_screen_text
     *
     * @return string|null
     */
    public function getOnScreenText()
    {
        return $this->container['on_screen_text'];
    }

    /**
     * Sets on_screen_text
     *
     * @param string|null $on_screen_text Requests that any text that appears in the media be added to the transcription.
     *
     * @return self
     */
    public function setOnScreenText($on_screen_text)
    {
        $allowedValues = $this->getOnScreenTextAllowableValues();
        if (!is_null($on_screen_text) && !in_array($on_screen_text, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'on_screen_text', must be one of '%s'",
                    $on_screen_text,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['on_screen_text'] = $on_screen_text;

        return $this;
    }

    /**
     * Gets music_lyrics
     *
     * @return string|null
     */
    public function getMusicLyrics()
    {
        return $this->container['music_lyrics'];
    }

    /**
     * Sets music_lyrics
     *
     * @param string|null $music_lyrics Requests that lyrics to songs be transcribed instead of labeled [MUSIC].
     *
     * @return self
     */
    public function setMusicLyrics($music_lyrics)
    {
        $allowedValues = $this->getMusicLyricsAllowableValues();
        if (!is_null($music_lyrics) && !in_array($music_lyrics, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'music_lyrics', must be one of '%s'",
                    $music_lyrics,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['music_lyrics'] = $music_lyrics;

        return $this;
    }

    /**
     * Gets custom_special_handling
     *
     * @return string|null
     */
    public function getCustomSpecialHandling()
    {
        return $this->container['custom_special_handling'];
    }

    /**
     * Sets custom_special_handling
     *
     * @param string|null $custom_special_handling Requests that transcribers follow submitted instruction set.
     *
     * @return self
     */
    public function setCustomSpecialHandling($custom_special_handling)
    {
        $allowedValues = $this->getCustomSpecialHandlingAllowableValues();
        if (!is_null($custom_special_handling) && !in_array($custom_special_handling, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'custom_special_handling', must be one of '%s'",
                    $custom_special_handling,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['custom_special_handling'] = $custom_special_handling;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


