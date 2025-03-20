<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.main')
    @section('title', 'Jadwal Sewa & Pinjam Ruang Laboratorium')
</head>

<body>
    <div class="py-4 px-2 sm:px-6 lg:px-8 mt-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-3 sm:p-6 bg-white border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 mb-4 sm:mb-6">
                    <h1 class="text-xl sm:text-2xl font-semibold text-gray-800">Jadwal Sewa & Pinjam Ruang Lab</h1>

                    <!-- Month and Year Selector -->
                    <div class="flex flex-wrap gap-2 sm:gap-4">
                        <div class="flex space-x-2">
                            <select id="month-selector" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-28 p-2">
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

                            <select id="year-selector" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2">
                                @for ($year = 2024; $year <= 2030; $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                            </select>
                        </div>

                        <div class="flex space-x-2">
                            <button id="prev-month" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button id="next-month" class="px-3 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button id="today-button" class="px-3 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white text-sm">
                                Hari Ini
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Calendar Container - Mobile View Toggle -->
                <div class="mb-2 sm:hidden">
                    <div class="flex justify-between items-center">
                        <button id="view-list" class="px-3 py-2 bg-blue-500 text-white rounded-lg text-sm">Tampilan List</button>
                        <button id="view-calendar" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm">Tampilan Kalender</button>
                    </div>
                </div>

                <!-- Calendar View -->
                <div id="calendar-view" class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Day names - abbreviated for mobile -->
                    <div class="grid grid-cols-7 gap-px bg-gray-200">
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Min</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Sen</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Sel</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Rab</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Kam</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Jum</div>
                        <div class="bg-gray-100 text-center py-2 font-semibold text-xs sm:text-sm">Sab</div>
                    </div>

                    <!-- Calendar grid -->
                    <div id="calendar-days" class="grid grid-cols-7 gap-px bg-gray-200">
                        <!-- Calendar cells will be dynamically inserted here -->
                    </div>
                </div>

                <!-- List View (Mobile) -->
                <div id="list-view" class="bg-white rounded-lg shadow-lg overflow-hidden hidden">
                    <div class="p-2 bg-gray-100 text-gray-700 font-semibold text-sm">
                        Jadwal Bulan <span id="current-month-name">Maret</span> <span id="current-year">2025</span>
                    </div>
                    <div id="booking-list" class="divide-y divide-gray-200">
                        <!-- Booking list items will be dynamically inserted here -->
                        <div class="p-3 text-center text-gray-500">Tidak ada jadwal untuk bulan ini</div>
                    </div>
                </div>

                <!-- Legend -->
                <div class="mt-4 flex items-center justify-end space-x-4 text-xs sm:text-sm">
                    <div class="flex items-center">
                        <div class="w-3 h-3 sm:w-4 sm:h-4 bg-green-100 mr-1"></div>
                        <span>Tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 sm:w-4 sm:h-4 bg-green-500 mr-1"></div>
                        <span>Digunakan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Informasi Penyewa -->
    <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-4 sm:p-6 w-full max-w-sm mx-2 sm:mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900" id="modal-title">Informasi Penyewaan</h3>
                <button id="close-modal" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="modal-content" class="space-y-3">
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Tanggal</p>
                    <p id="booking-date" class="text-sm sm:text-base font-medium">-</p>
                </div>
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Nama Penyewa</p>
                    <p id="booking-name" class="text-sm sm:text-base font-medium">-</p>
                </div>
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Laboratorium</p>
                    <p id="booking-lab" class="text-sm sm:text-base font-medium">-</p>
                </div>
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Waktu</p>
                    <p id="booking-time" class="text-sm sm:text-base font-medium">-</p>
                </div>
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Keperluan</p>
                    <p id="booking-purpose" class="text-sm sm:text-base font-medium">-</p>
                </div>
                <div>
                    <p class="text-xs sm:text-sm text-gray-500">Status</p>
                    <p id="booking-status" class="text-sm sm:text-base font-medium">-</p>
                </div>
            </div>
            <div class="mt-4 sm:mt-6">
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
                    status: 'Digunakan'
                },
                {
                    id: 2,
                    date: '2025-03-18',
                    name: 'Siti Rahayu',
                    lab: 'Lab Komputer B',
                    time: '13:00 - 15:00',
                    purpose: 'Penelitian Skripsi',
                    status: 'Digunakan'
                },
                {
                    id: 3,
                    date: '2025-03-22',
                    name: 'Dian Kusuma',
                    lab: 'Lab Komputer C',
                    time: '09:00 - 12:00',
                    purpose: 'Workshop Python',
                    status: 'Digunakan'
                }
            ];

            // Initialize date
            let currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();
            let currentView = 'calendar'; // or 'list'

            // Month names for display
            const monthNames = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            // Set initial select values
            document.getElementById('month-selector').value = currentMonth;
            document.getElementById('year-selector').value = currentYear;

            // Initialize calendar
            generateCalendar(currentMonth, currentYear);
            generateBookingList(currentMonth, currentYear);
            updateViewTitles();

            // Event listeners for navigation
            document.getElementById('prev-month').addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
                generateBookingList(currentMonth, currentYear);
                updateViewTitles();
            });

            document.getElementById('next-month').addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
                generateBookingList(currentMonth, currentYear);
                updateViewTitles();
            });

            document.getElementById('today-button').addEventListener('click', function() {
                const today = new Date();
                currentMonth = today.getMonth();
                currentYear = today.getFullYear();
                updateSelectors();
                generateCalendar(currentMonth, currentYear);
                generateBookingList(currentMonth, currentYear);
                updateViewTitles();
            });

            document.getElementById('month-selector').addEventListener('change', function() {
                currentMonth = parseInt(this.value);
                generateCalendar(currentMonth, currentYear);
                generateBookingList(currentMonth, currentYear);
                updateViewTitles();
            });

            document.getElementById('year-selector').addEventListener('change', function() {
                currentYear = parseInt(this.value);
                generateCalendar(currentMonth, currentYear);
                generateBookingList(currentMonth, currentYear);
                updateViewTitles();
            });

            // Mobile view toggle
            document.getElementById('view-list').addEventListener('click', function() {
                document.getElementById('calendar-view').classList.add('hidden');
                document.getElementById('list-view').classList.remove('hidden');
                document.getElementById('view-calendar').classList.remove('bg-blue-500', 'text-white');
                document.getElementById('view-calendar').classList.add('bg-gray-200', 'text-gray-700');
                document.getElementById('view-list').classList.remove('bg-gray-200', 'text-gray-700');
                document.getElementById('view-list').classList.add('bg-blue-500', 'text-white');
                currentView = 'list';
            });

            document.getElementById('view-calendar').addEventListener('click', function() {
                document.getElementById('list-view').classList.add('hidden');
                document.getElementById('calendar-view').classList.remove('hidden');
                document.getElementById('view-list').classList.remove('bg-blue-500', 'text-white');
                document.getElementById('view-list').classList.add('bg-gray-200', 'text-gray-700');
                document.getElementById('view-calendar').classList.remove('bg-gray-200', 'text-gray-700');
                document.getElementById('view-calendar').classList.add('bg-blue-500', 'text-white');
                currentView = 'calendar';
            });

            // Close modal buttons
            document.getElementById('close-modal').addEventListener('click', closeModal);
            document.getElementById('close-modal-button').addEventListener('click', closeModal);

            function updateSelectors() {
                document.getElementById('month-selector').value = currentMonth;
                document.getElementById('year-selector').value = currentYear;
            }

            function updateViewTitles() {
                document.getElementById('current-month-name').textContent = monthNames[currentMonth];
                document.getElementById('current-year').textContent = currentYear;
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
                        dayCell.classList.add('cursor-pointer', 'bg-green-500', 'hover:bg-green-600', 'text-white');
                        dayCell.setAttribute('data-booking-id', booking.id);

                        // Add event listener for showing modal
                        dayCell.addEventListener('click', function() {
                            showBookingModal(booking);
                        });
                    } else {
                        dayCell.classList.add('bg-green-100');
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
                dayCell.className = 'min-h-12 sm:min-h-24 px-1 sm:px-2 py-1';

                if (isOtherMonth) {
                    dayCell.classList.add('text-gray-400', 'bg-white');
                }

                const dayNumber = document.createElement('div');
                dayNumber.className = 'text-right text-xs sm:text-base font-medium';
                dayNumber.textContent = day;
                dayCell.appendChild(dayNumber);

                if (booking) {
                    const bookingInfo = document.createElement('div');
                    bookingInfo.className = 'mt-1 p-1 text-xs rounded truncate hidden sm:block';
                    bookingInfo.textContent = booking.name;
                    dayCell.appendChild(bookingInfo);

                    // Add a dot indicator for mobile
                    const indicator = document.createElement('div');
                    indicator.className = 'w-2 h-2 bg-white rounded-full mx-auto mt-1 sm:hidden';
                    dayCell.appendChild(indicator);
                }

                return dayCell;
            }

            function generateBookingList(month, year) {
                const bookingList = document.getElementById('booking-list');
                bookingList.innerHTML = '';

                // Filter bookings for current month and year
                const monthStr = String(month + 1).padStart(2, '0');
                const yearStr = String(year);
                const monthBookings = bookings.filter(b => b.date.startsWith(`${yearStr}-${monthStr}`));

                if (monthBookings.length === 0) {
                    const emptyMessage = document.createElement('div');
                    emptyMessage.className = 'p-3 text-center text-gray-500';
                    emptyMessage.textContent = 'Tidak ada jadwal untuk bulan ini';
                    bookingList.appendChild(emptyMessage);
                    return;
                }

                // Sort bookings by date
                monthBookings.sort((a, b) => a.date.localeCompare(b.date));

                // Create list items
                monthBookings.forEach(booking => {
                    const listItem = document.createElement('div');
                    listItem.className = 'p-3 hover:bg-gray-50 cursor-pointer';
                    listItem.setAttribute('data-booking-id', booking.id);

                    const date = new Date(booking.date);
                    const dayOfMonth = date.getDate();

                    listItem.innerHTML = `
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 text-white rounded-lg flex items-center justify-center font-bold">
                                ${dayOfMonth}
                            </div>
                            <div class="ml-3">
                                <p class="font-medium">${booking.name}</p>
                                <p class="text-sm text-gray-600">${booking.lab}</p>
                                <p class="text-xs text-gray-500">${booking.time}</p>
                            </div>
                        </div>
                    `;

                    listItem.addEventListener('click', function() {
                        showBookingModal(booking);
                    });

                    bookingList.appendChild(listItem);
                });
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
                if (booking.status === 'Digunakan') {
                    statusElement.classList.add('text-green-600');
                    statusElement.classList.remove('text-yellow-600');
                } else {
                    statusElement.classList.add('text-yellow-600');
                    statusElement.classList.remove('text-green-600');
                }

                document.getElementById('booking-modal').classList.remove('hidden');
                document.getElementById('booking-modal').classList.add('flex');
                document.getElementById('booking-modal').classList.add('pointer-events-auto'); // Hanya modal yang bisa diklik
                document.body.classList.add('overflow-hidden', 'pointer-events-none'); // Mencegah scroll & klik elemen lain
            }

            function closeModal() {
                document.getElementById('booking-modal').classList.add('hidden');
                document.getElementById('booking-modal').classList.remove('flex');
                document.body.classList.remove('overflow-hidden', 'pointer-events-none'); // Kembalikan interaksi halaman
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