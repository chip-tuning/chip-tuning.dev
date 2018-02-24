<?php

namespace App\Parsers;

class HTMLParsers extends Parsers
{
    /**
     * Registered tags to operate upon.
     *
     * @var array
     */
    protected $tags = ['img'];

    /**
     * Parse img tags
     * @param  DOMDocument  $document
     * @param  boolean      $self
     * @return void
     */
	public function img($document, $self = true) 
	{
		$paths = [];
		$imgs = $document->getElementsByTagName('img');
	
		if ($self)
		{
			$domain = config('app.url');

			foreach ($imgs as $img) {
				$path = $img->getAttribute('src');

				if (preg_match("@^{$domain}*/?@i", $path))
					$paths[] = ltrim(parse_url($path, PHP_URL_PATH), '/storage/');				
			}
		}
		else
		{
			foreach ($imgs as $img) {
				$paths[] = $img->getAttribute('src');			
			}			
		}

		$this->result = $paths;
	}
}