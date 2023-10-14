<?php

class Session
{
    public static ?self $instance = null;
    public static function instance(): self
    {
        if (static::$instance === null) {
            static::$instance = new static;
        }
        return static::$instance;
    }
    public array $data = [];
    public array $old_request = [];
    protected function __construct()
    {
        session_start();
        $this->data = $_SESSION;
        $this->data = array_merge($this->data, $_SESSION['flashed_data'] ?? []);

        unset($_SESSION['flashed_data']);
        $this->old_request = $_SESSION['flashed_request'] ?? [];

        unset($_SESSION['flashed_request']);
    }
    public function put($key, $value)
    {
        $this->data[$key] = $value;
        $_SESSION[$key] = $value;
    }
    public function get($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }
    public function flash($key, $value)
    {
        $_SESSION['flashed_data'][$key] = $value;
    }
    public function flashRequest()
    {
        $_SESSION['flashed_request'] = $_POST;
    }
    public function old($key, $default = null)
    {
        return $this->old_request[$key] ?? $default;
    }
}