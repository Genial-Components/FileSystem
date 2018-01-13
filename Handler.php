<?php
/**
 * @link      <https://github.com/SyzerPHP/FileSystem> for the canonical source repository.
 * @copyright Copyright (c) 2018, SyzerPHP <https://github.com/SyzerPHP>.
 * @license   <hztps://github.com/SyzerPHP/FileSystem/blob/master/LICENSE> New BSD License.
 */
namespace Syzer\FileSystem;
use \Syzer\Exception\{
    DomainException,
    
};
/**
 * Handler.
 */
class Handler extends FileSystem implements HandlerInterface
{
    public function delete(string $path): bool {
        $path = \rtrim(\ltrim($path));
        if (\empty($path) || $path == '') {
            return \false;
        }
        $valid = $this->validate($path, ['f', 'ic', 'bp']);
        if (!$valid) {
            throw new DomainException(\sprintf(
                '`%s` Invalid file path.',
                __METHOD__
            ));
        }
        return \unlink($path);
    }
}
