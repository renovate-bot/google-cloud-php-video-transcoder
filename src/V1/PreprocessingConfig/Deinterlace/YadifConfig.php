<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deinterlace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Yet Another Deinterlacing Filter Configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace.YadifConfig</code>
 */
class YadifConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the deinterlacing mode to adopt.
     * The default is `send_frame`.
     * Supported values:
     * - `send_frame`: Output one frame for each frame
     * - `send_field`: Output one frame for each field
     *
     * Generated from protobuf field <code>string mode = 1;</code>
     */
    protected $mode = '';
    /**
     * Disable spacial interlacing.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool disable_spatial_interlacing = 2;</code>
     */
    protected $disable_spatial_interlacing = false;
    /**
     * The picture field parity assumed for the input interlaced video.
     * The default is `auto`.
     * Supported values:
     * - `tff`: Assume the top field is first
     * - `bff`: Assume the bottom field is first
     * - `auto`: Enable automatic detection of field parity
     *
     * Generated from protobuf field <code>string parity = 3;</code>
     */
    protected $parity = '';
    /**
     * Deinterlace all frames rather than just the frames identified as
     * interlaced. The default is `false`.
     *
     * Generated from protobuf field <code>bool deinterlace_all_frames = 4;</code>
     */
    protected $deinterlace_all_frames = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mode
     *           Specifies the deinterlacing mode to adopt.
     *           The default is `send_frame`.
     *           Supported values:
     *           - `send_frame`: Output one frame for each frame
     *           - `send_field`: Output one frame for each field
     *     @type bool $disable_spatial_interlacing
     *           Disable spacial interlacing.
     *           The default is `false`.
     *     @type string $parity
     *           The picture field parity assumed for the input interlaced video.
     *           The default is `auto`.
     *           Supported values:
     *           - `tff`: Assume the top field is first
     *           - `bff`: Assume the bottom field is first
     *           - `auto`: Enable automatic detection of field parity
     *     @type bool $deinterlace_all_frames
     *           Deinterlace all frames rather than just the frames identified as
     *           interlaced. The default is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the deinterlacing mode to adopt.
     * The default is `send_frame`.
     * Supported values:
     * - `send_frame`: Output one frame for each frame
     * - `send_field`: Output one frame for each field
     *
     * Generated from protobuf field <code>string mode = 1;</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Specifies the deinterlacing mode to adopt.
     * The default is `send_frame`.
     * Supported values:
     * - `send_frame`: Output one frame for each frame
     * - `send_field`: Output one frame for each field
     *
     * Generated from protobuf field <code>string mode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Disable spacial interlacing.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool disable_spatial_interlacing = 2;</code>
     * @return bool
     */
    public function getDisableSpatialInterlacing()
    {
        return $this->disable_spatial_interlacing;
    }

    /**
     * Disable spacial interlacing.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool disable_spatial_interlacing = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableSpatialInterlacing($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_spatial_interlacing = $var;

        return $this;
    }

    /**
     * The picture field parity assumed for the input interlaced video.
     * The default is `auto`.
     * Supported values:
     * - `tff`: Assume the top field is first
     * - `bff`: Assume the bottom field is first
     * - `auto`: Enable automatic detection of field parity
     *
     * Generated from protobuf field <code>string parity = 3;</code>
     * @return string
     */
    public function getParity()
    {
        return $this->parity;
    }

    /**
     * The picture field parity assumed for the input interlaced video.
     * The default is `auto`.
     * Supported values:
     * - `tff`: Assume the top field is first
     * - `bff`: Assume the bottom field is first
     * - `auto`: Enable automatic detection of field parity
     *
     * Generated from protobuf field <code>string parity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParity($var)
    {
        GPBUtil::checkString($var, True);
        $this->parity = $var;

        return $this;
    }

    /**
     * Deinterlace all frames rather than just the frames identified as
     * interlaced. The default is `false`.
     *
     * Generated from protobuf field <code>bool deinterlace_all_frames = 4;</code>
     * @return bool
     */
    public function getDeinterlaceAllFrames()
    {
        return $this->deinterlace_all_frames;
    }

    /**
     * Deinterlace all frames rather than just the frames identified as
     * interlaced. The default is `false`.
     *
     * Generated from protobuf field <code>bool deinterlace_all_frames = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeinterlaceAllFrames($var)
    {
        GPBUtil::checkBool($var);
        $this->deinterlace_all_frames = $var;

        return $this;
    }

}


