<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dex.proto

namespace Binance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Binance.Description</code>
 */
class Description extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string moniker = 1;</code>
     */
    protected $moniker = '';
    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>string website = 3;</code>
     */
    protected $website = '';
    /**
     * Generated from protobuf field <code>string details = 4;</code>
     */
    protected $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $moniker
     *     @type string $identity
     *     @type string $website
     *     @type string $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string moniker = 1;</code>
     * @return string
     */
    public function getMoniker()
    {
        return $this->moniker;
    }

    /**
     * Generated from protobuf field <code>string moniker = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMoniker($var)
    {
        GPBUtil::checkString($var, True);
        $this->moniker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string website = 3;</code>
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Generated from protobuf field <code>string website = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->website = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string details = 4;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>string details = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

