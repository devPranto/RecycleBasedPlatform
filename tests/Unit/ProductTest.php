<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use TransactionService;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;


class ProductTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'email' => 'prantodev@yahoo.com',
        ]);
    }
    public function testEmail()
    {

        $this->assertDatabaseHas('users', [
            'email' => 'prantodev@yahoo.com',
        ]);
    }
    public function testproduct(){
        $this->login(1);
        $product = new ProductController;
        $request = new Request;

        $request->replace([
            'item'=>'tester',
            'desc'=>'lots of stuffs',
            'loc'=>'Dhaka',
            'free'=>1,
            'Price'=>0
        ]);
        $product->store($request);
        $this->assertDatabaseHas('products', [
            'item'=>'tester'
        ]);

    }
    protected function login($id){
        Session::start();
        $user = User::find($id);
        Auth::login($user);
     }

}
