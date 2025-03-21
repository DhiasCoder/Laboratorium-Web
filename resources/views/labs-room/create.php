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
            <!-- Contoh Lab Biologi -->
            <div x-data="{
                open: true, 
                rooms: [
                    { id: 1, name: 'Lab Biologi 1', isActive: true, startTime: '08:00', endTime: '10:30', user: 'Dr. Siti Aminah', activity: 'Praktikum Anatomi' }
                ]
            }" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
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

        <!-- Modal -->
        <div x-data="{
            showModal: false,
            currentRoom: null,
            currentTime: new Date().toLocaleTimeString(),
            timeRemaining: '',
            updateTime() {
                this.currentTime = new Date().toLocaleTimeString();
                if (this.currentRoom && this.currentRoom.isActive) {
                    const now = new Date();
                    const endTime = new Date();
                    let [hours, minutes] = this.currentRoom.endTime.split(':').map(Number);
                    endTime.setHours(hours, minutes, 0);
                    let diff = endTime - now;
                    if (diff > 0) {
                        let remainingHours = Math.floor(diff / (1000 * 60 * 60));
                        let remainingMinutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                        this.timeRemaining = `${remainingHours} jam ${remainingMinutes} menit`;
                    } else {
                        this.timeRemaining = 'Waktu habis';
                    }
                }
                setTimeout(() => this.updateTime(), 1000);
            }
        }"
            x-init="updateTime()"
            @open-modal.window="showModal = true; currentRoom = $event.detail"
            class="relative z-10" x-cloak>

            <div x-show="showModal" class="fixed inset-0 bg-black/30 backdrop-blur-sm"></div>

            <div x-show="showModal" class="fixed inset-0 flex items-center justify-center p-4">
                <div @click.away="showModal = false" class="bg-white rounded-lg shadow-xl w-full max-w-md">
                    <div class="p-4 text-white bg-green-600 rounded-t-lg">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold" x-text="currentRoom?.name"></h3>
                            <button @click="showModal = false" class="text-white hover:text-gray-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-5 divide-y divide-gray-200">
                        <p class="text-sm text-gray-500">Waktu Saat Ini</p>
                        <p class="font-medium text-gray-900 mt-1" x-text="currentTime"></p>

                        <template x-if="currentRoom?.isActive">
                            <div>
                                <p class="text-sm text-gray-500">Jadwal Penggunaan</p>
                                <p class="font-medium text-gray-900 mt-1" x-text="currentRoom?.startTime + ' - ' + currentRoom?.endTime"></p>
                                <p class="text-sm text-gray-500 mt-3">Waktu Tersisa</p>
                                <p class="font-medium text-gray-900 mt-1" x-text="timeRemaining"></p>
                            </div>
                        </template>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 rounded-b-lg text-right">
                        <button @click="showModal = false" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>