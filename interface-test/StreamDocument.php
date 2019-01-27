<?php
namespace InterfaceTest;

use InterfaceTest\Documentable;

/**
 * 文档的另一个实现，从流中读取资源
 */
class StreamDocument implements Documentable
{
    protected $resource;
    protected $buffer;                          // 缓冲

    public function __construct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }

    public function getId()
    {
        return 'resource-'.(int)$this->resource;
    }

    public function getContent()
    {
        $streamContent = '';
        rewind($this->resource);
        while (feof($this->resource) === false) {       // 判定是否为中止符
            // 从流中读取设定的缓冲大小的字节，一次的最多读取量
            $streamContent .= fread($this->resource, $this->buffer);
        }

        return $streamContent;
    }

}