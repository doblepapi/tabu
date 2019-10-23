<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Post extends Model implements Searchable
{
    public function getSearchResult():SearchResult
    {
        $url = route('searchResult', $this->id);
        return new SearchResult(
            $this,
            $this->body,
            $url
        );
    }
}
