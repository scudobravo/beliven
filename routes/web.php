<?php

use Statamic\Facades\Entry;
use Statamic\View\View as StatamicView;

Route::get('/test-beliven', function () {
    $entry = Entry::query()
        ->where('collection', 'pages')
        ->where('slug', 'test-beliven')
        ->first();

    if (!$entry) {
        abort(404, 'Entry not found.');
    }

    // dd($entry); 

    return (new \Statamic\View\View)
        ->template('default')
        ->with(['entry' => $entry]);
});
