<?php

namespace CaioMarcatti12\FileManager\Interfaces;

interface FileManagerInterface
{
    public function put(string $absolutePath, mixed $content) : bool;
    public function get(string $absolutePath) : string|bool;
    public function delete(string $absolutePath) : bool;
    public function exists(string $absolutePath) : bool;
    public function copy(string $source, string $destination) : bool;
}