<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Airbnb Bookings</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: #f4f5f7;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background: #667eea;
      color: white;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding-top: 30px;
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }
    .sidebar h2 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 40px;
    }
    .sidebar a {
      display: block;
      padding: 12px 25px;
      color: white;
      text-decoration: none;
      font-weight: 500;
      border-left: 4px solid transparent;
      transition: all 0.3s;
    }
    .sidebar a:hover {
      background: rgba(255,255,255,0.1);
      border-left: 4px solid #FF385C;
    }
    .sidebar a i {
      margin-right: 10px;
    }

    /* Main Content */
    .main-content {
      margin-left: 240px;
      padding: 30px;
      width: calc(100% - 240px);
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: white;
      padding: 15px 25px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      margin-bottom: 25px;
    }

    .stats-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .stat-card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      gap: 20px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .stat-card:hover {
      transform: translateY(-5px);
    }
    .stat-icon {
      font-size: 40px;
      color: #667eea;
      background: #e0e7ff;
      padding: 12px;
      border-radius: 12px;
    }
    .stat-info h5 {
      margin: 0;
      font-size: 14px;
      color: #666;
    }
    .stat-info h3 {
      margin: 0;
      color: #333;
      font-weight: bold;
    }

    .table thead {
      background-color: #667eea;
      color: white;
    }

    .btn-edit {
      background-color: #667eea;
      color: white;
      border: none;
      padding: 5px 12px;
      border-radius: 6px;
    }
    .btn-edit:hover {
      background-color: #5a67d8;
    }
    .btn-delete {
      background-color: #FF385C;
      color: white;
      border: none;
      padding: 5px 12px;
      border-radius: 6px;
    }
    .btn-delete:hover {
      background-color: #E31C5F;
    }

    footer {
      text-align: center;
      padding: 15px;
      color: #777;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .main-content {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2><i class="bi bi-house-door"></i>KampalaStays Admin</h2>
    <a href="{{ url('/index') }}"><i class="bi bi-house"></i> Home</a>
    <a href="{{ route('booking.show') }}"><i class="bi bi-plus-circle"></i> New Booking</a>
    <a href="{{ route('booking.display') }}"><i class="bi bi-table"></i> Display Bookings</a>
    <!-- <a href="#"><i class="bi bi-bar-chart"></i> Reports</a>
    <a href="#"><i class="bi bi-gear"></i> Settings</a> -->
    <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <div class="header">
      <h3>Dashboard Overview</h3>
      <a href="{{ route('booking.show') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> Add Booking
      </a>
    </div>

    <!-- Stats Cards -->
    <div class="stats-cards">
      <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
        <div class="stat-info">
          <h5>Total Bookings</h5>
          <h3>{{ $totalBookings ?? 0 }}</h3>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
        <div class="stat-info">
          <h5>Total Guests</h5>
          <h3>{{ $totalGuests ?? 0 }}</h3>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-calendar-event-fill"></i></div>
        <div class="stat-info">
          <h5>Upcoming Check-ins (7 days)</h5>
          <h3>{{ $upcomingCheckins ?? 0 }}</h3>
        </div>
      </div>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Bookings Table -->
    <div class="card p-3 shadow-sm">
      <table class="table table-striped align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Package</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Guests</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bookings as $booking)
          <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->firstName }}</td>
            <td>{{ $booking->lastName }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ ucfirst($booking->packageoption) }}</td>
            <td>{{ $booking->checkIn }}</td>
            <td>{{ $booking->checkOut }}</td>
            <td>{{ $booking->guests }}</td>
            <td>
              <a href="{{ route('edit', $booking->id) }}" class="btn-edit btn-sm">
                <i class="bi bi-pencil"></i>
              </a>
              <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete btn-sm" onclick="return confirm('Delete this booking?')">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="10" class="text-center text-muted">No bookings found yet.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <footer>
      &copy; 2025 Airbnb Booking System — Admin Panel
    </footer>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>