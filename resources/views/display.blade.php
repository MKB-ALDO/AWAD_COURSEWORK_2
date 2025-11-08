<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <!-- Booking Summary -->
      <div class="m-5">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">← Back to Dashboard</a>
        </div>
                <div class="card m-5">
                    <table class="table  table-striped">
                        <h3 class="text-center fw-bold">Bookings made</h3>
                        <thead class="table-secondary">
                        <tr>
                        <th></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Package Option</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Number of Guests</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                        <tr>
                        <th>{{$booking->id}}</th>
                        <td>{{$booking->firstName}}</td>
                        <td>{{$booking->lastName}}</td>
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->phone}}</td>
                        <td>{{$booking->packageoption}}</td>
                        <td>{{$booking->checkIn}}</td>
                        <td>{{$booking->checkOut}}</td>
                        <td>{{$booking->guests}}</td>

                        <td>
                            
                            <div class="d-flex gap-2">
                                <a href="{{ route('edit', $booking->id) }}" class="btn btn-outline-danger">Edit</a>

                                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        

                        </td>
                        </tr>
                            
                        @empty
                            <tr>
                                <td>No Booking Added So Far</td>
                            </tr>
                        @endforelse
                        
                       
                       
                    </tbody>
                    </table>
                </div>
                    
                

</body>
</html>