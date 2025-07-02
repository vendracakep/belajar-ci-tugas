<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="/">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li><!-- End Home Nav -->

    <li class="nav-item">
      <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="keranjang">
        <i class="bi bi-cart-check"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->

    <?php if (session()->get('role') == 'admin') : ?>
      <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="produk">
          <i class="bi bi-receipt"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Produk Nav -->

      <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'productcategory') ? '' : 'collapsed' ?>" href="productcategory">
          <i class="bi bi-tags"></i>
          <span>Kategori Produk</span>
        </a>
      </li><!-- End Kategori Produk Nav -->

      <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'diskon') ? '' : 'collapsed' ?>" href="diskon">
          <i class="bi bi-percent"></i>
          <span>Diskon</span>
        </a>
      </li><!-- End Diskon Nav -->

      <li class="nav-item">
        <a class="nav-link <?= (uri_string() == 'pembelian') ? '' : 'collapsed' ?>" href="pembelian">
          <i class="bi bi-bag-check"></i>
          <span>Pembelian</span>
        </a>
      </li><!-- End Pembelian Nav -->
    <?php endif; ?>

    <li class="nav-item">
      <a class="nav-link <?= (uri_string() == 'profile') ? '' : 'collapsed' ?>" href="profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Nav -->

    <li class="nav-item">
      <a class="nav-link <?= (uri_string() == 'faq') ? '' : 'collapsed' ?>" href="faq">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End Faq Nav -->

    <li class="nav-item">
      <a class="nav-link <?= (uri_string() == 'contact') ? '' : 'collapsed' ?>" href="contact">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Nav -->

  </ul>

</aside><!-- End Sidebar -->