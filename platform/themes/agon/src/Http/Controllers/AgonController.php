<?php

namespace Theme\Agon\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Theme\Facades\Theme;
use Illuminate\Http\Request;

class AgonController extends BaseController
{
    public function getSearch(Request $request, PostInterface $postRepository, BaseHttpResponse $response)
    {
        $request->validate([
            'q' => ['nullable', 'string', 'max:120'],
        ]);

        if (! empty($query = $request->input('q'))) {
            $posts = $postRepository->getSearch($query);

            if ($posts->isNotEmpty()) {
                return $response
                    ->setData(Theme::partial('search-results', compact('posts')));
            }
        }

        return $response
            ->setError()
            ->setMessage(__('No results found, please try with different keywords.'));
    }
}