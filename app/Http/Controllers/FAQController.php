<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function showFaq()
    {
        $faqData = [
            [
                'category' => 'Umum',
                'questions' => [
                    ['question' => 'Apa itu FAQ?', 'answer' => 'FAQ adalah pertanyaan yang sering diajukan.'],
                    ['question' => 'Bagaimana cara menggunakan website?', 'answer' => 'Anda dapat...'],
                ],
            ],
            [
                'category' => 'Teknis',
                'questions' => [
                    ['question' => 'Bagaimana reset password?', 'answer' => 'Klik tombol lupa password...'],
                ],
            ],
        ];

        return view('faq', compact('faqData'));
    }
}
