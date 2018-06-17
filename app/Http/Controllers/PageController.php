<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug_or_id)
    {
        $page = Page::findBySlugOrId($slug_or_id);

        if (!$page)
        {
            abort(404, 'Пожалуйста, вернитесь на <a href="'.url('').'">домашнюю страницу</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}