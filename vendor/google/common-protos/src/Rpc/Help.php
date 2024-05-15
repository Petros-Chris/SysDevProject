<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides links to documentation or for performing an out of band action.
 * For example, if a quota check failed with an error indicating the calling
 * project hasn't enabled the accessed service, this can contain a URL pointing
 * directly to the right place in the developer console to flip the bit.
 *
 * Generated from protobuf message <code>google.rpc.Help</code>
 */
class Help extends \Google\Protobuf\Internal\Message
{
    /**
     * URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link links = 1;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Rpc\Help\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           URL(s) pointing to additional information on handling the current error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link links = 1;</code>
     * @param array<\Google\Rpc\Help\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Help\Link::class);
        $this->links = $arr;

        return $this;
    }

}

