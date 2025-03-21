<!-- resources/views/logs.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const countryFilter = document.getElementById('countryFilter');
            const rows = document.querySelectorAll('.log-row');
            const itemsPerPage = 10;
            let currentPage = 1;

            function filterLogs() {
                const searchText = searchInput.value.toLowerCase();
                const selectedCountry = countryFilter.value.toLowerCase();
                let filteredRows = [];

                rows.forEach(row => {
                    const ip = row.querySelector('.ip-address').textContent.toLowerCase();
                    const country = row.querySelector('.country').textContent.toLowerCase();
                    const region = row.querySelector('.region').textContent.toLowerCase();
                    const city = row.querySelector('.city').textContent.toLowerCase();
                    const isp = row.querySelector('.isp').textContent.toLowerCase();

                    // Pencarian berlaku ke semua kolom
                    if (
                        (ip.includes(searchText) ||
                            country.includes(searchText) ||
                            region.includes(searchText) ||
                            city.includes(searchText) ||
                            isp.includes(searchText) || searchText === '') &&
                        (country.includes(selectedCountry) || selectedCountry === '')
                    ) {
                        filteredRows.push(row);
                    }
                });

                updatePagination(filteredRows);
            }

            function updatePagination(filteredRows) {
                const totalPages = Math.ceil(filteredRows.length / itemsPerPage);
                currentPage = Math.min(currentPage, totalPages) || 1;

                rows.forEach(row => row.style.display = 'none');
                filteredRows.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage).forEach(row => {
                    row.style.display = '';
                });

                renderPagination(totalPages);
            }

            function renderPagination(totalPages) {
                const paginationContainer = document.getElementById('pagination');
                paginationContainer.innerHTML = '';

                for (let i = 1; i <= totalPages; i++) {
                    let button = document.createElement('button');
                    button.textContent = i;
                    button.className = `pagination-btn px-4 py-2 mx-1 border rounded ${i === currentPage ? 'bg-blue-500 text-white' : 'bg-gray-200'}`;
                    button.addEventListener('click', function() {
                        currentPage = i;
                        filterLogs();
                    });
                    paginationContainer.appendChild(button);
                }
            }

            searchInput.addEventListener('input', filterLogs);
            countryFilter.addEventListener('change', filterLogs);
            filterLogs();
        });
    </script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <h1 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Logs Pengguna</h1>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="text" id="searchInput" placeholder="Cari..." class="px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select id="countryFilter" class="px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Semua Negara</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Negara</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wilayah</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kota</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISP</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu Akses</th>
                        </tr>
                    </thead>
                    <tbody id="logTable" class="bg-white divide-y divide-gray-200">
                        @foreach ($logs as $index => $log)
                        <tr class="log-row {{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 ip-address">{{ $log->ip_address }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 country">{{ $log->country }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $log->region }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $log->city }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $log->isp }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="pagination" class="px-4 py-3 bg-white flex justify-center"></div>
        </div>
    </div>
</body>

</html>