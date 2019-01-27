<?php
namespace InterfaceTest;

use InterfaceTest\Documentable;     // 用于依赖注入，而不是实现接口 所以不需要 implements 继承 ，切记。

/**
 * 读取一个实现了 Documentable 接口的类实例，并保存结果。
 */
class DocumentStore 
{
    protected $data = [];
    
    public function addDocument(Documentable $document)
    {
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }

    public function getDocuments()
    {
        # code...
        return $this->data;
    }
}
