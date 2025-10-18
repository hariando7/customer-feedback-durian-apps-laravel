<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Durian Apps || Great Giant Foods</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
</head>

<body class="min-h-screen bg-gradient-to-br from-[#E7C952] to-[#E7C952] flex items-center justify-center p-6">
    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-lg">
        <img src="/DurianApps.jpg" class="m-auto lg:w-48" alt="Test">
        <h1 class="text-2xl font-extrabold text-[#D4B63F] tracking-wide text-center">
            📝 Customer Feedback Durian 📝
        </h1>
        <p class="text-gray-500 text-sm md:text-lg mt-1 text-center mb-6">
            Great Giant Foods
        </p>

        <hr class="border-t border-[#E7C952]/30 my-2" />

        <div class="block text-sm md:text-lg font-medium text-black mb-4 mt-4 text-justify">
            <span class="text-red-500">*Keterangan:</span> Panelis diminta melakukan analisis sensori berdasarkan
            intensitas setiap parameter yang diamati, mulai dari yang paling lemah hingga yang paling kuat. Penilaian
            dilakukan dengan memberikan skor pada rentang 0 hingga 7, di mana semakin tinggi skor menunjukkan intensitas
            yang semakin kuat.
        </div>

        {{-- Alert sukses --}}
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded-lg mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Alert error --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded-lg mb-4">
                <ul class="list-disc ml-5 text-sm">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <hr class="border-t border-[#E7C952]/30 my-2" />

        <form action="{{ route('feedback.store') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Scanner --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">QR Buah</label>
                <div class="flex gap-2">
                    <input id="qr_value" type="text" name="qr_code" placeholder="Hasil scan muncul di sini..."
                        value="{{ old('qr_code') }}" required
                        class="flex-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm px-3 py-2">
                    <button type="button" id="startScan"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-lg px-4 py-2 transition duration-200">
                        📸 Scan Disini
                    </button>
                </div>
            </div>

            {{-- Kamera --}}
            <div id="qr-reader"
                class="hidden mt-4 w-full h-96 border-2 border-dashed border-yellow-400 rounded-lg flex items-center justify-center bg-yellow-50">
                <p class="text-gray-400 text-sm">Kamera akan muncul di sini...</p>
            </div>

            {{-- Nama --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Nama Lengkap Panelis</label>
                <input type="text" name="panelist_name" value="{{ old('panelist_name') }}"
                    placeholder="Masukkan nama lengkap panelis..."
                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm px-3 py-2">
            </div>

            @php
                $items = [
                    'color' => 'Color',
                    'aroma' => 'Aroma',
                    'texture_creamy' => 'Texture Creamy',
                    'texture_smooth' => 'Texture Smooth',
                    'sweet' => 'Sweet',
                    'bitter' => 'Bitter',
                    'alcohol' => 'Alcohol',
                ];
            @endphp

            {{-- Input nilai --}}
            @foreach ($items as $key => $label)
                <div>
                    <label class="block font-semibold text-gray-700 mb-1">{{ $label }} (0 - 7)</label>
                    <input type="number" name="{{ $key }}" min="0" max="7"
                        value="{{ old($key, 0) }}" required
                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm px-3 py-2">
                </div>
            @endforeach

            {{-- Catatan --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Catatan</label>
                <textarea name="note" placeholder="Tambahkan catatan jika diperlukan..."
                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm px-3 py-2 h-24">{{ old('note') }}</textarea>
            </div>

            {{-- foto --}}
            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-1">Ambil Foto Buah</label>
                <div class="flex flex-col items-center gap-3">
                    <video id="camera" autoplay playsinline class="hidden w-64 h-48 border rounded-lg"></video>
                    <canvas id="photoCanvas" class="hidden"></canvas>
                    <div id="photoGallery" class="flex flex-wrap gap-2 justify-center"></div>
                    <input type="hidden" name="photos[]" id="photoInputs">
                    <div class="flex gap-2 mt-2">
                        <button type="button" id="startCamera"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg px-4 py-2">
                            🎥 Buka Kamera
                        </button>
                        <button type="button" id="capturePhoto"
                            class="bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg px-4 py-2 hidden">
                            📸 Ambil Foto
                        </button>
                    </div>
                </div>
            </div>

            {{-- submit --}}
            <button type="submit"
                class="w-full rounded-lg py-2.5 duration-200 px-6 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-lg transition duration-200">
                Kirim Feedback
            </button>

            <a href="{{ route('feedback.index') }}"
                class="w-full inline-block text-center bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg py-2.5 transition duration-200">
                Lihat Hasil Feedback
            </a>
        </form>
    </div>

    @if (session('console'))
        <script>
            console.log(@json(session('console')));
        </script>
    @endif

    <!-- Scanner -->
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        const startBtn = document.getElementById("startScan");
        const qrReader = document.getElementById("qr-reader");
        const qrInput = document.getElementById("qr_value");

        let html5QrCode;

        startBtn.addEventListener("click", async () => {
            if (qrReader.classList.contains("hidden")) {
                qrReader.classList.remove("hidden");
                startBtn.innerText = "🛑 Stop";
                startScanner();
            } else {
                stopScanner();
            }
        });

        async function startScanner() {
            html5QrCode = new Html5Qrcode("qr-reader");
            const config = {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            };

            try {
                await html5QrCode.start({
                        facingMode: "environment"
                    },
                    config,
                    (decodedText) => {
                        console.log("✅ QR Code:", decodedText);
                        qrInput.value = decodedText;
                        alert("QR berhasil dibaca: " + decodedText);
                        stopScanner();
                    },
                    (errorMessage) => {
                        console.log("Scanning...", errorMessage);
                    }
                );
            } catch (err) {
                console.error("Gagal memulai scanner:", err);
            }
        }

        async function stopScanner() {
            if (html5QrCode) {
                await html5QrCode.stop();
                await html5QrCode.clear();
                html5QrCode = null;
            }
            qrReader.classList.add("hidden");
            startBtn.innerText = "📷 Scan Disini";
        }
    </script>

    <script>
        const startCameraBtn = document.getElementById("startCamera");
        const capturePhotoBtn = document.getElementById("capturePhoto");
        const video = document.getElementById("camera");
        const canvas = document.getElementById("photoCanvas");
        const gallery = document.getElementById("photoGallery");
        const form = document.querySelector("form");

        let stream;
        let photos = [];

        startCameraBtn.addEventListener("click", async () => {
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                video.srcObject = stream;
                video.classList.remove("hidden");
                capturePhotoBtn.classList.remove("hidden");
                startCameraBtn.disabled = true;
            } catch (err) {
                alert("Tidak dapat mengakses kamera: " + err);
            }
        });

        capturePhotoBtn.addEventListener("click", () => {
            const ctx = canvas.getContext("2d");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataUrl = canvas.toDataURL("image/png");

            photos.push(dataUrl);
            const img = document.createElement("img");
            img.src = dataUrl;
            img.className = "w-32 h-32 object-cover rounded-lg border";
            gallery.appendChild(img);
        });

        // submit form
        form.addEventListener("submit", () => {
            photos.forEach((photo, index) => {
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = `photos[${index}]`;
                input.value = photo;
                form.appendChild(input);
            });

            if (stream) stream.getTracks().forEach(track => track.stop());
        });
    </script>


</body>

</html>
