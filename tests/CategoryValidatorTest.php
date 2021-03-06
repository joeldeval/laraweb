<?php

class CategoryValidatorTest extends TestCase
{
    /**
     * Test valid data.
     */
    public function testCreateSuccess()
    {
        $validator = new \App\Validators\CategoryValidator(App::make('validator'));
        $this->assertTrue($validator->with($this->getValidCreateData())->passes());
    }

    /**
     * Test invalid data.
     */
    public function testCreateFailure()
    {
        $validator = new \App\Validators\CategoryValidator(App::make('validator'));
        $this->assertFalse($validator->with($this->getInvalidCreateData())->passes());
        $this->assertEquals(2, count($validator->errors()));
        $this->assertInstanceOf('Illuminate\Support\MessageBag', $validator->errors());
    }

    /**
     * Returns an array with an example of valid data.
     *
     * @return array
     */
    private function getValidCreateData()
    {
        $file = tempnam(sys_get_temp_dir(), 'upl'); // create file
        imagepng(imagecreatetruecolor(10, 10), $file); // create and write image/png to it
        $image = new \Symfony\Component\HttpFoundation\File\UploadedFile(
            $file,
            'image.png',
            'image/png',
            null,
            null,
            true
        );
        return array(
            'category'  => 'Category',
            'slug'      => 'category-slug',
            'image'     => $image,
        );
    }

    /**
     * Returns an array with an example of invalid data.
     *
     * @return array
     */
    public function getInvalidCreateData()
    {
        $image = new \Symfony\Component\HttpFoundation\File\UploadedFile(
            $file = tempnam(sys_get_temp_dir(), 'upl'),
            'test-file.csv',
            'text/plain',
            446,
            null,
            true
        );
        return array(
            'category'  => 'Category',
            'image'     => $image
        );
    }

}
