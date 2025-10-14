<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Petshop — Solusi Hewan Peliharaan Anda</title>
  <meta name="description" content="Toko perlengkapan hewan online dengan koleksi terbaru, pengiriman cepat, dan garansi kualitas." />
  <head>
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="css/style.css"> 

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="antialiased text-gray-800 bg-white">

  <?php include '_navbar.html'; ?>

  <section class="hero-bg">
    <div class="container mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <div>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Lengkapi kebutuhan hewan kesayangan Anda</h1>
        <p class="mt-4 text-gray-600 max-w-xl">Perlengkapan hewan modern, bahan berkualitas, dan layanan pengiriman cepat. Mulai belanja sekarang untuk si kesayangan Anda.</p>
        <div class="mt-8 flex gap-4">
          <a href="#produk" class="px-6 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow">Lihat Koleksi</a>
          <a href="kontak.html" class="px-6 py-3 border border-indigo-600 text-indigo-600 rounded-lg font-medium">Hubungi Kami</a>
        </div>
        <ul class="mt-8 grid grid-cols-2 gap-4 text-sm text-gray-600">
          <li>✔️ Pengiriman 2-3 hari</li>
          <li>✔️ Garansi retur 7 hari</li>
          <li>✔️ Pembayaran aman</li>
          <li>✔️ Diskon untuk member</li>
        </ul>
      </div>
      <div class="relative">
        <div class="rounded-2xl overflow-hidden shadow-xl">
          <img src="img/Gemini_Generated_Image_j89f3dj89f3dj89f.png" alt="Produk unggulan" class="w-full h-50 object-cover">
        </div>
        <div class="absolute -top-4 -right-4 bg-white p-3 rounded-lg shadow-md w-44">
          <p class="text-xs text-gray-500">Promo hari ini</p>
          <p class="font-semibold">Diskon hingga 90% untuk item terpilih</p>
        </div>
      </div>
    </div>
  </section>

  <section id="fitur" class="container mx-auto px-6 py-12">
    <h2 class="text-2xl font-bold" data-aos="fade-up">Kenapa pilih kami ?</h2>
    <div class="mt-6 grid gap-6 grid-cols-1 md:grid-cols-3">
      <div class="p-6 border rounded-xl" data-aos="fade-up" data-aos-delay="100">
        <h3 class="font-semibold">Kualitas Terjamin</h3>
        <p class="mt-2 text-sm text-gray-600">Setiap produk diperiksa kualitasnya sebelum dikirim dan bisa di kembalikan lagi.</p>
      </div>
      <div class="p-6 border rounded-xl" data-aos="fade-up" data-aos-delay="200">
        <h3 class="font-semibold">Layanan Pelanggan 24/7 kalo gak ada berarti sedang tidur</h3>
        <p class="mt-2 text-sm text-gray-600">Bantuan cepat lewat chat dan telepon.</p>
      </div>
      <div class="p-6 border rounded-xl" data-aos="fade-up" data-aos-delay="300">
        <h3 class="font-semibold">Pengembalian Mudah tinggal lempar saja</h3>
        <p class="mt-2 text-sm text-gray-600">Retur mudah dalam 7 hari tanpa ribet kalau keburu.</p>
      </div>
    </div>
  </section>
  
  <?php include '_produk.php'; ?>

  <section id="testi" class="container mx-auto px-6 py-12">
    <h2 class="text-2xl font-bold" data-aos="fade-up">Apa kata pelanggan</h2>
    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
      <blockquote class="p-6 bg-white border rounded-xl" data-aos="fade-right">
        <p class="text-gray-700">"Produk sesuai gambar dan sampai cepat. Kualitas bagus!"</p>
        <footer class="mt-4 text-sm text-gray-500">— adeknya adit, majalengka</footer>
      </blockquote>
      <blockquote class="p-6 bg-white border rounded-xl" data-aos="fade-up">
        <p class="text-gray-700">"Customer service ramah dan cepat."</p>
        <footer class="mt-4 text-sm text-gray-500">— tetangganya adit, majalengka</footer>
      </blockquote>
      <blockquote class="p-6 bg-white border rounded-xl" data-aos="fade-left">
        <p class="text-gray-700">"Harga terjangkau, sering dapat diskon besar jika beruntung."</p>
        <footer class="mt-4 text-sm text-gray-500">— kakeknya adit, majalengka</footer>
      </blockquote>
    </div>
  </section>

  <section class="bg-indigo-600 text-white py-12">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
      <div>
        <h3 class="text-2xl font-bold">Siap mulai berbelanja?</h3>
        <p class="mt-2 text-sm">Daftar sekarang dan dapatkan kupon diskon 10% untuk pembelian pertama pembelian keduakalinya tidak mendapatkan diskon.</p>
      </div>
      <div class="mt-6 md:mt-0">
        <a href="#" class="px-6 py-3 bg-white text-indigo-600 rounded-lg font-medium">Daftar Sekarang</a>
      </div>
    </div>
  </section>

  <?php include '_footer.html'; ?>
  
  <div id="purchaseModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden z-50">
    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md p-6">
      <button id="closeModalBtn" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-3xl">&times;</button>
      <h2 class="text-2xl font-bold mb-4">Formulir Pembelian</h2>
      <form id="purchaseForm">
        <input type="hidden" id="productNameInput" name="productName" />
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required />
        </div>
        <div class="mb-4">
          <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
          <input type="tel" id="whatsapp" name="whatsapp" placeholder="Contoh: 081234567890" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required />
        </div>
        <div class="mb-4">
          <label for="address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
          <textarea id="address" name="address" rows="3" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
        </div>
        <div class="mb-4">
          <label for="payment" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
          <select id="payment" name="payment" class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            <option value="">Pilih Metode</option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="COD (Bayar di Tempat)">COD (Bayar di Tempat)</option>
            <option value="E-Wallet (OVO/GoPay/Dana)">E-Wallet (OVO/GoPay/Dana)</option>
          </select>
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors">Selesai</button>
      </form>
    </div>
  </div>

  <script src="js/index.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,      // Animasi hanya berjalan sekali
      duration: 800,   // Durasi animasi 0.8 detik
      offset: 50,      // Animasi muncul sedikit lebih awal (50px) sebelum elemen terlihat
    });
  </script>

</body>
</html>