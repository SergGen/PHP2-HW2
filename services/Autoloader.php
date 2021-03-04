<?php

namespace app\services;

class Autoloader
{
    private string $fileExtension = ".php";

    public function loadClass(string $className): bool
    {
        $className = str_replace(ROOT_NAMESPACE, ROOT_DIR, $className);
        $filename = realpath($className . $this->fileExtension);
        if (file_exists($filename)) {
            include $filename;
            return true;
        }

        return false;
    }
}