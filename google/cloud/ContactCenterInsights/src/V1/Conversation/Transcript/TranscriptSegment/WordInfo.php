<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Word-level info for words in a transcript.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.WordInfo</code>
 */
class WordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time offset of the start of this word relative to the beginning of
     * the total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     */
    private $start_offset = null;
    /**
     * Time offset of the end of this word relative to the beginning of the
     * total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     */
    private $end_offset = null;
    /**
     * The word itself. Includes punctuation marks that surround the word.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     */
    private $word = '';
    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * word. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_offset
     *           Time offset of the start of this word relative to the beginning of
     *           the total conversation.
     *     @type \Google\Protobuf\Duration $end_offset
     *           Time offset of the end of this word relative to the beginning of the
     *           total conversation.
     *     @type string $word
     *           The word itself. Includes punctuation marks that surround the word.
     *     @type float $confidence
     *           A confidence estimate between 0.0 and 1.0 of the fidelity of this
     *           word. A default value of 0.0 indicates that the value is unset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Time offset of the start of this word relative to the beginning of
     * the total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartOffset()
    {
        return isset($this->start_offset) ? $this->start_offset : null;
    }

    public function hasStartOffset()
    {
        return isset($this->start_offset);
    }

    public function clearStartOffset()
    {
        unset($this->start_offset);
    }

    /**
     * Time offset of the start of this word relative to the beginning of
     * the total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_offset = $var;

        return $this;
    }

    /**
     * Time offset of the end of this word relative to the beginning of the
     * total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndOffset()
    {
        return isset($this->end_offset) ? $this->end_offset : null;
    }

    public function hasEndOffset()
    {
        return isset($this->end_offset);
    }

    public function clearEndOffset()
    {
        unset($this->end_offset);
    }

    /**
     * Time offset of the end of this word relative to the beginning of the
     * total conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_offset = $var;

        return $this;
    }

    /**
     * The word itself. Includes punctuation marks that surround the word.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * The word itself. Includes punctuation marks that surround the word.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWord($var)
    {
        GPBUtil::checkString($var, True);
        $this->word = $var;

        return $this;
    }

    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * word. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * word. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WordInfo::class, \Google\Cloud\ContactCenterInsights\V1\Conversation_Transcript_TranscriptSegment_WordInfo::class);
