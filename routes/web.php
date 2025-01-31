<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Booking;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Courses;
use App\Models\Register;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/products', function () {
    $products = Product::all();
    return view('products', compact('products'));
});
Route::get('/customers', function () {
    $Customers = Customer::all();
    return view('customers', compact('Customers'));
});
Route::get('/orders', function () {
    $orders = Order::all();
    return view('orders', compact('orders'));
});
Route::get('/orderdetails', function () {
    $orderDetails = OrderDetail::all();
    return view('orderdetails', compact('orderDetails'));
});
Route::get('/rooms', function () {
    $rooms = Room::with('roomType')->get();
    return view('rooms', compact('rooms'));
});

Route::get('/roomtypes', function () {
    $roomTypes = RoomType::all();
    return view('roomtypes', compact('roomTypes'));
});
Route::get('/bookings', function () {
    $bookings = Booking::with('Customer')->get();
    return view('bookings', compact('bookings'));
});
Route::get('/students', function () {
    $students = Student::all();
    return view('students', compact('students'));
});
Route::get('/teachers', function () {
    $teachers = Teacher::all();
    return view('teachers', compact('teachers'));
});
Route::get('/courses', function () {
    $courses = Courses::with('teacher')->get();
    return view('courses', compact('courses'));
});
Route::get('/registers', function () {
    $registers = Register::with(['student', 'courses'])->get();
    return view('registers', compact('registers'));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
