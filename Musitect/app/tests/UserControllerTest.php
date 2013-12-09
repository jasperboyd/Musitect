<?php 

class UserControllerTest extends TestCase{

   /**
   * Set up
   */
   public function setUp()
   {
     parent::setUp();

     $this->mock = $this->mock('Musitect\Storage\User\UserRepository');
   }

    /**
* Tear down
*/
  public function tearDown()
  {
    Mockery::close();
  }

  /**
* Mock
*/
  public function mock($class)
  {
    $mock = Mockery::mock($class);

    $this->app->instance($class, $mock);

    return $mock;
  }
}
