<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Parser;

use SpecDoc\Contract\Common\TokenInterface;
use SpecDoc\Contract\Exception\ParserExceptionInterface;

/**
 * An interface that implements methods for parsing incoming source.
 */
interface ParserInterface
{
    /**
     * Parses the source into a list of tokens.
     *
     * @return list<TokenInterface>
     * @throws ParserExceptionInterface Any parser error
     */
    public function parse(): iterable;
}
