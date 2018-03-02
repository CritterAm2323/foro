<?php 
Class CreatePostsTest extends FeatureTestCase
{
    
    function test_user_creates_a_post()
    {
        $title = 'Esta es una pregunta'; 
        $content = 'Este es el contenido';
        $this->actingAs($user = $this->defaultUser())
        ->visit(route('posts.create'))
        ->type($title, 'title')
        ->type($content, 'content')
        ->press("Publicar");
        $this->seeInDatabase("posts", [
            'title'=>$title, 
            'content' => 'Este es el contenido',
            'pending'=>true,
            'user_id'=>$user->id,
        ]);
        $this->see('h1', $title);
    }
}