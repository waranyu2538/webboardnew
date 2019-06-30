<?php
use App\Comment;
use App\Topic;
use App\User;
use Illuminate\Database\Seeder;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::first();
        $firstTopic = Topic::first();
        $comment = new Comment();
        $comment->body = 'This is the first comment.';
        $comment->topic()->associate($firstTopic);
        $comment->user()->associate($adminUser);
        $comment->save();
    }
}