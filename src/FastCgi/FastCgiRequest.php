<?php declare(strict_types=1);

namespace Bref\FpmRuntime\FastCgi;

use hollodotme\FastCGI\Requests\AbstractRequest;

/**
 * @internal
 */
final class FastCgiRequest extends AbstractRequest
{
    /** @var string */
    private string $method;

    public function __construct(string $method, string $scriptFilename, string $content)
    {
        $this->method = $method;
        parent::__construct($scriptFilename, $content);
    }

    public function getRequestMethod(): string
    {
        return $this->method;
    }

    public function getServerSoftware(): string
    {
        return 'bref';
    }
}
