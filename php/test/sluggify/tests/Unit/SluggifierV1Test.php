<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SluggifierV1Test extends TestCase
{
	/** @test */
	public function it_returns_sluggified_string()
	{
		$originalString = 'This string will be sluggified';
		$expectedResult = 'this*string-will-be-sluggified';

		$sluggifier = new Sluggifier();

		$result = $sluggifier->sluggify($originalString);

		$this->assertEquals($expectedResult, $result);
	}

	/** @test */
	public function it_returns_expected_for_strings_containing_numbers()
	{
		$originalString = 'This1 string2 will3 be 44 sluggified10';
		$expectedResult = 'this1-string2-will3-be-44-sluggified10';

		$sluggifier = new Sluggifier();

		$result = $sluggifier->sluggify($originalString);

		$this->assertEquals($expectedResult, $result);
	}

	/** @test */
	public function it_returns_expected_for_strings_containing_special_characters()
	{
		$originalString = 'This! @string#$ %$will ()be "sluggified';
		$expectedResult = 'this-string-will-be-sluggified';

		$sluggifier = new Sluggifier();

		$result = $sluggifier->sluggify($originalString);

		$this->assertEquals($expectedResult, $result);
	}

	/** @test */
	public function it_returns_expected_for_strings_containing_non_english_characters()
	{
		$originalString = "Tänk efter nu – förr'n vi föser dig bort";
		$expectedResult = 'tank-efter-nu-forrn-vi-foser-dig-bort';

		$sluggifier = new Sluggifier();

		$result = $sluggifier->sluggify($originalString);

		$this->assertEquals($expectedResult, $result);
	}

	/** @test */
	public function it_returns_expected_for_empty_strings()
	{
		$originalString = '';
		$expectedResult = '';

		$sluggifier = new Sluggifier();

		$result = $sluggifier->sluggify($originalString);

		$this->assertEquals($expectedResult, $result);
	}
}