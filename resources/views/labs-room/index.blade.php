<!-- resources/views/lab-rooms/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Management System</title>
    @extends('layouts.main')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 font-sans">
    <div class="container mx-auto px-4 py-8 mt-10">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-blue-800 mb-6">Sistem Pemilihan Ruangan Laboratorium</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Lab categories -->
            <div x-data="{ 
                open: true, 
                labName: 'Biologi',
                rooms: [
                    { id: 1, name: 'Lab Biologi 1', isActive: true, startTime: '08:00', endTime: '10:30', user: 'Dr. Siti Aminah', activity: 'Praktikum Anatomi' },
                    { id: 2, name: 'Lab Biologi 2', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 3, name: 'Lab Biologi 3', isActive: true, startTime: '13:00', endTime: '15:00', user: 'Dr. Budi Santoso', activity: 'Penelitian DNA' },
                    { id: 4, name: 'Lab Biologi 4', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 5, name: 'Lab Biologi 5', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 6, name: 'Lab Biologi 6', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 7, name: 'Lab Biologi 7', isActive: true, startTime: '09:30', endTime: '12:00', user: 'Dr. Maya Wijaya', activity: 'Praktikum Mikrobiologi' },
                    { id: 8, name: 'Lab Biologi 8', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 9, name: 'Lab Biologi 9', isActive: false, startTime: '', endTime: '', user: '', activity: '' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-blue-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Biologi (9)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Fisika Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Fisika',
                rooms: [
                    { id: 1, name: 'Lab Fisika 1', isActive: true, startTime: '07:30', endTime: '10:00', user: 'Prof. Ahmad Dahlan', activity: 'Praktikum Mekanika' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-purple-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Fisika (1)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Kimia Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Kimia',
                rooms: [
                    { id: 1, name: 'Lab Kimia 1', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 2, name: 'Lab Kimia 2', isActive: true, startTime: '14:00', endTime: '16:30', user: 'Dr. Ratna Dewi', activity: 'Praktikum Kimia Organik' },
                    { id: 3, name: 'Lab Kimia 3', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 4, name: 'Lab Kimia 4', isActive: true, startTime: '10:00', endTime: '12:30', user: 'Dr. Hasan Ali', activity: 'Penelitian Polimer' },
                    { id: 5, name: 'Lab Kimia 5', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 6, name: 'Lab Kimia 6', isActive: false, startTime: '', endTime: '', user: '', activity: '' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-red-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Kimia (6)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Sistem Informasi Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Sistem Informasi',
                rooms: [
                    { id: 1, name: 'Lab SI 1', isActive: true, startTime: '08:30', endTime: '11:00', user: 'Dr. Eko Prasetyo', activity: 'Praktikum Database' },
                    { id: 2, name: 'Lab SI 2', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 3, name: 'Lab SI 3', isActive: true, startTime: '13:00', endTime: '16:00', user: 'Dr. Dewi Anggraini', activity: 'Workshop Web Programming' },
                    { id: 4, name: 'Lab SI 4', isActive: false, startTime: '', endTime: '', user: '', activity: '' },
                    { id: 5, name: 'Lab SI 5', isActive: true, startTime: '09:00', endTime: '12:00', user: 'Dr. Rudi Hermawan', activity: 'Praktikum Jaringan' },
                    { id: 6, name: 'Lab SI 6', isActive: false, startTime: '', endTime: '', user: '', activity: '' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-teal-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Sistem Informasi (6)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- UTM Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'UTM',
                rooms: [
                    { id: 1, name: 'Lab UTM', isActive: false, startTime: '', endTime: '', user: '', activity: '' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-yellow-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium UTM (1)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Bahasa Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Bahasa',
                rooms: [
                    { id: 1, name: 'Lab Bahasa', isActive: true, startTime: '12:30', endTime: '14:30', user: 'Prof. Maria Susanti', activity: 'Kelas Bahasa Inggris' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-indigo-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Bahasa (1)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Matematika Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Matematika',
                rooms: [
                    { id: 1, name: 'Lab Matematika', isActive: false, startTime: '', endTime: '', user: '', activity: '' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-pink-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Matematika (1)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Ekonomi Lab -->
            <div x-data="{ 
                open: true, 
                labName: 'Ekonomi',
                rooms: [
                    { id: 1, name: 'Lab Ekonomi', isActive: true, startTime: '10:30', endTime: '13:00', user: 'Dr. Anita Wijaya', activity: 'Praktikum Ekonometrika' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div @click="open = !open" class="bg-green-600 text-white p-4 cursor-pointer flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Laboratorium Ekonomi (1)</h2>
                    <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div x-show="open" class="p-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <template x-for="room in rooms" :key="room.id">
                            <div @click="$dispatch('open-modal', room)"
                                :class="{'bg-green-100 border-green-500 text-green-700': room.isActive, 'bg-gray-100 border-gray-300 text-gray-600': !room.isActive}"
                                class="border-2 rounded-lg p-3 cursor-pointer transition-all hover:shadow-md text-center relative">
                                <div x-show="room.isActive" class="absolute top-2 right-2 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p class="font-medium" x-text="room.name"></p>
                                <p x-show="room.isActive" class="text-xs mt-1" x-text="room.startTime + ' - ' + room.endTime"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room Information Modal -->
        <div x-data="{ 
            showModal: false,
            currentRoom: null,
            currentTime: new Date().toLocaleTimeString(),
            updateTime() {
                this.currentTime = new Date().toLocaleTimeString();
                setTimeout(() => this.updateTime(), 1000);
            }
        }"
            x-init="updateTime()"
            @open-modal.window="showModal = true; currentRoom = $event.detail"
            class="relative z-10" x-cloak>
            <!-- Modal backdrop -->
            <div x-show="showModal" class="fixed inset-0 bg-black/30 backdrop-blur-sm"></div>

            <!-- Modal -->
            <div x-show="showModal" class="fixed inset-0 flex items-center justify-center p-4">
                <div @click.away="showModal = false" class="bg-white rounded-lg shadow-xl w-full max-w-md">
                    <!-- Header -->
                    <div :class="{'bg-green-600': currentRoom?.isActive, 'bg-gray-600': !currentRoom?.isActive}" class="rounded-t-lg p-4 text-white">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold" x-text="currentRoom?.name"></h3>
                            <button @click="showModal = false" class="text-white hover:text-gray-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-5 divide-y divide-gray-200">
                        <div class="py-3">
                            <p class="text-sm text-gray-500">Status</p>
                            <div class="flex items-center mt-1">
                                <span :class="{'bg-green-500': currentRoom?.isActive, 'bg-gray-400': !currentRoom?.isActive}" class="w-3 h-3 rounded-full mr-2"></span>
                                <span x-text="currentRoom?.isActive ? 'Aktif' : 'Tidak Aktif'" :class="{'text-green-600 font-medium': currentRoom?.isActive, 'text-gray-500': !currentRoom?.isActive}"></span>
                            </div>
                        </div>

                        <div class="py-3">
                            <p class="text-sm text-gray-500">Waktu Saat Ini</p>
                            <p class="font-medium text-gray-900 mt-1" x-text="currentTime"></p>
                        </div>

                        <template x-if="currentRoom?.isActive">
                            <div>
                                <div class="py-3">
                                    <p class="text-sm text-gray-500">Jadwal Penggunaan</p>
                                    <p class="font-medium text-gray-900 mt-1" x-text="currentRoom?.startTime + ' - ' + currentRoom?.endTime"></p>
                                </div>

                                <div class="py-3">
                                    <p class="text-sm text-gray-500">Pengguna</p>
                                    <p class="font-medium text-gray-900 mt-1" x-text="currentRoom?.user"></p>
                                </div>

                                <div class="py-3">
                                    <p class="text-sm text-gray-500">Kegiatan</p>
                                    <p class="font-medium text-gray-900 mt-1" x-text="currentRoom?.activity"></p>
                                </div>
                            </div>
                        </template>

                        <template x-if="!currentRoom?.isActive">
                            <div class="py-3">
                                <p class="text-gray-700">Ruangan tidak sedang digunakan.</p>
                            </div>
                        </template>
                    </div>

                    <!-- Footer -->
                    <div class="bg-gray-50 px-4 py-3 rounded-b-lg text-right">
                        <button @click="showModal = false" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alpine.js helper for x-cloak -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</body>

</html>