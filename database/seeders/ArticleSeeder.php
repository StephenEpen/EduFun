<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{


    public function run()
    {
        $intMul = Writer::where('specialize', 'Interactive Multimedia')->pluck('id')->toArray();
        $softEng = Writer::where('specialize', 'Software Engineering')->pluck('id')->toArray();

        Article::factory()->create([
            'title' => 'Human and Computer Interaction',
            'description' => 'Human-Computer Interaction (HCI) adalah bidang studi yang berfokus pada cara manusia berinteraksi dengan komputer dan perangkat digital lainnya. Tujuan utama HCI adalah menciptakan sistem yang tidak hanya fungsional tetapi juga mudah digunakan, sehingga pengalaman pengguna menjadi lebih baik dan lebih menyenangkan. HCI merupakan bidang multidisiplin yang memadukan ilmu komputer, psikologi kognitif, desain, ergonomi, dan berbagai disiplin lainnya untuk memahami serta meningkatkan interaksi antara manusia dan teknologi. 
            
            Dalam HCI, pendekatan yang berpusat pada pengguna sangat ditekankan. Ini berarti desain sistem harus mempertimbangkan kebutuhan, perilaku, dan keterbatasan pengguna. Untuk mencapai hal ini, proses desain yang iteratif sangat penting, di mana prototipe dibuat dan diuji berulang kali dengan melibatkan pengguna nyata untuk mendapatkan masukan di setiap tahap.',
            'img' => '/img/hci.png',
            'writer_id' => $intMul[array_rand($intMul, 1)],
            'category_id' => 1
        ]);
        Article::factory()->create([
            'title' => 'User Experience',
            'description' => 'User Experience (UX) adalah bidang yang berkaitan dengan keseluruhan pengalaman dan kepuasan yang dirasakan oleh pengguna saat mereka berinteraksi dengan suatu produk, sistem, atau layanan digital. Dalam konteks teknologi, UX menitikberatkan pada pemahaman mendalam tentang kebutuhan, keinginan, keterbatasan, dan perilaku pengguna, serta berusaha untuk menciptakan interaksi yang intuitif, efisien, dan memuaskan. 
            
            UX mencakup semua aspek dari perjalanan pengguna, mulai dari kesan pertama saat melihat antarmuka hingga kemudahan navigasi dan kepuasan dalam menggunakan produk tersebut secara keseluruhan. Tujuan utama UX adalah membuat pengguna merasa nyaman, terpenuhi, dan bahkan senang ketika menggunakan produk atau layanan, yang pada gilirannya meningkatkan loyalitas pengguna dan reputasi perusahaan.',
            'img' => '/img/ux.png',
            'writer_id' => $intMul[array_rand($intMul, 1)],
            'category_id' => 1
        ]);
        Article::factory()->create([
            'title' => 'Digital Immersive Technology',
            'description' => 'Digital Immersive Technology adalah istilah yang digunakan untuk menggambarkan teknologi yang menciptakan pengalaman yang sangat nyata atau seakan-akan membawa pengguna masuk ke dalam dunia digital atau virtual. Teknologi ini melibatkan penggunaan berbagai perangkat dan sistem digital untuk menghadirkan pengalaman yang mendalam, interaktif, dan seolah-olah nyata bagi penggunanya. 
            
            Teknologi immersive umumnya mencakup Virtual Reality (VR), Augmented Reality (AR), Mixed Reality (MR), dan Extended Reality (XR), serta sering digunakan dalam berbagai bidang, termasuk hiburan, pendidikan, pelatihan, perawatan kesehatan, dan pemasaran.',
            'img' => '/img/dit.jpg',
            'writer_id' => $intMul[array_rand($intMul, 1)],
            'category_id' => 1
        ]);

        Article::factory()->create([
            'title' => 'Pattern Software Design',
            'description' => 'Pattern Software Design, atau Software Design Patterns, adalah kumpulan solusi umum dan terbukti untuk masalah-masalah yang sering muncul dalam pengembangan perangkat lunak. Konsep ini berperan penting dalam pemrograman berorientasi objek dan membantu pengembang menciptakan kode yang lebih terstruktur, mudah dipelihara, dan fleksibel. 
            
            Design patterns memungkinkan pengembang untuk menggunakan pendekatan-pendekatan yang telah teruji sehingga tidak perlu membuat solusi dari nol untuk setiap masalah, melainkan dapat mengandalkan pola yang serupa dengan kasus-kasus sebelumnya.',
            'img' => '/img/psd.jpg',
            'writer_id' => $softEng[array_rand($softEng, 1)],
            'category_id' => 2
        ]);
        Article::factory()->create([
            'title' => 'Agile Software Development',
            'description' => 'Agile Software Development adalah pendekatan dalam pengembangan perangkat lunak yang menekankan fleksibilitas, kolaborasi, dan adaptasi terhadap perubahan. Pendekatan ini muncul sebagai tanggapan atas metode tradisional yang dianggap terlalu kaku, seperti Waterfall, di mana setiap fase pengembangan mengikuti alur yang linier dan sering kali sulit untuk beradaptasi ketika kebutuhan proyek berubah. 
            
            Dalam Agile, pengembangan dilakukan secara iteratif dan bertahap, dengan tujuan menghasilkan produk yang dapat diperbarui dan disempurnakan berdasarkan umpan balik yang cepat dan terus-menerus dari pengguna atau pemangku kepentingan.',
            'img' => '/img/asd.jpg',
            'writer_id' => $softEng[array_rand($softEng, 1)],
            'category_id' => 2
        ]);
        Article::factory()->create([
            'title' => 'Code Reengineering',
            'description' => 'Code Reengineering adalah proses menganalisis, memperbaiki, dan meningkatkan kode yang sudah ada untuk meningkatkan kualitas, kinerja, atau kemudahan pemeliharaan tanpa mengubah fungsionalitas dasarnya. Tujuan utama dari code reengineering adalah memperbarui dan mengoptimalkan sistem lama (legacy systems) agar lebih efisien dan relevan dalam lingkungan teknologi modern. Ini berbeda dari sekadar refactoring, yang lebih berfokus pada pengorganisasian kode agar lebih mudah dipahami; code reengineering cenderung mencakup perubahan lebih mendalam pada struktur dan arsitektur perangkat lunak.',
            'img' => '/img/cr.jpg',
            'writer_id' => $softEng[array_rand($softEng, 1)],
            'category_id' => 2
        ]);
    }
}
