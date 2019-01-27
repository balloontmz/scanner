<?php
namespace InterfaceTest;

use InterfaceTest\Documentable;

/**
 * 获取命令行的执行结果
 */
class CommandOutputDocument implements Documentable
{
    protected $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function getId()
    {
        return $this->command;
    }

    public function getContent()
    {
        return shell_exec($this->command);
    }

}