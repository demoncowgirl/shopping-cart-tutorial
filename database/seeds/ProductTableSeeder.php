<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
        'imagePath' => 'src/images/hp1.jpg',
        'title' => 'enim nisl',
        'description' => 'est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliqu',
        'price' => 12.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp2.jpeg',
        'title' => 'natoque penatibus',
        'description' => 'diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras ',
        'price' => 9.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp3.jpeg',
        'title' => 'Phasellus at',
        'description' => 'felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui.',
        'price' => 10.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp4.jpeg',
        'title' => 'vel, venenatis',
        'description' => 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, ',
        'price' => 11.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp5.jpeg',
        'title' => 'Integer vitae',
        'description' => 'a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus',
        'price' => 12.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp6.jpeg',
        'title' => 'Integer urna',
        'description' => 'eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper',
        'price' => 14.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp7.jpeg',
        'title' => 'mollis. Phasellus',
        'description' => 'risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesq',
        'price' => 8.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp8.jpeg',
        'title' => 'eu nulla',
        'description' => 'felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan',
        'price' => 11.99
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'src/images/hp9.jpeg',
        'title' => 'taciti sociosqu',
        'description' => 'dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet,',
        'price' => 15.99
      ]);
      $product->save();

    }
}
