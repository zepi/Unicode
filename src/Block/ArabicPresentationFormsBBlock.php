<?php

/**
 * The ArabicPresentationFormsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArabicPresentationFormsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArabicPresentationFormsBBlock extends AbstractBlock
{
    protected string $key = 'ArabicPresentationFormsB';
    protected array $names = [
        'en' => 'Arabic Presentation Forms-B',
        'de' => 'Arabische Präsentationsformen-B',
    ];
    protected int $blockStart = 0xFE70;
    protected int $blockEnd = 0xFEFF;
    protected string $regex = '/[\x{FE70}-\x{FEFF}]/u';
}