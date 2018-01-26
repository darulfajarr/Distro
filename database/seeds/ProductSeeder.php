<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Home;
use App\About;
use App\Lainnya;
use App\Store;
use App\Jamker;
use App\kategori;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
$kategori = kategori::create([
            'nama_kategori' => 'Celana']);

$kategori = kategori::create([
            'nama_kategori' => 'Tas']);

$kategori = kategori::create([
            'nama_kategori' => 'Baju']);

$kategori = kategori::create([
            'nama_kategori' => 'Topi']);

$kategori = kategori::create([
            'nama_kategori' => 'Jaket']);






            $Product1 = Product::create([
            'kategori_id' => '3',
            'nama_product' =>'Montain T-shirt ',
            'bahan'=>' Kanvas',
            'ukuran'=>' L',
            'warna'=>'Putih',
            'cover'=>'c79cc8d583ccb98c52521a684f5efa6b.jpg'
            ]);

    $Product2 = Product::create([
            'kategori_id' => '3',
            'nama_product' =>'Clans Eat Sleep Clash ',
            'bahan'=>'Kanvas ',
            'ukuran'=>'L ',
            'warna'=>'Hitam',
            'cover'=>'ffb5c34bc58a36433c3420408addddf3.jpg'
            ]);


    $Product3= Product::create([
            'kategori_id' => '3',
            'nama_product' =>' Grafiry',
            'bahan'=>' Kanvas',
            'ukuran'=>' L',
            'warna'=>'Hitam',
            'cover'=>'b1064a0aa61eb6c9ee2782ff92661892.jpg'
            ]);


    $Product4 = Product::create([
            'kategori_id' => '5',
            'nama_product' =>' Denim Woman',
            'bahan'=>' Levis',
            'ukuran'=>' M',
            'warna'=>'Telor Asin',
            'cover'=>'4d7a612a46123644580c9a662eb215bf.jpg'
            ]);


    $Product5 = Product::create([
            'kategori_id' => '5',
            'nama_product' =>' Rip Curlt',
            'bahan'=>' Kanvas',
            'ukuran'=>'L ',
            'warna'=>'Coklat',
            'cover'=>'3952cf3c72f63c38882ea21b58adee8e.jpeg'
            ]);


    $Product6 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>' Marc Series',
            'bahan'=>'Kanvas ',
            'ukuran'=>'30cm - 60 cm ',
            'warna'=>'Abu',
            'cover'=>'26e6248078617f86c814b5453df2d454.jpg'
            ]);


    $Product7 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>' Waist Bag',
            'bahan'=>'Catton Kanvas ',
            'ukuran'=>'30cm - 60 cm ',
            'warna'=>'Navy cream',
            'cover'=>'79f941a4c96bce6a1925b6091b543aca.jpg'
            ]);


    $Product8 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>'Achile Black ',
            'bahan'=>'Catton Kanvas ',
            'ukuran'=>' 30cm - 60 cm',
            'warna'=>'Black',
            'cover'=>'d21db0b2dfab8b22a1134b3437d3f5bb.jpg'
            ]);


    $Product9 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Bucket Drll Army ',
            'bahan'=>'Catton Kanvas ',
            'ukuran'=>'7 ',
            'warna'=>'Cream',
            'cover'=>'45e0cf40f3a234e8eb73202be89b9faf.png'
            ]);


    $Product10 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Snap Back Pink ',
            'bahan'=>' Catton Kanvas',
            'ukuran'=>'7 ',
            'warna'=>'Pink',
            'cover'=>'7d416217cd52ef467530a6a4c947eddc.jpg'
            ]);


    $Product11 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Snap Back Cream Black ',
            'bahan'=>'Kanvas ',
            'ukuran'=>' 7',
            'warna'=>'Black',
            'cover'=>'28b14604af9e9a5b45b6665de09c44a7.jpg'
            ]);




    $Product12 = Product::create([
            'kategori_id' => '1',
            'nama_product' =>'Casual',
            'bahan'=>'Catton Kanvas ',
            'ukuran'=>' 41',
            'warna'=>'Black And Yellow',
            'cover'=>'530af303baed9af89588b2ca0e5d5590.jpg '
            ]);



    $Product13 = Product::create([
            'kategori_id' => '1',
            'nama_product' =>' Cutbray Woman',
            'bahan'=>'Catton Kanvas ',
            'ukuran'=>' 41',
            'warna'=>' Navy',
            'cover'=>'c79e84cc16d3457df607fc171d27dc67.jpg '
            ]);




             $Home = Home::create([
            'textkecilhd' => 'KUALITAS TERJAMIN DAN TERPERCAYA',
            'textbesarhd' =>'PANS COMPANY',
            'cover'=>'e04bb843e7df2403cf3a4220f5af50a8.png',
            'textkecilboldbd'=>'DISTRO BANDUNG',
            'textbesarbd'=>'PANSCOMPANY',
            'textkecilbd'=>'<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
								</body>
								</html>',
            'textkecilboldft'=>'DATANG DAN BUKTIKAN SENDIRI KE STORE KAMI',
            'textbesarft'=>'DISC 20% ',
            'textkecilft'=>'<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <p>Disciunt 50% Sampai Tanggal 30 Maret , Datang Jangan Sampai Terlewatkan !!</p>
                            </body>
                            </html>'
            ]);



                $About = About::create([
            'cover'=>'6de06d1dc373fafa0f0d78327b6e43c2.jpg',
            'textkecilbold' => 'About Our Distro',
            'textbesar' => 'Pans Company',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
							<p class="mb-0">We guarantee that you will fall in&nbsp;<em>lust</em>&nbsp;with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
							</body>
							</html>'
            ]);


                 $Store = Store::create([
            'textkecilatas'=>'COME ON IN',
            'textbesaratas'=>'WE RE OPEN',
            'Senin'=>'7:30 Sampai 21:00',
            'Selasa'=>'7:30 Sampai 21:00',
            'Rabu'=>'7:30 Sampai 21:00',
            'Kamis'=>'Libur',
            'Jumat'=>'7:30 Sampai 21:00',
            'Sabtu'=>'7:30 Sampai 21:00',
            'Minggu'=>'7:30 Sampai 21:00',
            'cover'=>'6de06d1dc373fafa0f0d78327b6e43c2.jpg',
            'textkecilbold' => 'Distro Bandung Berkualitras',
            'textbesar' => 'ABOUT OUR DISTRO',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
							<p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time</p>
							</body>
							</html>'
            ]);


                 $Lainnya = Lainnya::create([
            'cover'=>'6978304e8825a510b7bc0c9cdbd69627.jpg ',
            'notlp'=>'(022) 9090-9292 ',
            'line' => '@panscompany (Jangan Lupa Gunakan @)',
            'email' => 'info@panscompany.com ',
            'alamat' => 'Jalan Kenangan No.24  Bandung, Indonesia'
            ]);


    }
}
