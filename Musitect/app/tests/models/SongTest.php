<?php
 
use Zizaco\FactoryMuff\Facade\FactoryMuff;
 
class SongTest extends TestCase
{
	public function test_relation_with_user()
	{
    // Instantiate, fill with values, save and return
    $post = FactoryMuff::create('Post');
 
    // Thanks to FactoryMuff, this $post have an author
    $this->assertEquals( $post->user_id, $post->user->id );
	}
	
	public function test_posted_at()
    {
        // Instantiate, fill with values, save and return
        $post = FactoryMuff::create('Post');
 
        // Regular expression that represents d/m/Y pattern
        $expected = '/\d{2}\/\d{2}\/\d{4}/';
 
        // True if preg_match finds the pattern
        $matches = ( preg_match($expected, $post->postedAt()) ) ? true : false;
 
        $this->assertTrue( $matches );
    }
} 