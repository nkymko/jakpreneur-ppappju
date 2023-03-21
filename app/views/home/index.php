      <!-- carousel -->
      <div class="section-container">
        <div class="mySlides fade">
          <img src="<?= BASEURL; ?>/img/Frame 76.png" style="width: 100%" />
        </div>

        <div class="mySlides fade">
          <img src="<?= BASEURL; ?>/img/Frame 77.png" style="width: 100%" />
        </div>

        <div class="mySlides fade">
          <img src="<?= BASEURL; ?>/img/Frame 78.png" style="width: 100%" />
        </div>


        <div class="wrapper-dot" style="text-align: center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>

      <!-- gallery -->
      <div class="section-gallery">
        <div class="wrapper-gallery">
          <h1>Senyum UMKM Bahagia Kita Semua</h1>

          <div class="addFitur">
            
          <div class="container-search">
            <form action="<?= BASEURL; ?>/home/search" method="post" class="search-bar">
              <input type="text" name="keyword" id="keyword" placeholder="cari produk.."  autocomplete="off" />
              <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
          </div>

          <div class="filterform">
          <div class="filter" style="width: 200px">
            <select name='lokasi' id='filter'>
              <option value="">Lokasi</option>
              <option value="penjaringan">Kecamatan Penjaringan</option>
              <option value="pademangan">Kecamatan Pademangan</option>
              <option value="tanjung priok">Kecamatan Tanjung Priok</option>
              <option value="koja">Kecamatan Koja</option>
              <option value="cilincing">Kecamatan Cilincing</option>
            </select>
          </div>
          <div class="filter" style="width: 200px">
            <select name='filter' id='filter'>
              <option value="">Kategori</option>
              <option value="Makanan">Makanan</option>
              <option value="Minuman">Minuman</option>
              <option value="Kerajinan Tangan">Kerajinan Tangan</option>
              <option value="Fashion">Fashion</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          </div>
          </form>
        </div>

          <div class="wrapper-card">
            <?php foreach ( $data['produk'] as $produk ) : ?>
            <div class="card">
              <div class="image">
                <img src="<?= BASEURL; ?>/img/<?= $produk['gambar_produk']; ?>" alt="" />
              </div>
              <div class="desc">
                <div class="content">
                  <h3><?= $produk['nama_produk'] ?></h3>
                  <p><?= $produk['preview'] ?></p>
                </div>
                <div class="more-card">
                  <h6 class="status"><?= $produk['price_range'] ?></h6>
                  <button><a href='<?= BASEURL; ?>/home/detail/<?= $produk['id_product'];?>' style='text-decoration:none;'>selengkapnya</a></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          
          </div>
        </div>
      </div>