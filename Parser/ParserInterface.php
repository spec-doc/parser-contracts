<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Parser;

use SpecDoc\Contract\Token\TokenInterface;
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

    /**
     * Sets the content for parsing.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self;

    /**
     * Sets the rules for content parsing.
     *
     * @param array $rules
     *
     * @return self
     */
    public function setRules(array $rules): self;
}
