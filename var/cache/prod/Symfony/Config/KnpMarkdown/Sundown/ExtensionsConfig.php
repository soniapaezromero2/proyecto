<?php

namespace Symfony\Config\KnpMarkdown\Sundown;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExtensionsConfig 
{
    private $fencedCodeBlocks;
    private $noIntraEmphasis;
    private $tables;
    private $autolink;
    private $strikethrough;
    private $laxHtmlBlocks;
    private $spaceAfterHeaders;
    private $superscript;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fencedCodeBlocks($value): self
    {
        $this->_usedProperties['fencedCodeBlocks'] = true;
        $this->fencedCodeBlocks = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noIntraEmphasis($value): self
    {
        $this->_usedProperties['noIntraEmphasis'] = true;
        $this->noIntraEmphasis = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tables($value): self
    {
        $this->_usedProperties['tables'] = true;
        $this->tables = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autolink($value): self
    {
        $this->_usedProperties['autolink'] = true;
        $this->autolink = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strikethrough($value): self
    {
        $this->_usedProperties['strikethrough'] = true;
        $this->strikethrough = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function laxHtmlBlocks($value): self
    {
        $this->_usedProperties['laxHtmlBlocks'] = true;
        $this->laxHtmlBlocks = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function spaceAfterHeaders($value): self
    {
        $this->_usedProperties['spaceAfterHeaders'] = true;
        $this->spaceAfterHeaders = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function superscript($value): self
    {
        $this->_usedProperties['superscript'] = true;
        $this->superscript = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('fenced_code_blocks', $value)) {
            $this->_usedProperties['fencedCodeBlocks'] = true;
            $this->fencedCodeBlocks = $value['fenced_code_blocks'];
            unset($value['fenced_code_blocks']);
        }

        if (array_key_exists('no_intra_emphasis', $value)) {
            $this->_usedProperties['noIntraEmphasis'] = true;
            $this->noIntraEmphasis = $value['no_intra_emphasis'];
            unset($value['no_intra_emphasis']);
        }

        if (array_key_exists('tables', $value)) {
            $this->_usedProperties['tables'] = true;
            $this->tables = $value['tables'];
            unset($value['tables']);
        }

        if (array_key_exists('autolink', $value)) {
            $this->_usedProperties['autolink'] = true;
            $this->autolink = $value['autolink'];
            unset($value['autolink']);
        }

        if (array_key_exists('strikethrough', $value)) {
            $this->_usedProperties['strikethrough'] = true;
            $this->strikethrough = $value['strikethrough'];
            unset($value['strikethrough']);
        }

        if (array_key_exists('lax_html_blocks', $value)) {
            $this->_usedProperties['laxHtmlBlocks'] = true;
            $this->laxHtmlBlocks = $value['lax_html_blocks'];
            unset($value['lax_html_blocks']);
        }

        if (array_key_exists('space_after_headers', $value)) {
            $this->_usedProperties['spaceAfterHeaders'] = true;
            $this->spaceAfterHeaders = $value['space_after_headers'];
            unset($value['space_after_headers']);
        }

        if (array_key_exists('superscript', $value)) {
            $this->_usedProperties['superscript'] = true;
            $this->superscript = $value['superscript'];
            unset($value['superscript']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fencedCodeBlocks'])) {
            $output['fenced_code_blocks'] = $this->fencedCodeBlocks;
        }
        if (isset($this->_usedProperties['noIntraEmphasis'])) {
            $output['no_intra_emphasis'] = $this->noIntraEmphasis;
        }
        if (isset($this->_usedProperties['tables'])) {
            $output['tables'] = $this->tables;
        }
        if (isset($this->_usedProperties['autolink'])) {
            $output['autolink'] = $this->autolink;
        }
        if (isset($this->_usedProperties['strikethrough'])) {
            $output['strikethrough'] = $this->strikethrough;
        }
        if (isset($this->_usedProperties['laxHtmlBlocks'])) {
            $output['lax_html_blocks'] = $this->laxHtmlBlocks;
        }
        if (isset($this->_usedProperties['spaceAfterHeaders'])) {
            $output['space_after_headers'] = $this->spaceAfterHeaders;
        }
        if (isset($this->_usedProperties['superscript'])) {
            $output['superscript'] = $this->superscript;
        }

        return $output;
    }

}
