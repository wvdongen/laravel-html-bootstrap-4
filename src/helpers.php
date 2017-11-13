<?php

use MarvinLabs\Html\Bootstrap\Bootstrap;

if ( !function_exists('bs'))
{

    /**
     * @return \MarvinLabs\Html\Bootstrap\Bootstrap
     */
    function bs()
    {
        return app(Bootstrap::class);
    }
}

if ( !function_exists('data_attributes'))
{

    /**
     * @param array $attrs The data attributes as an associative array (key will be appended after 'data-', value will
     *                     be used as attribute value)
     *
     * @return string The data attributes usable directly within the HTML tag
     */
    function data_attributes(array $attrs = [])
    {
        return collect($attrs)
            ->map(function ($value, $key) {
                return 'data-' . $key . '="' . $value . '"';
            })
            ->implode(' ');
    }
}

if ( !function_exists('field_name_to_id'))
{

    /**
     * Converts a valid form field name to a valid HTML ID. Transforms all dots and square brackets to some sane
     * separators accepted with ID strings.
     *
     * @param string $name
     *
     * @return string
     */
    function field_name_to_id($name)
    {
        if (empty($name))
        {
            return $name;
        }

        return str_replace(['.', '[]', '[', ']'], ['_', '', '.', ''], $name);
    }
}