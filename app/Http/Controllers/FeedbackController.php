<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\FeedbackPhoto;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }
    public function store(Request $request)
    {
        // validasi
        $data = $request->validate([
            'panelist_name' => 'nullable|string|max:255',
            'qr_code' => 'required|string|max:255',
            'color' => 'required|integer|min:0|max:7',
            'aroma' => 'required|integer|min:0|max:7',
            'texture_creamy' => 'required|integer|min:0|max:7',
            'texture_smooth' => 'required|integer|min:0|max:7',
            'sweet' => 'required|integer|min:0|max:7',
            'bitter' => 'required|integer|min:0|max:7',
            'alcohol' => 'required|integer|min:0|max:7',
            'note' => 'nullable|string',
            'photos' => 'nullable|array',
        ]);

        // total score
        $data['total_score'] =
            $data['color'] +
            $data['aroma'] +
            $data['texture_creamy'] +
            $data['texture_smooth'] +
            $data['sweet'] +
            $data['bitter'] +
            $data['alcohol'];

        // Simpan/update berdasarkan QR Code
        $feedback = Feedback::updateOrCreate(
            ['qr_code' => $data['qr_code']],
            [
                'panelist_name' => $data['panelist_name'] ?? null,
                'color' => $data['color'],
                'aroma' => $data['aroma'],
                'texture_creamy' => $data['texture_creamy'],
                'texture_smooth' => $data['texture_smooth'],
                'sweet' => $data['sweet'],
                'bitter' => $data['bitter'],
                'alcohol' => $data['alcohol'],
                'total_score' => $data['total_score'],
                'note' => $data['note'] ?? null,
            ]
        );

        // Folder upload
        $uploadPath = public_path('uploads');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // Delete foto lama jika update
        if (!$feedback->wasRecentlyCreated) {
            $oldPhotos = FeedbackPhoto::where('feedback_id', $feedback->id)->get();

            foreach ($oldPhotos as $old) {
                $oldFilePath = public_path($old->photo_path);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
                $old->delete();
            }
        }

        // Simpan semua foto baru
        if (!empty($data['photos'])) {
            foreach ($data['photos'] as $base64Image) {
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
                $fileName = 'photo_' . time() . '_' . uniqid() . '.png';
                file_put_contents($uploadPath . '/' . $fileName, $imageData);

                FeedbackPhoto::create([
                    'feedback_id' => $feedback->id,
                    'photo_path' => 'uploads/' . $fileName,
                ]);
            }
        }

        $consoleMessage = $feedback->wasRecentlyCreated
            ? '✅ Data baru disimpan untuk QR: ' . $data['qr_code']
            : '🔄 Data diperbarui untuk QR: ' . $data['qr_code'];

        return redirect()
            ->back()
            ->with('success', 'Feedback berhasil disimpan!')
            ->with('console', $consoleMessage);
    }

    public function index()
    {
        $feedbacks = Feedback::with('photos')->latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    public function show($id)
    {
        $feedback = Feedback::with('photos')->findOrFail($id);
        return view('feedback.show', compact('feedback'));
    }
}
