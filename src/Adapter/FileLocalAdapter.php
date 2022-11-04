<?php

namespace CaioMarcatti12\FileManager\Adapter;

use CaioMarcatti12\FileManager\Interfaces\FileManagerInterface;

class FileLocalAdapter implements FileManagerInterface
{
    public function put(string $absolutePath, mixed $content): bool
    {
        file_put_contents($absolutePath, $content);

        return true;
    }

    public function get(string $absolutePath): string|bool
    {
        return @file_get_contents($absolutePath);
    }

    public function delete(string $absolutePath): bool
    {
        return unlink($absolutePath);
    }

    public function exists(string $absolutePath): bool
    {
        return file_exists($absolutePath);
    }

    public function copy(string $source, string $destination): bool
    {
        return copy($source, $destination);
    }
}