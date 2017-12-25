<?php
foreach ($data as $article) {
    $link = [
        'controller' => 'Articles',
        'action' => 'show/' . $article->id
    ];
    $content = h($article->content);
    $body = $this->Text->truncate($content, 200, [
        'ending' => '...',
        'exact'  => true,
        'html'   => true,
    ]);

    echo $this->Rss->item([], [
        'title' => $article->title,
        'link' => $link,
        'guid' => [
            'url' => $link,
            'isPermaLink' => 'true'
        ],
        'description' => $body,
        'pubDate' => null
    ]);
}
