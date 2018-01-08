<?php
/**
 * @link      <https://github.com/Genial-Components/FileSystem> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018, Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Components/FileSystem/blob/master/LICENSE> New BSD License.
 */
 
namespace Genial\FileSystem;

use \Genial\FileSystem\Exception\{
    RuntimeException
};

/**
 * Handler.
 */
class Handler extends HandlerConfig implements HandlerInterface
{
    
    /**
     * @var string $root The directory the handler should run on.
     */
    private $root;
  
    /**
     * __construct().
     *
     * Set the directory the handler should run on.
     *
     * @param string $root The directory the handler should run on.
     *
     * @throws RuntimeException If the requested directory path does not exist.
     *
     * @return void.
     */
    function __construct(string $root): void
    {
        if (!\file_exists($path) && !\is_dir($path)) {
            throw new RuntimeException(\sprintf(
                '`%s` The requested directory path does not exist. Passed: `%s`'
                \__METHOD__,
                \htmlspecialchars($root, \ENT_QUOTES, 'UTF-8')
            ));
        }
        $this->root = $root;
    }
 
}
