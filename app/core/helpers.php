<?php

namespace School\Core;

trait Helpers
{
    public function route($path)
    {
        session_write_close();
        header('Location:' . $path);
        exit();
    }
}