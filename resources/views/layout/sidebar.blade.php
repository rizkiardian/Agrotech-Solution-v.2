<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="/dashboard-user" class="app-brand-link">
      <img class="card-img" src="../assets/img/icons/brands/logo.png" alt="Card image cap" />

      <span class="app-brand-text demo menu-text fw-bolder ms-2">
        Agro Tech
      </span>
    </a>

    <a href="/dashboard-user" class="layout-menu-toggle menu-link text-large d-block d-xl-none ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('dashboard-user') ? 'active' : '' }}">
      <a href="/dashboard-user" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Layouts -->

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Fitur</span>
    </li>
    <li class="menu-item {{ str_contains(request()->url(), 'tanaman') ? 'active' : '' }}">
      <a href="/tanaman" class="menu-link">
        <i class="menu-icon tf-icons bx bx-leaf"></i>
        <div data-i18n="Analytics">Tips Budidya</div>
      </a>
    </li>
    <li class="menu-item {{ str_contains(request()->url(), 'perhitungan') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
        <div data-i18n="Account Settings">Perencanaan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ str_contains(request()->url(), 'perhitungan-pupuk') ? 'active' : '' }}">
          <a href="/perhitungan-pupuk" class="menu-link active">
            <div data-i18n="Account">Perhitungan pupuk</div>
          </a>
        </li>
        <li class="menu-item {{ str_contains(request()->url(), 'perhitungan-air') ? 'active' : '' }}">
          <a href="/perhitungan-air" class="menu-link">
            <div data-i18n="Notifications">Perhitungan Kebutuhan Air</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item {{ str_contains(request()->url(), 'deteksi-hama') ? 'active' : '' }}">
      <a href="/deteksi-hama" class="menu-link">
        <i class="menu-icon tf-icons bx bx-bug-alt"></i>
        <div data-i18n="Analytics">Deteksi Hama</div>
      </a>
    </li>
    <li class="menu-item {{ str_contains(request()->url(), 'chatbot') ? 'active' : '' }}">
      <a href="/chatbot" class="menu-link">
        <i class="menu-icon tf-icons bx bx-atom"></i>
        <div data-i18n="Analytics">Tani AI</div>
      </a>
    </li>
  </ul>
</aside>
<script>
  // Ambil semua menu item yang dapat diklik
  const menuItems = document.querySelectorAll(".menu-item");

  // Tambahkan event listener untuk setiap menu item
  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      // Hapus kelas 'active' dari semua menu item
      menuItems.forEach((item) => {
        item.classList.remove("active");
      });

      // Tambahkan kelas 'active' pada menu item yang diklik
      item.classList.add("active");
    });
  });
</script>
