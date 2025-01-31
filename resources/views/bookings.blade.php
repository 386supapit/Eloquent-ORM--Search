<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Booking List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Booking ID</th>
                    <th class="border px-4 py-2">Customer Name</th>
                    <th class="border px-4 py-2">Room Type</th>
                    <th class="border px-4 py-2">Check-in Date</th>
                    <th class="border px-4 py-2">Check-out Date</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="border px-4 py-2">{{ $booking->id }}</td>
                        <td class="border px-4 py-2">{{ $booking->customer->name }}</td> 
                        <td class="border px-4 py-2">{{ $booking->room->roomtype->type }}</td>
                        <td class="border px-4 py-2">{{ $booking->check_in }}</td>
                        <td class="border px-4 py-2">{{ $booking->check_out }}</td>
                        <td class="border px-4 py-2">{{ $booking->status }}</td>
                        <td class="border px-4 py-2">{{ $booking->total_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
