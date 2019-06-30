<?php
use App\Topic;
use App\User;
use Illuminate\Database\Seeder;
class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::first();
        $topic = new Topic();
        $topic->title = 'Just another Laravel webboard';
        $topic->body = 'This is a topic body';
        $topic->user()->associate($adminUser);
        $topic->save();
    }
}