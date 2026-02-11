@extends('dashboard.layouts.master')
@section('title', 'Floorplan Bookings')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>Floorplan Bookings</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ __('backend.home') }}</a> /
                    <a>Floorplan Bookings</a>
                </small>
            </div>

            <div class="p-a">
                <form method="GET" action="{{ route('floorplanList') }}" class="row">
                    <div class="col-md-4 m-b">
                        <input type="text" name="email" value="{{ request('email') }}" class="form-control"
                               placeholder="Search by email">
                    </div>
                    <div class="col-md-4 m-b">
                        <input type="text" name="boothtitle" value="{{ request('boothtitle') }}" class="form-control"
                               placeholder="Search by booth title">
                    </div>
                    <div class="col-md-4 m-b">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="{{ route('floorplanList') }}" class="btn btn-default">Reset</a>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped m-b-0">
                    <thead class="dker">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Booth</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th style="width: 110px;">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($floorplans as $floorplan)
                        <tr>
                            <td>{{ $floorplan->id }}</td>
                            <td>{{ $floorplan->name ?? '-' }}</td>
                            <td>{{ $floorplan->email ?? '-' }}</td>
                            <td>{{ $floorplan->phone ?? '-' }}</td>
                            <td>{{ $floorplan->company ?? '-' }}</td>
                            <td>
                                {{ $floorplan->boothtitle ?? '-' }}
                                @if(!empty($floorplan->boothno))
                                    <br><small>No: {{ $floorplan->boothno }}</small>
                                @endif
                            </td>
                            <td>{{ $floorplan->paymenttype ?? '-' }}</td>
                            <td>
                                @php $status = $floorplan->status ?? 'pending'; @endphp
                                <span class="label {{ $status === 'approved' ? 'success' : ($status === 'rejected' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                            <td>{{ $floorplan->created_at ?? '-' }}</td>
                            <td>
                                <a href="{{ route('floorplansView', $floorplan->id) }}" class="btn btn-xs btn-info">
                                    View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No floorplan bookings found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-a b-t">
                <div class="row">
                    <div class="col-sm-6">
                        <small>Total records: {{ $stats->total ?? 0 }}</small>
                    </div>
                    <div class="col-sm-6 text-right">
                        {{ $floorplans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
