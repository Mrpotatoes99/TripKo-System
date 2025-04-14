<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
  </head>
  <!--end::Head-->
  <body class="font-roboto">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-blue-900 text-white w-64 p-4 flex flex-col justify-between">
            <div>
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-blue-900 text-2xl"></i>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-xl font-bold">TripKo Pangasinan</h1>
                    </div>
                </div>
                <nav>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-home mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <span>Tourist Spots</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-route mr-3"></i>
                        <span>Itineraries</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-calendar-alt mr-3"></i>
                        <span>Festivals</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-bus mr-3"></i>
                        <span>Transportation</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-money-bill-alt mr-3"></i>
                        <span>Fare</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-users mr-3"></i>
                        <span>Users</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-chart-bar mr-3"></i>
                        <span>Reports</span>
                    </a>
                    <a href="#" class="flex items-center p-2 mb-2 hover:bg-blue-700 rounded">
                        <i class="fas fa-cog mr-3"></i>
                        <span>Settings</span>
                    </a>
                </nav>

                </div>
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-blue-900 text-2xl"></i>
                </div>
                <div class="ml-3">
                    <h2 class="text-sm">Cleymark Balan</h2>
                    <p class="text-xs">Administrator</p>
                </div>
            </div>

            <a href="#" class="flex items-center p-2 mt-4 hover:bg-blue-700 rounded">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Sign Out</span>
            </a>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <header class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <button class="text-2xl mr-4">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="text-2xl font-bold">Transportation</h1>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search" class="p-2 border rounded mr-4">
                    <i class="fas fa-bell text-xl"></i>
                </div>
            </header>
            <section class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-xl font-bold">Transportation Type</h2>
                    <button id="addVehicleBtn" class="bg-blue-700 text-white px-4 py-2 rounded">
  + Add Vehicle </button>
                </div>
                <table class="w-full border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 p-2">ID</th>
                            <th class="border border-gray-400 p-2">Transportation</th>
                            <th class="border border-gray-400 p-2">Transportation Type</th>
                            <th class="border border-gray-400 p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2">1</td>
                            <td class="border border-gray-400 p-2">Bus</td>
                            <td class="border border-gray-400 p-2">Ordinary Bus</td>
                            <td class="border border-gray-400 p-2">
                                <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-xl font-bold">Terminal Location</h2>
                    <button id="addTerminalBtn" class="bg-blue-700 text-white px-4 py-2 rounded">
  + Add Terminal </button>
  

                </div>
                <table class="w-full border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 p-2">ID</th>
                            <th class="border border-gray-400 p-2">Terminal Name</th>
                            <th class="border border-gray-400 p-2">Town</th>
                            <th class="border border-gray-400 p-2">Coordinates</th>
                            <th class="border border-gray-400 p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2">1</td>
                            <td class="border border-gray-400 p-2">Victory Liner Bolinao</td>
                            <td class="border border-gray-400 p-2">Bolinao</td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2">
                                <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section>
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-xl font-bold">Terminal Routes</h2>
                    <button class="bg-blue-700 text-white px-4 py-2 rounded">+ Add Routes</button>
                </div>
                <table class="w-full border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 p-2">ID</th>
                            <th class="border border-gray-400 p-2">From Terminal</th>
                            <th class="border border-gray-400 p-2">To Terminal</th>
                            <th class="border border-gray-400 p-2">Transportation Type</th>
                            <th class="border border-gray-400 p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2">1</td>
                            <td class="border border-gray-400 p-2">Victory Liner Bolinao</td>
                            <td class="border border-gray-400 p-2">Victory Liner Alaminos</td>
                            <td class="border border-gray-400 p-2">Ordinary Bus</td>
                            <td class="border border-gray-400 p-2">
                                <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <!-- Add this somewhere near the bottom of your dashboard HTML (inside <body>, but outside other sections) -->

<div id="vehicleFormModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <form>
      <div class="mb-4">
        <label for="transportation" class="block text-sm font-medium text-gray-700">Transportation</label>
        <input type="text" id="transportation" name="transportation" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="mb-4">
        <label for="transportation-type" class="block text-sm font-medium text-gray-700">Transportation Type</label>
        <input type="text" id="transportation-type" name="transportation-type" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex justify-end space-x-2">
        <button type="button" id="cancelVehicleBtn" class="bg-gray-300 text-black px-4 py-2 rounded">Cancel</button>
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Save</button>
      </div>
    </form>
  </div>
</div>

<!-- Terminal Modal -->
<div id="terminalFormModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <form>
      <div class="mb-4">
        <label for="terminal-name" class="block text-sm font-medium text-gray-700">Terminal Name</label>
        <input type="text" id="terminal-name" name="terminal-name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="mb-4">
        <label for="town" class="block text-sm font-medium text-gray-700">Town</label>
        <input type="text" id="town" name="town" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="mb-4">
        <label for="coordinates" class="block text-sm font-medium text-gray-700">Coordinates</label>
        <input type="text" id="coordinates" name="coordinates" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex justify-end space-x-2">
        <button type="button" id="cancelTerminalBtn" class="bg-gray-300 text-black px-4 py-2 rounded">Cancel</button>
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded">Save</button>
      </div>
    </form>
  </div>
</div>


<script>
  const openBtn = document.getElementById('addVehicleBtn');
  const modal = document.getElementById('vehicleFormModal');
  const cancelBtn = document.getElementById('cancelVehicleBtn');

  openBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });

  cancelBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  const openTerminalBtn = document.getElementById('addTerminalBtn');
  const terminalModal = document.getElementById('terminalFormModal');
  const cancelTerminalBtn = document.getElementById('cancelTerminalBtn');

  openTerminalBtn.addEventListener('click', () => {
    terminalModal.classList.remove('hidden');
  });

  cancelTerminalBtn.addEventListener('click', () => {
    terminalModal.classList.add('hidden');
  });
</script>

  </body>
</html>