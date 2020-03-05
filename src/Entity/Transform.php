<?php

namespace Acme;

class UppercaseTransformer implements TransformerInterface
{
    private $transformer;

    public function __construct(TransformerInterface $transformer)
    {
        $this->transformer = $transformer;
    }

    public function transform($value)
    {
        return strtoupper($this->transformer->transform($value));
    }
}