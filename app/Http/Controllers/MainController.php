<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function index() {
        // Объединяем таблицы `reviews` и `masters` для получения отзывов с именами мастеров
        $reviews = DB::table('reviews')
                     ->join('masters', 'reviews.master_id', '=', 'masters.master_id')
                     ->select('reviews.desc', 'reviews.name as reviewer_name', 'masters.name as master_name')
                     ->get();
        
        $masters = DB::table('masters')->get();
        return view('index', compact('reviews', 'masters'));
    }
    
    public function booking(){
        $masters = DB::table('masters')->get();
        return view('booking', compact('masters'));
    }
    public function master(){
        $masters = DB::table('masters')->get();
        return view('master', compact('masters'));
    }
    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'email' => 'required|email',
            'service_id' => 'required|exists:masters,master_id', 
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        // Создание нового назначения
        DB::table('appointments')->insert([
            'email' => $request->email,
            'appointment_time' => $request->date . ' ' . $request->time, 
            'master_id' => $request->service_id,
        ]);

        // Перенаправление или возврат сообщения
        return redirect()->back()->with('success', 'Запись успешно создана!');
    }
    public function store_rew(Request $request)
    {
        // Валидация данных
        $request->validate([
            'master_id' => 'required|exists:masters,master_id', // Измените на master_id
            'desc' => 'required|string|max:1000',
            'name' => 'required|string|max:255',
        ]);

        

        // Сохранение отзыва в базе данных
        DB::table('reviews')->insert([
            'master_id' => $request->master_id,
            'desc' => $request->desc,
            'name' => $request->name,
        ]);

        // Перенаправление с сообщением об успешном добавлении отзыва
        return redirect()->back()->with('success', 'Отзыв успешно добавлен!');
    }
}
