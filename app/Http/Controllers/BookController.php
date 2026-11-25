<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private const BOOKS = [
        'he-never-said-a-word' => [
            'title' => 'He Never Said a Word',
            'subtitle' => 'What Men Go Through But Rarely Say Out Loud',
            'status' => 'Out now',
            'image' => 'uploads/heNeverSaidaWord.jpeg',
            'description' => 'He Never Said a Word by SJ Treven is literary nonfiction about men’s emotional lives, masculinity, loneliness, grief, fatherhood, and the courage to speak up.',
            'intro' => 'He Never Said a Word is a literary nonfiction exploration of the silent emotional lives of men who are praised for their strength while quietly unraveling inside.',
            'sections' => [
                'Through intimate, scene-driven vignettes, the book follows a composite man through work, love, fatherhood, loss, and responsibility while he struggles to voice what hurts.',
                'The book examines how silence is learned and reinforced, and how humor, endurance, and productivity can conceal loneliness, fear, grief, and doubt. What looks like stability from the outside can become isolation within.',
                'Rather than offering easy solutions, SJ Treven’s book bears witness to the moments when silence nearly destroys and to the quiet moments when it begins to break. It reframes strength as the courage to speak, be seen, and let someone else carry part of the weight.',
            ],
            'genres' => ['Literary nonfiction', 'Men’s mental health', 'Masculinity'],
        ],
        'the-legend-of-ndike' => [
            'title' => 'The Legend of Ndike',
            'subtitle' => 'A middle-grade fantasy about voice, justice, and truth',
            'status' => 'Out now',
            'image' => 'uploads/theLegendofNdike.jpeg',
            'description' => 'The Legend of Ndike by SJ Treven is a middle-grade fantasy about a girl who challenges unfair traditions at an ancient school and discovers the power of her voice.',
            'intro' => 'The Legend of Ndike is a middle-grade fantasy about a girl whose questions challenge an ancient school’s unfair traditions—and awaken a power that reveals the truth.',
            'sections' => [
                'At St. Magnus Academy, tradition and discipline shape a world where boys are trained to lead and girls are expected to stay quiet. When twelve-year-old Ndike arrives, she notices the imbalance and refuses to accept it as normal.',
                'As the school prepares for its Festival of Masks, strange events begin to follow Ndike: words appear in her notebook, lights flicker when she is humiliated, and objects respond when she speaks the truth. With her friend Amara, she searches for evidence of a girl erased from the school’s history.',
                'When Ndike refuses to apologize for speaking out, she is put on trial before the school. Her story is an adventure about courage, voice, justice, and the power of truth for young readers.',
            ],
            'genres' => ['Middle-grade fantasy', 'Children’s fiction', 'Coming-of-age fiction'],
        ],
        'the-human-reset' => [
            'title' => 'The Human Reset',
            'subtitle' => null,
            'status' => 'Coming soon',
            'image' => 'uploads/humanReset.jpeg',
            'description' => 'The Human Reset by SJ Treven examines burnout, overwork, productivity, rest, and the belief that human worth depends on achievement.',
            'intro' => 'The Human Reset is a book about a world that has confused exhaustion with success and productivity with human worth.',
            'sections' => [
                'SJ Treven reframes burnout as more than an individual problem, exploring how systems that reward overwork and treat rest as weakness can leave people exhausted.',
                'The book looks at how constant busyness and achievement can become tied to identity, while sleep, creativity, relationships, and a sense of meaning suffer.',
                'The Human Reset points toward a more humane definition of success—one that makes room for rest, health, presence, and meaning. This book is currently listed as coming soon.',
            ],
            'genres' => ['Burnout', 'Well-being', 'Personal growth'],
        ],
        'connected-but-lonely' => [
            'title' => 'Connected but Lonely',
            'subtitle' => 'Why You Feel Alone and How to Truly Belong',
            'status' => 'Coming soon',
            'image' => 'uploads/connectedButLonely.jpeg',
            'description' => 'Connected but Lonely: Why You Feel Alone and How to Truly Belong by SJ Treven explores loneliness, digital connection, authenticity, and belonging.',
            'intro' => 'Connected but Lonely: Why You Feel Alone and How to Truly Belong explores loneliness in a world where people are always online and reachable, yet often feel unseen.',
            'sections' => [
                'The book considers why online contact and surface-level interactions can leave people feeling emptier, and why belonging cannot be built on likes and messages alone.',
                'SJ Treven examines how technology, social expectations, comparison, trauma, and unspoken emotional needs can affect our sense of self and connection with others.',
                'Rather than treating loneliness as a personal failure, Connected but Lonely presents it as a human signal and explores authenticity, vulnerability, and meaningful relationships. This book is currently listed as coming soon.',
            ],
            'genres' => ['Loneliness', 'Relationships', 'Personal growth'],
        ],
    ];

    public function show(string $slug)
    {
        abort_unless(isset(self::BOOKS[$slug]), 404);

        $book = self::BOOKS[$slug];
        $book['url'] = 'https://www.sjtreven.com/books/'.$slug;
        $book['image_url'] = 'https://www.sjtreven.com/'.ltrim($book['image'], '/');
        $book['schema'] = [
            '@context' => 'https://schema.org',
            '@type' => 'Book',
            'name' => $book['title'],
            'author' => [
                '@type' => 'Person',
                'name' => 'SJ Treven',
                'url' => 'https://www.sjtreven.com/about',
            ],
            'description' => $book['description'],
            'image' => $book['image_url'],
            'url' => $book['url'],
            'inLanguage' => 'en',
            'genre' => $book['genres'],
            'isPartOf' => [
                '@type' => 'CollectionPage',
                'name' => 'Books by SJ Treven',
                'url' => 'https://www.sjtreven.com/books',
            ],
        ];

        return view('books.show', compact('book'));
    }
}
