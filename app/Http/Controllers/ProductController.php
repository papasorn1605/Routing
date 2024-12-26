<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;


class ProductController extends Controller
{
    private $products = [
        [
            'id'          => 1,
            'name'        => 'The Great Gatsby',
            'description' => 'A classic novel by F. Scott Fitzgerald',
            'price'       => 15.99,
            'image'    => 'https://m.media-amazon.com/images/I/71V1cA2fiZL._AC_UF1000,1000_QL80_.jpg'
        ],
        [
            'id'          => 2,
            'name'        => '1984',
            'description' => 'Dystopian novel by George Orwell',
            'price'       => 12.99,
            'image'    => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781839644740/george-orwell-visions-of-dystopia-9781839644740_hr.jpg'
        ],
        [
            'id'          => 3,
            'name'        => 'To Kill a Mockingbird',
            'description' => 'A novel by Harper Lee about racial injustice',
            'price'       => 10.99,
            'image'    => 'https://cdn2.penguin.com.au/covers/original/9781784752637.jpg'
        ],
        [
            'id'          => 4,
            'name'        => 'Moby-Dick',
            'description' => 'A novel by Herman Melville about obsession and revenge',
            'price'       => 14.50,
            'image'    => 'https://cdn.prod.website-files.com/64a91aff0460ecc653fe8cb9/66334ffc60affe8f9f6ed2a3_cover%2005.jpg'
        ],
        [
            'id'          => 5,
            'name'        => 'Pride and Prejudice',
            'description' => 'A classic romantic novel by Jane Austen',
            'price'       => 9.99,
            'image'    => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781471134746/pride-and-prejudice-9781471134746_hr.jpg'
        ],
        [
            'id'          => 6,
            'name'        => 'The Catcher in the Rye',
            'description' => 'A novel by J.D. Salinger about teenage angst',
            'price'       => 13.50,
            'image'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg/640px-The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg'
        ],
        [
            'id'          => 7,
            'name'        => 'Brave New World',
            'description' => 'A dystopian novel by Aldous Huxley',
            'price'       => 11.99,
            'image'    => 'https://www.thoughtco.com/thmb/TYlIhKW_QXhUgMdZgPXRvz8n8Bk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/BraveNewWorldCover-5882eb55340045e78a7c6c58283339b1.jpg'
        ],
        [
            'id'          => 8,
            'name'        => 'The Hobbit',
            'description' => 'A fantasy novel by J.R.R. Tolkien',
            'price'       => 18.00,
            'image'    => 'https://m.media-amazon.com/images/I/712cDO7d73L._AC_UF894,1000_QL80_.jpg'
        ],
        [
            'id'          => 9,
            'name'        => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'The first book in the Harry Potter series by J.K. Rowling',
            'price'       => 20.00,
            'image'    => 'https://bci.kinokuniya.com/th/jsp/images/book-img/97814/97814088/9781408855652.JPG'
        ],
        [
            'id'          => 10,
            'name'        => 'The Alchemist',
            'description' => 'A philosophical novel by Paulo Coelho',
            'price'       => 16.99,
            'image'    => 'https://m.media-amazon.com/images/I/71zHDXu1TaL._AC_UF1000,1000_QL80_.jpg'
        ]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
