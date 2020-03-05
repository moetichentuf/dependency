<?php
namespace Common\ContentBundle\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * Class MarkdownTransformer
 * @package Common\ContentBundle\DataTransformer
 */
class transform implements DataTransformerInterface
{

    /**
     * Transforms the HTML string back to markdown.
     *
     * @param string $val
     * @return string
     */

    // Using this code as a base example

    public function transform($val)
    {
        // strong to double asterisks:
        $val = preg_replace("/\<strong\>(.+?)\<\/strong\>/i", "**$1**", $val);

        // italic to double underscores:
        $val = preg_replace("/\<em\>(.+?)\<\/em\>/i", "__$1__", $val);

        return $val;
    }

    /**
     * Transforms the markdown string to html.

     * @param  string $val
     * @return string
     */
    public function reverseTransform($val)
    {
        // double asterisks to strong:
        $val = preg_replace("/\*\*(.+?)\*\*/i", "<strong>$1</strong>", $val);

        // double underscores to italic:
        $val = preg_replace("/\_\_(.+?)\_\_/i", "<em>$1</em>", $val);

        return $val;
    }
}