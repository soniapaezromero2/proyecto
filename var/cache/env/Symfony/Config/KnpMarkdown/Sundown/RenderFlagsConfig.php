<?php

namespace Symfony\Config\KnpMarkdown\Sundown;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RenderFlagsConfig 
{
    private $filterHtml;
    private $noImages;
    private $noLinks;
    private $noStyles;
    private $safeLinksOnly;
    private $withTocData;
    private $hardWrap;
    private $xhtml;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function filterHtml($value): self
    {
        $this->_usedProperties['filterHtml'] = true;
        $this->filterHtml = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noImages($value): self
    {
        $this->_usedProperties['noImages'] = true;
        $this->noImages = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noLinks($value): self
    {
        $this->_usedProperties['noLinks'] = true;
        $this->noLinks = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noStyles($value): self
    {
        $this->_usedProperties['noStyles'] = true;
        $this->noStyles = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function safeLinksOnly($value): self
    {
        $this->_usedProperties['safeLinksOnly'] = true;
        $this->safeLinksOnly = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function withTocData($value): self
    {
        $this->_usedProperties['withTocData'] = true;
        $this->withTocData = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function hardWrap($value): self
    {
        $this->_usedProperties['hardWrap'] = true;
        $this->hardWrap = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function xhtml($value): self
    {
        $this->_usedProperties['xhtml'] = true;
        $this->xhtml = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('filter_html', $value)) {
            $this->_usedProperties['filterHtml'] = true;
            $this->filterHtml = $value['filter_html'];
            unset($value['filter_html']);
        }

        if (array_key_exists('no_images', $value)) {
            $this->_usedProperties['noImages'] = true;
            $this->noImages = $value['no_images'];
            unset($value['no_images']);
        }

        if (array_key_exists('no_links', $value)) {
            $this->_usedProperties['noLinks'] = true;
            $this->noLinks = $value['no_links'];
            unset($value['no_links']);
        }

        if (array_key_exists('no_styles', $value)) {
            $this->_usedProperties['noStyles'] = true;
            $this->noStyles = $value['no_styles'];
            unset($value['no_styles']);
        }

        if (array_key_exists('safe_links_only', $value)) {
            $this->_usedProperties['safeLinksOnly'] = true;
            $this->safeLinksOnly = $value['safe_links_only'];
            unset($value['safe_links_only']);
        }

        if (array_key_exists('with_toc_data', $value)) {
            $this->_usedProperties['withTocData'] = true;
            $this->withTocData = $value['with_toc_data'];
            unset($value['with_toc_data']);
        }

        if (array_key_exists('hard_wrap', $value)) {
            $this->_usedProperties['hardWrap'] = true;
            $this->hardWrap = $value['hard_wrap'];
            unset($value['hard_wrap']);
        }

        if (array_key_exists('xhtml', $value)) {
            $this->_usedProperties['xhtml'] = true;
            $this->xhtml = $value['xhtml'];
            unset($value['xhtml']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['filterHtml'])) {
            $output['filter_html'] = $this->filterHtml;
        }
        if (isset($this->_usedProperties['noImages'])) {
            $output['no_images'] = $this->noImages;
        }
        if (isset($this->_usedProperties['noLinks'])) {
            $output['no_links'] = $this->noLinks;
        }
        if (isset($this->_usedProperties['noStyles'])) {
            $output['no_styles'] = $this->noStyles;
        }
        if (isset($this->_usedProperties['safeLinksOnly'])) {
            $output['safe_links_only'] = $this->safeLinksOnly;
        }
        if (isset($this->_usedProperties['withTocData'])) {
            $output['with_toc_data'] = $this->withTocData;
        }
        if (isset($this->_usedProperties['hardWrap'])) {
            $output['hard_wrap'] = $this->hardWrap;
        }
        if (isset($this->_usedProperties['xhtml'])) {
            $output['xhtml'] = $this->xhtml;
        }

        return $output;
    }

}
