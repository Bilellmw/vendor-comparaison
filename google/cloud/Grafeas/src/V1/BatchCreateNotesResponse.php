<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/grafeas.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for creating notes in batch.
 *
 * Generated from protobuf message <code>grafeas.v1.BatchCreateNotesResponse</code>
 */
class BatchCreateNotesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The notes that were created.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Note notes = 1;</code>
     */
    private $notes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grafeas\V1\Note[]|\Google\Protobuf\Internal\RepeatedField $notes
     *           The notes that were created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The notes that were created.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Note notes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * The notes that were created.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Note notes = 1;</code>
     * @param \Grafeas\V1\Note[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Note::class);
        $this->notes = $arr;

        return $this;
    }

}
