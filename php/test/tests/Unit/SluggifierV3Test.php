<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SluggifierV3Test extends TestCase
{
	private Sluggifier $sluggifier;
  
	protected function setUp(): void
	{
		$this->sluggifier = new Sluggifier();
	}
  
	/**
	* @test
	* @dataProvider sluggableProvider
	*/
	public function it_returns_sluggified_string(string $originalString, string $expectedResult)
	{
		$this->assertEquals($expectedResult, $this->sluggifier->sluggify($originalString));
	}
  
	public function sluggableProvider(): array
    {
        return [
			['This string will be sluggified', 'this-string-will-be-sluggified'],
            ['THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'],
            ['This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'],
            ['This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'],
            ["Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'],
            ['', ''],
        ];
    }
}
