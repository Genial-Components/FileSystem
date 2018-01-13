<?php
/**
 * @link      <https://github.com/SyzerPHP/FileSystem> for the canonical source repository.
 * @copyright Copyright (c) 2018, SyzerPHP <https://github.com/SyzerPHP>.
 * @license   <hztps://github.com/SyzerPHP/FileSystem/blob/master/LICENSE> New BSD License.
 */
namespace Syzer\FileSystem;
use \Syzer\Exception\{
    
};
/**
 * Handler.
 */
class Handler extends FileSystem implements HandlerInterface
{
    public function delete(string $path) {
        $path = \rtrim(\ltrim($path));
        if (\empty($path) || $path == '') {

        }
    }
}
