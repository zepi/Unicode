<?php

/**
 * The EthiopicExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EthiopicExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EthiopicExtendedBlock extends AbstractBlock
{
    protected string $key = 'EthiopicExtended';
    protected array $names = [
        'en' => 'Ethiopic Extended',
        'de' => 'Äthiopisch, erweitert',
    ];
    protected int $blockStart = 0x2D80;
    protected int $blockEnd = 0x2DDF;
    protected string $regex = '/[\x{2D80}-\x{2DDF}]/u';
}