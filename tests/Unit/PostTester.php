<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use TransactionService;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Http\Controllers\PostsController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
class PostTester extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function test_posts(){
        $this->login(2);
        $posts   = new PostsController;
        $request = new Request;
        $request->replace([
            'title'=>'tester',
            'body'=>'lots of stuffs'
        ]);
        $posts->store($request);
        $this->assertDatabaseHas('posts', [
            'title'=>'tester',
            'body'=>'lots of stuffs'
        ]);
    }
    public function test_posts_delete(){
        $posts= new PostsController;
        $postsID=3;
        $response=$posts->destroy($postsID);
        $this->assertDatabaseMissing('posts',[
            'id'=>$postsID
        ]);
    }
    protected function login($id){
        Session::start();
        $user = User::find($id);
        Auth::login($user);
     }
}
