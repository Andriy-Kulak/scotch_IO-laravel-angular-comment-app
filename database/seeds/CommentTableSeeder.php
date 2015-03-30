<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder {

  public function run() {

    DB::table('comments')->delete();

    Comment::create(array(
      'author' => 'Dave Rivera',
      'text' => 'First comment!.'
    ));
    
    Comment::create(array(
      'author' => 'Chris Sevilleja',
      'text' => 'Look I am a test comment.'
    ));

    Comment::create(array(
      'author' => 'Nick Cerminara',
      'text' => 'This is going to be super crazy.'
    ));    

    Comment::create(array(
      'author' => 'Holli Lloyd',
      'text' => 'I am a Mmaster of Laravel and Angular.'
    ));

  }

}
