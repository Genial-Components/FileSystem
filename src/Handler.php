<?php
/**
 * @link      <https://github.com/Genial-Framework/FileSystem> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018, Genial Framework. <https://github.com/Genial-Components>
 * @license   <https://github.com/Genial-Framework/FileSystem/blob/master/LICENSE> New BSD License.
 */
 
namespace Genial\FileSystem;

use \Genial\FileSystem\Exception\
{
    RuntimeException
};

/**
 * Handler.
 */
class Handler extends HandlerConfig implements HandlerInterface
{
  
    function __construct(string $root): void
    {
        $path = self::APP_ROOT . $root;
        if (!\file_exists($path) && !\is_dir($path))
        {
            throw new RuntimeException(\sprintf(
                '`%s` The requested directory path does not exist. Passed: `%s`'
                \__METHOD__,
                \htmlspecialchars($root, \ENT_QUOTES, 'UTF-8')
            ), 100);
        }
        
    }
 
}
