<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.main')
    @section('title', 'Jadwal Sewa & Pinjam Ruang Laboratorium')
</head>

<body>
    <div class="py-6 px-4 sm:px-6 lg:px-8 mt-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Jadwal Sewa & Pinjam Ruang Laboratorium</h1>

                    <!-- Month and Year Selector -->
                    <div class="flex space-x-4 items-center">
                        <div class="relative">
                            <select id="month-selector" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="0">Januari</option>
                                <option value="1">Februari</option>
                                <option value="2">Maret</option>
                                <option value="3">April</option>
                                <option value="4">Mei</option>
                                <option value="5">Juni</option>
                                <option value="6">Juli</option>
                                <option value="7">Agustus</option>
                                <option value="8">September</option>
                                <option value="9">Oktober</option>
                                <option value="10">November</option>
                                <option value="11">Desember</option>
                            </select>
                        </div>

                        <div class="relative">
                            <select id="year-selector" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @for ($year = 2024; $year <= 2030; $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                            </select>
                        </div>

                        <div class="flex space-x-2">
                            <button id="prev-month" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button id="next-month" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button id="today-button" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white">
                                Hari Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Calendar Container -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="grid grid-cols-7 gap-px bg-gray-200">
                        <div class="bg-gray-100 text-center py-2 font-semibold">Minggu</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Senin</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Selasa</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Rabu</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Kamis</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Jumat</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold">Sabtu</div>
                    </div>

                    <div id="calendar-days" class="grid grid-cols-7 gap-px bg-gray-200">
                        <!-- Calendar cells will be dynamically inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Informasi Penyewa -->
    <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900" id="modal-title">Informasi Penyewaan</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="modal-content" class="space-y-4">
                <div>
                    <p class="text-sm text-gray-500">Tanggal</p>
                    <p id="booking-date" class="font-medium">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Nama Penyewa</p>
                    <p id="booking-name" class="font-medium">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Laboratorium</p>
                    <p id="booking-lab" class="font-medium">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Waktu</p>
                    <p id="booking-time" class="font-medium">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Keperluan</p>
                    <p id="booking-purpose" class="font-medium">-</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Status</p>
                    <p id="booking-status" class="font-medium">-</p>
                </div>
            </div>
            <div class="mt-6">
                <button id="close-modal-button" class="w-full inline-flex justify-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sample data for bookings (would normally come from backend)
            const bookings = [{
                    id: 1,
                    date: '2025-03-15',
                    name: 'Budi Santoso',
                    lab: 'Lab Komputer A',
                    time: '08:00 - 10:00',
                    purpose: 'Praktikum Jaringan Komputer',
                    status: 'Disewa'
                },
                {
                    id: 2,
                    date: '2025-03-18',
                    name: 'Siti Rahayu',
                    lab: 'Lab Komputer B',
                    time: '13:00 - 15:00',
                    purpose: 'Penelitian Skripsi',
                    status: 'Disewa'
                },
                {
                    id: 3,
                    date: '2025-03-22',
                    name: 'Dian Kusuma',
                    lab: 'Lab Komputer C',
                    time: '09:00 - 12:00',
                    purpose: 'Workshop Python',
                    status: 'Disewa'
                }
            ];

            // Initialize date
            let currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();

            // Set initial select values
            document.getElementById('month-selector').value = currentMonth;
            document.getElementById('year-selector').value = currentYear;

            // Initialize calendar
            generateCalendar(currentMonth, currentYear);

            // Event listeners for navigation
            document.getElementById('prev-month').addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
            });

            document.getElementById('next-month').addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
            });

            document.getElementById('today-button').addEventListener('click', function() {
                const today = new Date();
                currentMonth = today.getMonth();
                currentYear = today.getFullYear();
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
            });

            document.getElementById('month-selector').addEventListener('change', function() {
                currentMonth = parseInt(this.value);
                generateCalendar(currentMonth, currentYear);
            });

            document.getElementById('year-selector').addEventListener('change', function() {
                currentYear = parseInt(this.value);
                generateCalendar(currentMonth, currentYear);
            });

            // Close modal buttons
            document.getElementById('close-modal').addEventListener('click', closeModal);
            document.getElementById('close-modal-button').addEventListener('click', closeModal);

            function updateSelectors() {
                document.getElementById('month-selector').value = currentMonth;
                document.getElementById('year-selector').value = currentYear;
            }

            function generateCalendar(month, year) {
                const calendarDays = document.getElementById('calendar-days');
                calendarDays.innerHTML = '';

                // Get first day of month and number of days
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();

                // Previous month's days
                const prevMonthDays = new Date(year, month, 0).getDate();
                for (let i = firstDay - 1; i >= 0; i--) {
                    const dayCell = createDayCell(prevMonthDays - i, true);
                    calendarDays.appendChild(dayCell);
                }

                // Current month's days
                for (let i = 1; i <= daysInMonth; i++) {
                    const dateString = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                    const booking = bookings.find(b => b.date === dateString);

                    const dayCell = createDayCell(i, false, booking);
                    if (booking) {
                        dayCell.classList.add('cursor-pointer', 'bg-green-100', 'hover:bg-green-200');
                        dayCell.setAttribute('data-booking-id', booking.id);

                        // Add event listener for showing modal
                        dayCell.addEventListener('click', function() {
                            showBookingModal(booking);
                        });
                    }

                    // Highlight current day
                    const now = new Date();
                    if (i === now.getDate() && month === now.getMonth() && year === now.getFullYear()) {
                        dayCell.classList.add('ring-2', 'ring-blue-500');
                    }

                    calendarDays.appendChild(dayCell);
                }

                // Calculate remaining cells needed to complete the grid
                const totalCells = 42; // 6 rows of 7 days
                const remainingCells = totalCells - (firstDay + daysInMonth);

                // Next month's days
                for (let i = 1; i <= remainingCells; i++) {
                    const dayCell = createDayCell(i, true);
                    calendarDays.appendChild(dayCell);
                }
            }

            function createDayCell(day, isOtherMonth, booking = null) {
                const dayCell = document.createElement('div');
                dayCell.className = 'bg-white min-h-24 px-2 py-1';

                if (isOtherMonth) {
                    dayCell.classList.add('text-gray-400');
                }

                const dayNumber = document.createElement('div');
                dayNumber.className = 'text-right font-medium';
                dayNumber.textContent = day;
                dayCell.appendChild(dayNumber);

                if (booking) {
                    const bookingInfo = document.createElement('div');
                    bookingInfo.className = 'mt-1 p-1 text-xs rounded bg-green-500 text-white truncate';
                    bookingInfo.textContent = booking.name + ' - ' + booking.lab;
                    dayCell.appendChild(bookingInfo);
                }

                return dayCell;
            }

            function showBookingModal(booking) {
                document.getElementById('booking-date').textContent = formatDate(booking.date);
                document.getElementById('booking-name').textContent = booking.name;
                document.getElementById('booking-lab').textContent = booking.lab;
                document.getElementById('booking-time').textContent = booking.time;
                document.getElementById('booking-purpose').textContent = booking.purpose;
                document.getElementById('booking-status').textContent = booking.status;

                // Set status color
                const statusElement = document.getElementById('booking-status');
                if (booking.status === 'Disewa') {
                    statusElement.classList.add('text-green-600');
                    statusElement.classList.remove('text-yellow-600');
                } else {
                    statusElement.classList.add('text-yellow-600');
                    statusElement.classList.remove('text-green-600');
                }

                document.getElementById('booking-modal').classList.remove('hidden');
                document.getElementById('booking-modal').classList.add('flex');
            }

            function closeModal() {
                document.getElementById('booking-modal').classList.add('hidden');
                document.getElementById('booking-modal').classList.remove('flex');
            }

            function formatDate(dateString) {
                const date = new Date(dateString);
                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                return date.toLocaleDateString('id-ID', options);
            }
        });
    </script>
</body>

</html>