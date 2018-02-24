<?php

namespace App\Parsers;

abstract class Parsers
{
	/**
	 * @var DOMDocument
	 */
	protected $document;

	/**
	 * @var mixed
	 */
	protected $result;

    /**
     * Registered tags to operate upon.
     *
     * @var array
     */
    protected $tags = [];

    /**
     * HTML Parser instance
     */
	public function __construct()
	{
		$this->document = new \DOMDocument("1.1");
	}

	public function apply($html, $tags)
	{
		$this->document->loadHTML(utf8_encode($html));

        foreach ($tags as $tag) {
            if (method_exists($this, $tag)) {
                $this->$tag($this->document);
            }
        }

        return $this->result;
	}
}