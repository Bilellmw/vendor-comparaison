<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the smallest syntactic building block of the text.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.Token</code>
 */
class Token extends \Google\Protobuf\Internal\Message
{
    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     */
    private $text = null;
    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.PartOfSpeech part_of_speech = 2;</code>
     */
    private $part_of_speech = null;
    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.DependencyEdge dependency_edge = 3;</code>
     */
    private $dependency_edge = null;
    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     */
    private $lemma = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1beta2\TextSpan $text
     *           The token text.
     *     @type \Google\Cloud\Language\V1beta2\PartOfSpeech $part_of_speech
     *           Parts of speech tag for this token.
     *     @type \Google\Cloud\Language\V1beta2\DependencyEdge $dependency_edge
     *           Dependency tree parse for this token.
     *     @type string $lemma
     *           [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     * @return \Google\Cloud\Language\V1beta2\TextSpan|null
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : null;
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The token text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     * @param \Google\Cloud\Language\V1beta2\TextSpan $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\TextSpan::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.PartOfSpeech part_of_speech = 2;</code>
     * @return \Google\Cloud\Language\V1beta2\PartOfSpeech|null
     */
    public function getPartOfSpeech()
    {
        return isset($this->part_of_speech) ? $this->part_of_speech : null;
    }

    public function hasPartOfSpeech()
    {
        return isset($this->part_of_speech);
    }

    public function clearPartOfSpeech()
    {
        unset($this->part_of_speech);
    }

    /**
     * Parts of speech tag for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.PartOfSpeech part_of_speech = 2;</code>
     * @param \Google\Cloud\Language\V1beta2\PartOfSpeech $var
     * @return $this
     */
    public function setPartOfSpeech($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\PartOfSpeech::class);
        $this->part_of_speech = $var;

        return $this;
    }

    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.DependencyEdge dependency_edge = 3;</code>
     * @return \Google\Cloud\Language\V1beta2\DependencyEdge|null
     */
    public function getDependencyEdge()
    {
        return isset($this->dependency_edge) ? $this->dependency_edge : null;
    }

    public function hasDependencyEdge()
    {
        return isset($this->dependency_edge);
    }

    public function clearDependencyEdge()
    {
        unset($this->dependency_edge);
    }

    /**
     * Dependency tree parse for this token.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.DependencyEdge dependency_edge = 3;</code>
     * @param \Google\Cloud\Language\V1beta2\DependencyEdge $var
     * @return $this
     */
    public function setDependencyEdge($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\DependencyEdge::class);
        $this->dependency_edge = $var;

        return $this;
    }

    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     * @return string
     */
    public function getLemma()
    {
        return $this->lemma;
    }

    /**
     * [Lemma](https://en.wikipedia.org/wiki/Lemma_%28morphology%29) of the token.
     *
     * Generated from protobuf field <code>string lemma = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLemma($var)
    {
        GPBUtil::checkString($var, True);
        $this->lemma = $var;

        return $this;
    }

}

