<?php

namespace zepi\Unicode\Block;

class AlchemicalSymbolsBlock extends AbstractBlock
{
    protected string $key = 'AlchemicalSymbols';
    protected array $names = [
        'en' => 'Alchemical Symbols',
        'de' => 'Alchemistische Symbole',
    ];
    protected int $blockStart = 0x1F700;
    protected int $blockEnd = 0x1F77F;
    protected string $regex = '/[\x{1F700}-\x{1F77F}]/u';
}