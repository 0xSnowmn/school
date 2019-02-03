<?php
namespace School\Core;

class Messenger
{
    const APP_MESSAGE_ERROR = 0;
    const APP_MESSAGE_SUCCESS = 1;
    const APP_MESSAGE_INFO = 2;
    const APP_MESSAGE_DANGER = 3;

    private static $instance;
    private $session;
    private $_msgs;

    private function __construct($session)
    {
        $this->session = $session;
    }

    public function getInstance(appSession $session)
    {
        if (self::$instance == null) {
            self::$instance = new self($session);
        }
        return self::$instance;

    }

    public function add($msg, $type = self::APP_MESSAGE_SUCCESS)
    {
        if (!$this->messageExists()) {
            $this->session->messages = [];
        }
        $msgs = $this->session->messages;
        $msgs[] = [$msg, $type];
        $this->session->messages = $msgs;
    }

    private function messageExists()
    {
        return isset($this->session->messages);
    }

    public function getMsgs()
    {
        if ($this->messageExists()) {
            $this->_msgs = $this->session->messages;
            unset($this->session->messages);
            return $this->_msgs;
        }

        return [];
    }
}