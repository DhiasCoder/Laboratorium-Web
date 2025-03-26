<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Laboratory Rental System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
  <div id="toast-root"
    data-success="{{ session('success') }}"
    data-error="{{ session('error') }}"
    data-info="{{ session('info') }}">
  </div>
  @vite(['resources/js/ToastApp.jsx'])
  <div class="min-h-screen flex">
    <!-- Sidebar - Default hidden on mobile, toggle with JS -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden lg:hidden"></div>

    <aside id="sidebar" class="fixed lg:static w-64 -left-64 lg:left-0 top-0 bottom-0 bg-indigo-900 text-white p-4 z-30 transition-all duration-300 ease-in-out transform">
      <div class="flex items-center justify-between mb-8">
        <div class="flex items-center">
          <i class="fas fa-flask text-2xl mr-2"></i>
          <h1 class="text-xl font-bold">LabRental Admin</h1>
        </div>
        <button id="close-sidebar" class="text-white lg:hidden">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>

      <nav>
        <ul>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg bg-indigo-800">
              <i class="fas fa-tachometer-alt w-5"></i>
              <span class="ml-2">Dashboard</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-flask w-5"></i>
              <span class="ml-2">Laboratories</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-calendar-alt w-5"></i>
              <span class="ml-2">Bookings</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-users w-5"></i>
              <span class="ml-2">Users</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-tools w-5"></i>
              <span class="ml-2">Equipment</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-chart-line w-5"></i>
              <span class="ml-2">Reports</span>
            </a>
          </li>
          <li class="mb-1">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
              <i class="fas fa-cog w-5"></i>
              <span class="ml-2">Settings</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="mt-auto pt-8">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="flex items-center p-3 rounded-lg hover:bg-indigo-800 transition-colors">
            <i class="fas fa-sign-out-alt w-5"></i>
            <span class="ml-2">Logout</span>
          </button>
        </form>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Top Navbar -->
      <header class="bg-white shadow-sm sticky top-0 z-10">
        <div class="flex items-center justify-between p-4">
          <div class="flex items-center">
            <button id="toggle-sidebar" class="text-gray-600 mr-4 focus:outline-none">
              <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
          </div>

          <div class="flex items-center">
            <div class="relative mr-3 hidden sm:block">
              <input type="text" placeholder="Search..." class="bg-gray-100 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 w-40 lg:w-48">
              <i class="fas fa-search absolute right-3 top-2.5 text-gray-500"></i>
            </div>

            <div class="relative mr-3">
              <button class="relative">
                <i class="fas fa-bell text-gray-600"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">3</span>
              </button>
            </div>

            <div class="flex items-center">
              <img src="/api/placeholder/40/40" alt="Admin" class="w-8 h-8 rounded-full mr-2">
              <div class="hidden sm:block">
                <h3 class="text-sm font-medium">{{ Auth::user()->name }}</h3>
                <p class="text-xs text-gray-500">Super Admin</p>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-4">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
          <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
              <div class="rounded-full bg-blue-100 p-3 mr-4">
                <i class="fas fa-flask text-blue-600"></i>
              </div>
              <div>
                <p class="text-gray-500 text-sm">Total Laboratories</p>
                <h3 class="text-2xl font-bold">24</h3>
              </div>
            </div>
            <div class="mt-4 text-sm text-green-600 flex items-center">
              <i class="fas fa-arrow-up mr-1"></i>
              <span>4.7% increase</span>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
              <div class="rounded-full bg-green-100 p-3 mr-4">
                <i class="fas fa-calendar-check text-green-600"></i>
              </div>
              <div>
                <p class="text-gray-500 text-sm">Active Bookings</p>
                <h3 class="text-2xl font-bold">156</h3>
              </div>
            </div>
            <div class="mt-4 text-sm text-green-600 flex items-center">
              <i class="fas fa-arrow-up mr-1"></i>
              <span>12.3% increase</span>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
              <div class="rounded-full bg-purple-100 p-3 mr-4">
                <i class="fas fa-users text-purple-600"></i>
              </div>
              <div>
                <p class="text-gray-500 text-sm">Registered Users</p>
                <h3 class="text-2xl font-bold">1,243</h3>
              </div>
            </div>
            <div class="mt-4 text-sm text-green-600 flex items-center">
              <i class="fas fa-arrow-up mr-1"></i>
              <span>8.1% increase</span>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
              <div class="rounded-full bg-yellow-100 p-3 mr-4">
                <i class="fas fa-money-bill-wave text-yellow-600"></i>
              </div>
              <div>
                <p class="text-gray-500 text-sm">Monthly Revenue</p>
                <h3 class="text-2xl font-bold">$28,675</h3>
              </div>
            </div>
            <div class="mt-4 text-sm text-green-600 flex items-center">
              <i class="fas fa-arrow-up mr-1"></i>
              <span>15.2% increase</span>
            </div>
          </div>
        </div>

        <!-- Recent Bookings and Lab Usage -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
          <!-- Recent Bookings -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-4 border-b flex justify-between items-center">
              <h3 class="font-semibold text-gray-800">Recent Bookings</h3>
              <a href="#" class="text-indigo-600 text-sm hover:underline">View All</a>
            </div>
            <div class="p-4">
              <div class="overflow-x-auto">
                <table class="min-w-full">
                  <thead>
                    <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      <th class="px-4 py-2">User</th>
                      <th class="px-4 py-2">Laboratory</th>
                      <th class="px-4 py-2 hidden sm:table-cell">Date</th>
                      <th class="px-4 py-2">Status</th>
                      <th class="px-4 py-2">Action</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    <tr>
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <img src="/api/placeholder/32/32" alt="User" class="w-8 h-8 rounded-full mr-2">
                          <span class="truncate">John Doe</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 truncate">Chem Lab 03</td>
                      <td class="px-4 py-3 hidden sm:table-cell">Mar 15</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span>
                      </td>
                      <td class="px-4 py-3">
                        <button class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <img src="/api/placeholder/32/32" alt="User" class="w-8 h-8 rounded-full mr-2">
                          <span class="truncate">Jane Smith</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 truncate">Physics Lab 01</td>
                      <td class="px-4 py-3 hidden sm:table-cell">Mar 16</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                      </td>
                      <td class="px-4 py-3">
                        <button class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <img src="/api/placeholder/32/32" alt="User" class="w-8 h-8 rounded-full mr-2">
                          <span class="truncate">Robert Johnson</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 truncate">Bio Lab 02</td>
                      <td class="px-4 py-3 hidden sm:table-cell">Mar 17</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">In Progress</span>
                      </td>
                      <td class="px-4 py-3">
                        <button class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3">
                        <div class="flex items-center">
                          <img src="/api/placeholder/32/32" alt="User" class="w-8 h-8 rounded-full mr-2">
                          <span class="truncate">Emily Davis</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 truncate">Comp Lab 04</td>
                      <td class="px-4 py-3 hidden sm:table-cell">Mar 18</td>
                      <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Cancelled</span>
                      </td>
                      <td class="px-4 py-3">
                        <button class="text-indigo-600 hover:text-indigo-900">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Laboratory Usage -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-4 border-b flex justify-between items-center">
              <h3 class="font-semibold text-gray-800">Laboratory Usage</h3>
              <div class="flex space-x-2">
                <button class="px-3 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Weekly</button>
                <button class="px-3 py-1 text-xs bg-indigo-600 text-white rounded">Monthly</button>
              </div>
            </div>
            <div class="p-4">
              <div class="mb-4">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Chemistry Laboratory</h4>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                </div>
                <div class="flex justify-between text-xs mt-1">
                  <span>85% Occupancy</span>
                  <span>85/100 hours</span>
                </div>
              </div>

              <div class="mb-4">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Physics Laboratory</h4>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-green-600 h-2.5 rounded-full" style="width: 72%"></div>
                </div>
                <div class="flex justify-between text-xs mt-1">
                  <span>72% Occupancy</span>
                  <span>72/100 hours</span>
                </div>
              </div>

              <div class="mb-4">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Biology Laboratory</h4>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 64%"></div>
                </div>
                <div class="flex justify-between text-xs mt-1">
                  <span>64% Occupancy</span>
                  <span>64/100 hours</span>
                </div>
              </div>

              <div class="mb-4">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Computer Laboratory</h4>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-purple-600 h-2.5 rounded-full" style="width: 92%"></div>
                </div>
                <div class="flex justify-between text-xs mt-1">
                  <span>92% Occupancy</span>
                  <span>92/100 hours</span>
                </div>
              </div>

              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Engineering Laboratory</h4>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                  <div class="bg-red-600 h-2.5 rounded-full" style="width: 53%"></div>
                </div>
                <div class="flex justify-between text-xs mt-1">
                  <span>53% Occupancy</span>
                  <span>53/100 hours</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Laboratories Overview -->
        <div class="bg-white rounded-lg shadow mb-6">
          <div class="p-4 border-b flex flex-wrap justify-between items-center">
            <h3 class="font-semibold text-gray-800 mb-2 sm:mb-0">Laboratories Overview</h3>
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">Add Laboratory</button>
          </div>
          <div class="p-4">
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <th class="px-4 py-2">Laboratory</th>
                    <th class="px-4 py-2 hidden md:table-cell">Type</th>
                    <th class="px-4 py-2 hidden sm:table-cell">Capacity</th>
                    <th class="px-4 py-2 hidden lg:table-cell">Equipment</th>
                    <th class="px-4 py-2 hidden sm:table-cell">Price/Hour</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <tr>
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Lab" class="w-8 h-8 sm:w-10 sm:h-10 rounded mr-2">
                        <div>
                          <p class="font-medium">Chemistry Lab 01</p>
                          <p class="text-xs text-gray-500 hidden sm:block">Building A, Floor 2</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 hidden md:table-cell">Chemistry</td>
                    <td class="px-4 py-3 hidden sm:table-cell">30 seats</td>
                    <td class="px-4 py-3 hidden lg:table-cell">24 items</td>
                    <td class="px-4 py-3 hidden sm:table-cell">$50</td>
                    <td class="px-4 py-3">
                      <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Available</span>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Lab" class="w-8 h-8 sm:w-10 sm:h-10 rounded mr-2">
                        <div>
                          <p class="font-medium">Physics Lab 02</p>
                          <p class="text-xs text-gray-500 hidden sm:block">Building B, Floor 1</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 hidden md:table-cell">Physics</td>
                    <td class="px-4 py-3 hidden sm:table-cell">25 seats</td>
                    <td class="px-4 py-3 hidden lg:table-cell">18 items</td>
                    <td class="px-4 py-3 hidden sm:table-cell">$60</td>
                    <td class="px-4 py-3">
                      <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Maintenance</span>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Lab" class="w-8 h-8 sm:w-10 sm:h-10 rounded mr-2">
                        <div>
                          <p class="font-medium">Biology Lab 03</p>
                          <p class="text-xs text-gray-500 hidden sm:block">Building A, Floor 3</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 hidden md:table-cell">Biology</td>
                    <td class="px-4 py-3 hidden sm:table-cell">20 seats</td>
                    <td class="px-4 py-3 hidden lg:table-cell">30 items</td>
                    <td class="px-4 py-3 hidden sm:table-cell">$45</td>
                    <td class="px-4 py-3">
                      <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Booked</span>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Lab" class="w-8 h-8 sm:w-10 sm:h-10 rounded mr-2">
                        <div>
                          <p class="font-medium">Computer Lab 04</p>
                          <p class="text-xs text-gray-500 hidden sm:block">Building C, Floor 1</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 hidden md:table-cell">Computer Science</td>
                    <td class="px-4 py-3 hidden sm:table-cell">40 seats</td>
                    <td class="px-4 py-3 hidden lg:table-cell">42 items</td>
                    <td class="px-4 py-3 hidden sm:table-cell">$70</td>
                    <td class="px-4 py-3">
                      <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Available</span>
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-900">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-600 hover:text-red-900">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mt-4 flex flex-col sm:flex-row justify-between items-center">
              <div class="text-sm text-gray-600 mb-3 sm:mb-0">Showing 4 of 24 laboratories</div>
              <div class="flex space-x-1">
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">Previous</button>
                <button class="px-3 py-1 bg-indigo-600 text-white rounded">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">2</button>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">3</button>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">Next</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const sidebar = document.getElementById('sidebar');
      const sidebarOverlay = document.getElementById('sidebar-overlay');
      const toggleSidebarBtn = document.getElementById('toggle-sidebar');
      const closeSidebarBtn = document.getElementById('close-sidebar');

      function toggleSidebar() {
        if (window.innerWidth >= 1024) { // Jika di desktop
          sidebar.classList.toggle('hidden'); // Sembunyikan/tampilkan sidebar
        } else { // Jika di mobile
          sidebar.classList.remove('-left-64');
          sidebar.classList.add('left-0');
          sidebarOverlay.classList.remove('hidden');
          document.body.classList.add('overflow-hidden');
        }
      }

      function closeSidebar() {
        if (window.innerWidth >= 1024) {
          sidebar.classList.add('hidden'); // Tutup sidebar di desktop
        } else {
          sidebar.classList.remove('left-0');
          sidebar.classList.add('-left-64');
          sidebarOverlay.classList.add('hidden');
          document.body.classList.remove('overflow-hidden');
        }
      }

      toggleSidebarBtn.addEventListener('click', toggleSidebar);
      closeSidebarBtn.addEventListener('click', closeSidebar);
      sidebarOverlay.addEventListener('click', closeSidebar);
    });
  </script>
</body>

</html>