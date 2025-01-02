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
     * @return string
     */
    public function name(): string;

    /**
     * Returns the pattern of the token.
     *
     * @return string
     */
    public function pattern(): string;

    /**
     * Returns the content of the token.
     *
     * @return string
     */
    public function content(): string;

    /**
     * Returns the position of the token relative to the main context.
     *
     * @return non-negative-int
     */
    public function offset(): int;

    /**
     * Returns the token processing flag
     *
     * @return bool
     */
    public function isProcessed(): bool;
}
