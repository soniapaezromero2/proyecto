<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpMarkdown'.\DIRECTORY_SEPARATOR.'ParserConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpMarkdown'.\DIRECTORY_SEPARATOR.'SundownConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KnpMarkdownConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $parser;
    private $sundown;
    private $_usedProperties = [];

    public function parser(array $value = []): \Symfony\Config\KnpMarkdown\ParserConfig
    {
        if (null === $this->parser) {
            $this->_usedProperties['parser'] = true;
            $this->parser = new \Symfony\Config\KnpMarkdown\ParserConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "parser()" has already been initialized. You cannot pass values the second time you call parser().');
        }

        return $this->parser;
    }

    public function sundown(array $value = []): \Symfony\Config\KnpMarkdown\SundownConfig
    {
        if (null === $this->sundown) {
            $this->_usedProperties['sundown'] = true;
            $this->sundown = new \Symfony\Config\KnpMarkdown\SundownConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sundown()" has already been initialized. You cannot pass values the second time you call sundown().');
        }

        return $this->sundown;
    }

    public function getExtensionAlias(): string
    {
        return 'knp_markdown';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('parser', $value)) {
            $this->_usedProperties['parser'] = true;
            $this->parser = new \Symfony\Config\KnpMarkdown\ParserConfig($value['parser']);
            unset($value['parser']);
        }

        if (array_key_exists('sundown', $value)) {
            $this->_usedProperties['sundown'] = true;
            $this->sundown = new \Symfony\Config\KnpMarkdown\SundownConfig($value['sundown']);
            unset($value['sundown']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['parser'])) {
            $output['parser'] = $this->parser->toArray();
        }
        if (isset($this->_usedProperties['sundown'])) {
            $output['sundown'] = $this->sundown->toArray();
        }

        return $output;
    }

}
