<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
    public function index($slug_or_id)
    {
        $page = Page::findBySlugOrId($slug_or_id);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}