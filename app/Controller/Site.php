<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Workers;




class Site
{
    public function index(): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => '']);
    }
    public function workers(): string
    {
        $workers = Workers::all();
    return new View('site.workers',['workers' => $workers]);
    }
    public function divisions(): string
    {
        return new View('site.divisions', ['message' => '']);
    }
    public function room(): string
    {
        return new View('site.room', ['message' => '']);
    }

    public function chairs(): string
    {
        return new View('site.chairs', ['message' => '']);
    }
    public function chairs_mat(): string
    {
        return new View('site.chairs_mat', ['message' => '']);
    }
    public function chairs_tex(): string
    {
        return new View('site.chairs_tex', ['message' => '']);
    }

//    public function add_workers(): string
//    {
//     return new View('site.add_workers', ['message' => 'TEXT']);
//    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_workers(Request $request): string
    {
        if ($request->method === 'POST' && Workers::create($request->all())) {
            app()->route->redirect('/workers');
        }
        return new View('site.add_workers');
    }

}
