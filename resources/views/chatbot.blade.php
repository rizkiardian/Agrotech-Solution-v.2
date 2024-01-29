<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Chat - Apps | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description"
    content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../assets/vendor/css/pages/app-chat.css" />
  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <script src="../assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
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
          <li class="menu-item {{ request()->is('tanaman') ? 'active' : '' }}">
            <a href="/tanaman" class="menu-link">
              <i class="menu-icon tf-icons bx bx-leaf"></i>
              <div data-i18n="Analytics">Tips Budidya</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('perencanaan') || request()->is('#belumaada') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
              <div data-i18n="Account Settings">Perencanaan</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ request()->is('perencanaan') ? 'active' : '' }}">
                <a href="/perencanaan" class="menu-link active">
                  <div data-i18n="Account">Perhitungan pupuk</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('#belumaada') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                  <div data-i18n="Notifications">
                    Perhitungan Kebutuhan Air
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item {{ request()->is('deteksi-hama') ? 'active' : '' }}">
            <a href="/deteksi-hama" class="menu-link">
              <i class="menu-icon tf-icons bx bx-bug-alt"></i>
              <div data-i18n="Analytics">Deteksi Hama</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('chatbot') ? 'active' : '' }}">
            <a href="/chatbot" class="menu-link">
              <i class="menu-icon tf-icons bx bx-atom"></i>
              <div data-i18n="Analytics">Petani AI</div>
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
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-xl-0 d-xl-none me-3">
            <a class="nav-item nav-link me-xl-4 px-0" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav align-items-center ms-auto flex-row">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 rounded-circle h-auto" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="me-3 flex-shrink-0">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt=""
                              class="w-px-40 rounded-circle h-auto" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../index.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h5 class="mb-4 pb-1"><b>Chat dengan AI</b></h5>
            <div class="app-chat card overflow-hidden">
              <div class="row g-0">
                <!-- Sidebar Left -->

                <!-- Chat History -->
                <div class="col app-chat-history">
                  <div class="chat-history-wrapper">
                    <div class="chat-history-header border-bottom">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center overflow-hidden">
                          <i class="bx bx-menu bx-sm d-lg-none d-block me-2 cursor-pointer" data-bs-toggle="sidebar"
                            data-overlay data-target="#app-chat-contacts"></i>
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle"
                              data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right" />
                          </div>
                          <div class="chat-contact-info flex-grow-1 ms-3">
                            <h6 class="m-0">Tanicerdas</h6>
                            <small class="user-status text-muted">
                              Kecerdasan buatan untuk pertanian
                            </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- chattingan --}}
                    <div class="chat-history-body" id="chat-container">
                      <ul class="list-unstyled chat-history mb-0" id="chat-log">
                        <li class="chat-message">
                          <div class="d-flex overflow-hidden">
                            <div class="user-avatar me-3 flex-shrink-0">
                              <div class="avatar avatar-sm">
                                <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                              </div>
                            </div>
                            <div class="chat-message-wrapper flex-grow-1">
                              <div class="chat-message-text">
                                <p class="mb-0">
                                  Ada yang bisa saya bantu untuk permasalahan
                                  pertanian anda?
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        {{--
                            <li class="chat-message chat-message-right">
                            <div class="d-flex overflow-hidden">
                            <div
                            class="chat-message-wrapper flex-grow-1 w-50"
                            >
                            <div class="chat-message-text">
                            <p class="mb-0">...</p>
                            </div>
                            </div>
                            <div class="user-avatar flex-shrink-0 ms-3">
                            <div class="avatar avatar-sm">
                            <img
                            src="../assets/img/avatars/1.png"
                            alt="Avatar"
                            class="rounded-circle"
                            />
                            </div>
                            </div>
                            </div>
                            </li>
                          --}}
                      </ul>
                    </div>
                    <!-- form -->
                    <div class="chat-history-footer">
                      <form class="form-send-message d-flex justify-content-between align-items-center">
                        <input class="form-control message-input me-3 border-0 shadow-none"
                          placeholder="Type your message here..." type="text" id="user-input" />
                        <div class="message-actions d-flex align-items-center">
                          <button id="send-button" class="btn btn-primary d-flex send-msg-btn">
                            <i class="bx bx-paper-plane me-md-1 me-0"></i>
                            <span class="d-md-inline-block d-none align-middle">
                              Send
                            </span>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Chat History -->

                <div class="app-overlay"></div>
              </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex justify-content-between flex-md-row flex-column flex-wrap py-2">
              <div class="mb-md-0 mb-2">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">
                  TU WIN
                </a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script>
    const chatLog = document.getElementById("chat-log");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");

    sendButton.addEventListener("click", sendMessage);

    function sendMessage() {
      const message = userInput.value;

      if (message.trim() !== "") {
        appendMessage("user", message);
        getChatGPTResponse(message);
        userInput.value = "";
      }
    }

    function appendMessage(sender, message) {
      const messageElement = document.createElement("div");
      messageElement.className =
        sender === "user" ? "user-message" : "bot-message";
      messageElement.innerHTML =
        sender === "user" ?
        `
            <li class="mb-4 chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div
                  class="chat-message-wrapper flex-grow-1 w-50"
                >
                  <div class="chat-message-text">
                    <p class="mb-0">
                      ${message}
                    </p>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-3">
                  <div class="avatar avatar-sm">
                    <img
                      src="../assets/img/avatars/1.png"
                      alt="Avatar"
                      class="rounded-circle"
                    />
                  </div>
                </div>
              </div>
            </li>
            ` :
        `
            <li class="mb-4 chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-3">
                  <div class="avatar avatar-sm">
                    <img
                      src="../assets/img/avatars/2.png"
                      alt="Avatar"
                      class="rounded-circle"
                    />
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">
                      ${message}
                    </p>
                  </div>
                </div>
              </div>
            </li>`;
      chatLog.appendChild(messageElement);
      chatLog.scrollTop = chatLog.scrollHeight;
    }

    function getChatGPTResponse(message) {
      const apiUrl = "https://api.openai.com/v1/chat/completions";
      const API_KEY = "API_CHAT_GPT";

      fetch(apiUrl, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${API_KEY}`, // Ganti dengan token akses API Anda jika diperlukan
          },
          body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages: [{
                role: "system",
                content: "You are a helpful assistant."
              },
              {
                role: "user",
                content: message
              },
            ],
          }),
        })
        .then((response) => response.json())
        .then((data) => {
          const response = data.choices[0].message.content; // Mengambil teks respons dari objek respons
          appendMessage("bot", response);
        })
        .catch((error) => {
          appendMessage("bot", "Mohon maaf token api sudah habisss");
          console.error("Terjadi kesalahan:", error);
        });
    }
  </script>
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../assets/vendor/libs/typeahead-js/typeahead.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/app-chat.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
