<?php
/**
 * @link      <https://github.com/SyzerPHP/FileSystem> for the canonical source repository.
 * @copyright Copyright (c) 2018, SyzerPHP <https://github.com/SyzerPHP>.
 * @license   <hztps://github.com/SyzerPHP/FileSystem/blob/master/LICENSE> New BSD License.
 */
namespace Syzer\FileSystem\Exception;
/**
 * ExceptionInterface.
 */
interface ExceptionInterface
{
    function __construct(
        string $message = null,
        int $code = null,
        string $file = null,
        int $line = null
    );
}
