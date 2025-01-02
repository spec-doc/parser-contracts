<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Token;

/**
 * An interface that implements methods for token.
 */
interface TokenInterface
{
    /**
     * Returns the name of the token.
     *
     * @return non-empty-string
     */
    public function name(): string;

    /**
     * Returns the content of the token.
     *
     * @return non-empty-string
     */
    public function content(): string;

    /**
     * Returns the offset of the token.
     *
     * @return int
     */
    public function offset(): int;
}
