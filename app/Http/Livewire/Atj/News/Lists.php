<?php

namespace App\Http\Livewire\Atj\News;

use Livewire\Component;
use App\Models\Atj\News;

class Lists extends Component
{
    protected $listeners = ['deleteNews'];
    public function render()
    {
        $allNews = News::all();
        return view('livewire.atj.news.lists', ['allNews' => $allNews]);
    }

    public function deleteNews($newsId)
    {
        News::find($newsId)->delete();
    }
}
