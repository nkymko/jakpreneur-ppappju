<div class="container">
      <!-- <div class="section-navbar">
        <nav class="nav-navbar">
          <ul class="nav-branding">
            <li><a href="#">CALTARA</a></li>
          </ul>
          <ul class="nav-menu">
            <li><a href="homePage.html">Beranda</a></li>
            <li>
              <a href="">Kategori</a>
              <ul>
                <li><a href="rumahPage.html">Ragam Adat</a></li>
                <li><a href="tariPage.html">Seni Pertunjukan</a></li>
                <li><a href="kulinerPage.html">Kuliner</a></li>
              </ul>
            </li>
            <li><a href="pameranPage.html">Pameran</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </nav>
      </div> -->

      <!-- content -->
      <div class="section-detail">
        <a href="../">
          <img class="back" src="<?= BASEURL; ?>/img/icon-back.png" alt="" />
        </a>
        <div class="wrapper-detail">
          <div class="left">
            <a target="_blank" href="<?= BASEURL; ?>/img/<?= $data['produk']['gambar_produk'] ?>"><img src="<?= BASEURL; ?>/img/<?= $data['produk']['gambar_produk'] ?>" alt="" /></a>
          </div>
          <div class="right">
            <div class="top">
              <div class="title">
                <h1><?= $data['produk']['nama_produk']; ?></h1>
                <p>By: <?= $data['produk']['nama_usaha']; ?></p>
              </div>
              <div class="harga">
                <h2>IDR <?= $data['detail_produk']['price_range'] ?></h2>
              </div>
            </div>
            <div class="desc">
              <p>
                <?= $data['detail_produk']['desc_product'] ?> <br/> <br/> 
                Penjual : <?= $data['penjual']['nama_pedagang'] ?><br/>
                Whatsapp: <a href='https://wa.me/<?= $data['penjual']['kontak'] ?>' target="_blank">wa.me/<?= $data['penjual']['kontak'] ?></a><br />
                Ig : <?= $data['penjual']['insta'] ?><br/> Fb : <?= $data['penjual']['facebook'] ?>
              </p>
            </div>
            <div class="respon">
              <!-- <div class="rating">
                <p>Beri Rating</p>
                <div class="stars">
                  <input type="radio" id="five" name="rate" value="5" >
                  <label for="five"></label>
                  <input type="radio" id="four" name="rate" value="4" >
                  <label for="four"></label>
                  <input type="radio" id = "three" name="rate" value="3" >
                  <label for="three"></label>
                  <input type="radio" id="two" name="rate" value="2" >
                  <label for="two"></label>
                  <input type="radio" id="one" name="rate" value="1" >
                  <label for="one"></label>
                </div>
              </div> -->

              <div class="beli">
                <button formtarget="_blank" onclick="window.open('https://wa.me/<?= $data['penjual']['kontak'] ?>')">Beli</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-comment">
        <div class="wrapper-comment">
          <!-- <div class="avg-rating">
            <h3>Rating</h3>
            <h5>4.8/<span class="total-rating">5</span></h5>
          </div> -->
          <div class="comment">
            <h3>Komentar</h3>
            <div class="comment-user">
              <form action="<?= BASEURL; ?>/home/comment" method="post">
              <div class="username">
                <img src="<?= BASEURL; ?>/img/default.png" alt="" />
                  <input type="hidden" name="id_product" value="<?= $data["produk"]["id_product"]; ?>">
                  <input type="text" name="nama_guest" placeholder="nama" required autocomplete="off">
                </div>
                <div class="input" id="form">
                  <textarea placeholder="beri komentar" name="comment" id="usermsg" required></textarea>
                  <button type="submit" >Kirim</button>
                </div>
              </form>
            </div>
            
            <div class="wrapper-comment-public">
            <?php foreach ( $data['komentar'] as $komentar ) : ?>
            <div class="comment-public">
              <div class="top">
                <div class="profil">
                  <img src="<?= BASEURL; ?>/img/default.png" alt="" />
                  <h5 class="username"><?= $komentar['nama_guest'] ?></h5>
                </div>
                <div id="simbol-like" class="like" onclick="like()">
                  <!-- <img class="icons-like" id="icon-like" onclick="changeIcon(event)" src="../img/love-none.png" alt="" /> -->
                </div>
              </div>
              <div class="comment-value">
                <p>
                  <?= $komentar['comment'] ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
            

            <!-- end -->
        </div>
      </div>
      
    </div>
    <!-- <footer>
      <div class="wrapper-footer">
        <p>Copyright © 2022 Caltara - All Rights Reserved.</p>
      </div>
    </footer> -->

    <!-- script -->
    <script>
      //like
      function like(){
        const like = document.getElementsByClassName("like");
        
        for (let l of like){
          l.addEventListener('click', (event) => {
            l.classList.toggle("active");
          });
        };
        
      }
    </script>
  </body>
</html>