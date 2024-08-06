<?php

/**
 * Class WysiwygMDEditorHelper
 * @package Kanboard\Plugin\WysiwygMDEditor\Helper
 * @author  Im[F(x)]
 */

namespace Kanboard\Plugin\WysiwygMDEditor\Helper;

use Kanboard\Core\Base;
use Kanboard\Core\Markdown;

class WysiwygMDEditorHelper extends Base
{
    const FORCE_FALLBACK_IMPL = '__{WysiwygMDEditor_FORCE_FALLBACK_IMPL}__';

    /**
     * HTML escaping
     *
     * @param  string   $value    Value to escape
     * @return string
     */
    public function e($value)
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8', false);
    }

    /**
     * Join with HTML escaping
     *
     * @param  $glue
     * @param  array $list
     * @return string
     */
    public function implode($glue, array $list)
    {
        array_walk($list, function (&$value) {
            $value = htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8', false);
        });
        return implode($glue, $list);
    }

    /**
     * Markdown transformation
     *
     * @param  string    $text
     * @param  boolean   $isPublicLink
     * @return string
     */
    public function markdown($text, $isPublicLink = false)
    {
        $isForceFallbackImpl = str_starts_with($text, WysiwygMDEditorHelper::FORCE_FALLBACK_IMPL);

        if ($isForceFallbackImpl) {
            // the original KB impl
            $parser = new Markdown($this->container, $isPublicLink);
            $parser->setMarkupEscaped(MARKDOWN_ESCAPE_HTML);
            $parser->setBreaksEnabled(true);
            return $parser->text($text ? str_replace(WysiwygMDEditorHelper::FORCE_FALLBACK_IMPL, '', $text) : '');
        }

        $returnText = '';
        $returnText .= '<textarea class="WysiwygMDEditor-MarkdownTextContainer" style="display: none" ';
        $returnText .= 'renderTheme="' . $this->configModel->get('WysiwygMDEditor_easymde_render_theme', 'dimmed') . '" ';
        $returnText .= 'renderTransparentBackground="' . $this->configModel->get('WysiwygMDEditor_easymde_render_transparent_background', 0) . '" ';
        $returnText .= 'renderCodeHighlight="' . $this->configModel->get('WysiwygMDEditor_easymde_render_code_highlight', 1) . '" ';
        $returnText .= 'useEmojiFont="' . $this->configModel->get('WysiwygMDEditor_enable_emojifont', 0) . '" ';
        $returnText .= '>';
        $returnText .= $text;
        $returnText .= '</textarea>';
        return $returnText;
    }

    /**
     * Format a file size
     *
     * @param  integer  $size        Size in bytes
     * @param  integer  $precision   Precision
     * @return string
     */
    public function bytes($size, $precision = 2)
    {
        if ($size == 0) {
            return 0;
        }

        $base = log($size) / log(1024);
        $suffixes = array('', 'k', 'M', 'G', 'T');

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[(int) floor($base)];
    }

    /**
     * Return true if needle is contained in the haystack
     *
     * @param  string   $haystack   Haystack
     * @param  string   $needle     Needle
     * @return boolean
     */
    public function contains($haystack, $needle)
    {
        return strpos($haystack, $needle) !== false;
    }

    /**
     * Return a value from a dictionary
     *
     * @param  mixed   $id              Key
     * @param  array   $listing         Dictionary
     * @param  string  $default_value   Value displayed when the key doesn't exists
     * @return string
     */
    public function in($id, array $listing, $default_value = '?')
    {
        if (isset($listing[$id])) {
            return $this->helper->text->e($listing[$id]);
        }

        return $default_value;
    }
}
