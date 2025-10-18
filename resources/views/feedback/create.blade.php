<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durian Apps || Great Giant Foods</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #D4B63F 0%, #E7C952 100%);
            min-height: 100vh;
        }

        .card-container {
            animation: slideUp 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input-field {
            transition: all 0.3s ease;
            border: 2px solid #E7C952;
        }

        .input-field:focus {
            border-color: #D4B63F;
            box-shadow: 0 0 0 3px rgba(212, 182, 63, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #D4B63F 0%, #E7C952 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(212, 182, 63, 0.3);
        }

        .btn-primary:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .score-slider {
            accent-color: #D4B63F;
            width: 100%;
            height: 8px;
            border-radius: 5px;
            appearance: none;
            background: linear-gradient(to right, #fef3c7 0%, #fef3c7 var(--value), #ddd var(--value), #ddd 100%);
        }

        .score-slider::-webkit-slider-thumb {
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #D4B63F 0%, #E7C952 100%);
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(212, 182, 63, 0.4);
        }

        .score-slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #D4B63F 0%, #E7C952 100%);
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(212, 182, 63, 0.4);
            border: none;
        }

        .section-title {
            background: linear-gradient(135deg, #D4B63F 0%, #E7C952 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .alert-success {
            animation: slideDown 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .photo-item {
            animation: fadeIn 0.3s ease;
            position: relative;
            transition: all 0.3s ease;
        }

        .photo-item:hover {
            transform: scale(1.05);
        }

        .photo-item .delete-btn {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-item:hover .delete-btn {
            opacity: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .scanner-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 3px dashed #D4B63F;
        }

        .label-styling {
            color: #1f2937;
            font-weight: 600;
        }

        .header-section {
            background: linear-gradient(135deg, rgba(212, 182, 63, 0.1) 0%, rgba(231, 201, 82, 0.1) 100%);
            backdrop-filter: blur(10px);
        }

        .info-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-left: 4px solid #D4B63F;
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            .card-container {
                border-radius: 1.5rem;
                padding: 1rem;
            }

            .header-section {
                padding: 1.5rem 1rem !important;
                margin: -1rem -1rem 1rem -1rem !important;
            }

            .header-section img {
                width: 120px !important;
            }

            h1 {
                font-size: 1.5rem;
            }

            h3 {
                font-size: 1rem;
            }

            .grid {
                grid-template-columns: 1fr !important;
            }

            .photo-item img,
            video {
                width: 100px !important;
                height: 100px !important;
            }

            .btn-primary,
            button {
                padding: 0.75rem 1rem !important;
                font-size: 0.875rem;
            }
        }

        /* Landscape mode on mobile */
        @media (max-height: 600px) and (orientation: landscape) {
            body {
                padding: 0.5rem;
            }

            .card-container {
                padding: 0.75rem;
            }

            h1, h3 {
                margin-bottom: 0.5rem;
            }

            .space-y-6 > * + * {
                margin-top: 1rem;
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-3 py-6 sm:p-4 sm:py-12">
    <div class="card-container bg-white shadow-2xl rounded-3xl p-6 sm:p-8 w-full max-w-2xl">
        {{-- Header --}}
        <div class="header-section rounded-2xl p-6 sm:p-8 -m-6 sm:-m-8 mb-6 sm:mb-8">
            <img src="/DurianApps.jpg" class="mx-auto w-32 sm:w-40 mb-3 sm:mb-4" alt="Durian Apps">
            <h1 class="text-2xl sm:text-3xl font-extrabold section-title tracking-wide text-center mb-1 sm:mb-2">
                📝 Customer Feedback Durian 📝
            </h1>
            <p class="text-sm sm:text-base text-gray-600 text-center font-semibold">
                Great Giant Foods
            </p>
        </div>

        {{-- Alert Success --}}
        @if (session('success'))
            <div class="alert-success bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-800 px-4 sm:px-5 py-3 sm:py-4 rounded-lg mb-4 sm:mb-6 border-l-4 border-emerald-400 text-sm sm:text-base">
                <div class="flex items-start gap-2 sm:gap-3">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        {{-- Alert Error --}}
        @if ($errors->any())
            <div class="bg-gradient-to-r from-red-50 to-pink-50 text-red-800 px-4 sm:px-5 py-3 sm:py-4 rounded-lg mb-4 sm:mb-6 border-l-4 border-red-400 text-sm sm:text-base">
                <div class="flex gap-2 sm:gap-3">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $err)
                            <li class="text-xs sm:text-sm font-medium">• {{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        {{-- Info Box --}}
        <div class="info-box rounded-xl p-3 sm:p-4 mb-4 sm:mb-6 text-sm sm:text-base">
            <div class="flex gap-2 sm:gap-3 mb-2 sm:mb-3">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    <span class="font-bold text-red-600">Keterangan:</span>
                    <p class="text-xs sm:text-sm text-gray-700 mt-0.5 sm:mt-1">Panelis melakukan analisis berdasarkan intensitas setiap parameter. Penilaian pada rentang 0 hingga 7.</p>
                </div>
            </div>
            <a href="{{ route('feedback.index') }}"
                class="w-full inline-block text-center bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white font-bold rounded-lg py-2 sm:py-3 transition duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-sm sm:text-base">
                👁️👁️ Lihat Hasil Feedback 👁️👁️
            </a>
        </div>

        <form action="{{ route('feedback.store') }}" method="POST" class="space-y-4 sm:space-y-6">
            @csrf

            {{-- QR Scanner --}}
            <div>
                <label class="label-styling block mb-2 sm:mb-3 flex items-center gap-2 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    QR Code Buah
                </label>
                <div class="flex flex-col sm:flex-row gap-2">
                    <input id="qr_value" type="text" name="qr_code" placeholder="Hasil scan muncul di sini..."
                        value="{{ old('qr_code') }}" required
                        class="input-field flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg bg-gray-50 placeholder-gray-400 text-sm sm:text-base">
                    <button type="button" id="startScan"
                        class="btn-primary text-white font-semibold rounded-lg px-4 sm:px-5 py-2 sm:py-3 whitespace-nowrap shadow-lg text-sm sm:text-base">
                        📸 Scan
                    </button>
                </div>
            </div>

            {{-- Scanner Box --}}
            <div id="qr-reader" class="scanner-box hidden rounded-lg p-4 flex items-center justify-center min-h-80 sm:min-h-96 text-sm">
                <p class="text-gray-600 font-medium">Kamera akan muncul di sini...</p>
            </div>

            {{-- Nama Panelis --}}
            <div>
                <label class="label-styling block mb-2 sm:mb-3 flex items-center gap-2 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Nama Lengkap Panelis
                </label>
                <input type="text" name="panelist_name" value="{{ old('panelist_name') }}"
                    placeholder="Masukkan nama lengkap panelis..."
                    class="input-field w-full px-3 sm:px-4 py-2 sm:py-3 rounded-lg bg-gray-50 placeholder-gray-400 text-sm sm:text-base">
            </div>

            {{-- Scoring Section --}}
            <div class="space-y-3 sm:space-y-4">
                <h3 class="text-base sm:text-lg font-bold section-title">Penilaian (Skor 0-7)</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    @php
                        $items = [
                            'color' => ['Color', '🎨'],
                            'aroma' => ['Aroma', '👃'],
                            'texture_creamy' => ['Texture Creamy', '🟤'],
                            'texture_smooth' => ['Texture Smooth', '✨'],
                            'sweet' => ['Sweet', '🍯'],
                            'bitter' => ['Bitter', '😐'],
                            'alcohol' => ['Alcohol', '🍷'],
                        ];
                    @endphp

                    @foreach ($items as $key => $data)
                        <div class="bg-gradient-to-br from-yellow-50 to-amber-50 p-3 sm:p-4 rounded-lg border border-yellow-100">
                            <label class="label-styling block mb-2 sm:mb-3 text-sm sm:text-base flex items-center gap-2">
                                <span class="text-lg sm:text-xl">{{ $data[1] }}</span>
                                <span>{{ $data[0] }}</span>
                            </label>
                            <input type="range" name="{{ $key }}" min="0" max="7"
                                value="{{ old($key, 0) }}" required
                                class="score-slider"
                                onchange="this.style.setProperty('--value', (this.value/7)*100 + '%')"
                                style="--value: {{ (old($key, 0)/7)*100 }}%">
                            <div class="flex justify-between text-xs text-gray-500 mt-2">
                                <span>0</span>
                                <span id="display-{{ $key }}"
                                    class="font-bold text-yellow-600">{{ old($key, 0) }}</span>
                                <span>7</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Catatan --}}
            <div>
                <label class="label-styling block mb-2 sm:mb-3 flex items-center gap-2 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Catatan Tambahan
                </label>
                <textarea name="note" placeholder="Tambahkan catatan jika diperlukan..."
                    class="input-field w-full px-3 sm:px-4 py-2 sm:py-3 rounded-lg bg-gray-50 placeholder-gray-400 h-20 sm:h-24 resize-none text-sm sm:text-base">{{ old('note') }}</textarea>
            </div>

            {{-- Foto Buah --}}
            <div>
                <label class="label-styling block mb-3 sm:mb-4 flex items-center gap-2 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Ambil Foto Buah
                </label>

                <div class="flex flex-col items-center gap-3 sm:gap-4">
                    <video id="camera" autoplay playsinline
                        class="hidden w-full max-w-sm h-48 sm:h-64 border-2 border-yellow-300 rounded-lg object-cover"></video>
                    <canvas id="photoCanvas" class="hidden"></canvas>

                    <div id="photoGallery" class="w-full">
                        <div id="photoContainer" class="flex flex-wrap gap-2 sm:gap-3 justify-center"></div>
                    </div>

                    <input type="hidden" name="photos[]" id="photoInputs">

                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 justify-center w-full">
                        <button type="button" id="startCamera"
                            class="btn-primary text-white font-semibold rounded-lg px-4 sm:px-6 py-2 sm:py-3 shadow-lg text-sm sm:text-base flex-1 sm:flex-none">
                            🎥 Buka Kamera
                        </button>
                        <button type="button" id="capturePhoto"
                            class="hidden bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg px-4 sm:px-6 py-2 sm:py-3 transition duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-sm sm:text-base flex-1 sm:flex-none">
                            📸 Ambil Foto
                        </button>
                    </div>
                </div>
            </div>

            {{-- Submit --}}
            <div class="space-y-2 sm:space-y-3 pt-2 sm:pt-4">
                <button type="submit"
                    class="btn-primary w-full text-white font-bold rounded-lg py-2.5 sm:py-3 shadow-lg duration-300 hover:shadow-xl text-sm sm:text-base">
                    ✅ Kirim Feedback
                </button>
            </div>
        </form>
    </div>

    @if (session('console'))
        <script>
            console.log(@json(session('console')));
        </script>
    @endif

    {{-- Scanner --}}
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
            startBtn.innerText = "📸 Scan";
        }
    </script>

    {{-- Camera & Photo --}}
    <script>
        const startCameraBtn = document.getElementById("startCamera");
        const capturePhotoBtn = document.getElementById("capturePhoto");
        const video = document.getElementById("camera");
        const canvas = document.getElementById("photoCanvas");
        const photoContainer = document.getElementById("photoContainer");
        const form = document.querySelector("form");

        let stream;
        let photos = [];

        startCameraBtn.addEventListener("click", async () => {
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: { facingMode: "environment" }
                });
                video.srcObject = stream;
                video.classList.remove("hidden");
                capturePhotoBtn.classList.remove("hidden");
                startCameraBtn.disabled = true;
                startCameraBtn.classList.add("opacity-50");
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

            const photoDiv = document.createElement("div");
            photoDiv.className = "photo-item relative";
            photoDiv.innerHTML = `
                <img src="${dataUrl}" class="w-24 sm:w-28 h-24 sm:h-28 object-cover rounded-lg border-2 border-yellow-300 shadow-md">
                <button type="button" class="delete-btn absolute top-1 right-1 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center shadow-lg text-xs"
                    onclick="deletePhoto(this, ${photos.length - 1})">
                    ✕
                </button>
            `;
            photoContainer.appendChild(photoDiv);
        });

        window.deletePhoto = (btn, index) => {
            photos.splice(index, 1);
            btn.closest(".photo-item").remove();
        };

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

        // Score Display
        @php
            $scoreFields = ['color', 'aroma', 'texture_creamy', 'texture_smooth', 'sweet', 'bitter', 'alcohol'];
        @endphp

        @foreach ($scoreFields as $field)
            const slider{{ $loop->iteration }} = document.querySelector('input[name="{{ $field }}"]');
            if (slider{{ $loop->iteration }}) {
                slider{{ $loop->iteration }}.addEventListener('input', (e) => {
                    document.getElementById('display-{{ $field }}').textContent = e.target.value;
                    e.target.style.setProperty('--value', (e.target.value/7)*100 + '%');
                });
            }
        @endforeach
    </script>
</body>

</html>