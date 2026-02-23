@extends('dashboard.layouts.master')
@section('title', 'View Floorplan Booking')

@section('content')
    @php
        $companyLogoUrl = null;
        if (!empty($floorplan->company_logo ?? null)) {
            $logoPath = trim((string) $floorplan->company_logo);
            if (filter_var($logoPath, FILTER_VALIDATE_URL)) {
                $companyLogoUrl = $logoPath;
            } else {
                $logoPath = ltrim(str_replace('\\', '/', $logoPath), '/');
                if (str_starts_with($logoPath, 'public/')) {
                    $companyLogoUrl = asset('storage/' . ltrim(substr($logoPath, 7), '/'));
                } elseif (str_starts_with($logoPath, 'storage/')) {
                    $companyLogoUrl = asset($logoPath);
                } elseif (str_starts_with($logoPath, 'uploads/')) {
                    $companyLogoUrl = asset($logoPath);
                } elseif (str_starts_with($logoPath, 'company_logos/')) {
                    $coreStorageFile = base_path('storage/app/public/' . $logoPath);
                    if (is_file($coreStorageFile)) {
                        $companyLogoUrl = asset('core/storage/app/public/' . $logoPath);
                    } else {
                        $companyLogoUrl = asset('storage/' . $logoPath);
                    }
                } else {
                    $coreStorageFile = base_path('storage/app/public/company_logos/' . $logoPath);
                    if (is_file($coreStorageFile)) {
                        $companyLogoUrl = asset('core/storage/app/public/company_logos/' . $logoPath);
                    } else {
                        $companyLogoUrl = asset('storage/company_logos/' . $logoPath);
                    }
                }
            }
        }
    @endphp
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>Floorplan Booking #{{ $floorplan->id }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ __('backend.home') }}</a> /
                    <a href="{{ route('admin.floorplanList') }}">Floorplan Bookings</a> /
                    <a>View</a>
                </small>
            </div>

            <div class="p-a">
                <a href="{{ route('admin.floorplanList') }}" class="btn btn-default m-b">Back to List</a>

                <div class="row">
                    <div class="col-md-7">
                        <table class="table table-bordered">
                            <tbody>
                            <tr><th style="width: 220px;">Name</th><td>{{ $floorplan->name ?? '-' }}</td></tr>
                            <tr><th>Email</th><td>{{ $floorplan->email ?? '-' }}</td></tr>
                            <tr><th>Phone</th><td>{{ $floorplan->phone ?? '-' }}</td></tr>
                            <tr><th>Company</th><td>{{ $floorplan->company ?? '-' }}</td></tr>
                            <tr><th>Referral Code</th><td>{{ $floorplan->referal_code ?? '-' }}</td></tr>
                            <tr><th>Booth Number</th><td>{{ $floorplan->boothno ?? '-' }}</td></tr>
                            <tr><th>Booth Title</th><td>{{ $floorplan->boothtitle ?? '-' }}</td></tr>
                            <tr><th>Booth Size</th><td>{{ $floorplan->boothsize ?? '-' }}</td></tr>
                            <tr><th>Booth Amount</th><td>{{ $floorplan->boothammount ?? '-' }}</td></tr>
                            <tr><th>Payment Type</th><td>{{ $floorplan->paymenttype ?? '-' }}</td></tr>
                            <tr><th>Network Type</th><td>{{ $floorplan->networktype ?? '-' }}</td></tr>
                            <tr><th>Company URL</th><td>{{ $floorplan->company_url ?? '-' }}</td></tr>
                            <tr>
                                <th>Company Logo</th>
                                <td>
                                    @if(!empty($companyLogoUrl))
                                        <a href="{{ $companyLogoUrl }}" target="_blank" rel="noopener">
                                            <img src="{{ $companyLogoUrl }}" alt="Company Logo" style="max-height: 80px; width: auto; border: 1px solid #ddd; border-radius: 6px; padding: 4px;">
                                        </a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Payment Proof</th>
                                <td>
                                    @if(!empty($floorplan->file))
                                        <a href="{{ $floorplan->file }}" target="_blank">Open File</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @php $status = $floorplan->status ?? 'pending'; @endphp
                                    <span class="label {{ $status === 'approved' ? 'success' : ($status === 'rejected' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($status) }}
                                    </span>
                                </td>
                            </tr>
                            <tr><th>Approval Message</th><td>{{ $floorplan->approval_message ?? '-' }}</td></tr>
                            <tr><th>Updated</th><td>{{ $floorplan->updated_at ?? '-' }}</td></tr>
                            <tr><th>Created</th><td>{{ $floorplan->created_at ?? '-' }}</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-5">
                        <div class="box">
                            <div class="box-header">
                                <h4>Update Approval Status</h4>
                            </div>
                            <div class="p-a">
                                <form action="{{ route('admin.floorplans.approve', $floorplan->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="pending" {{ ($floorplan->status ?? 'pending') === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ ($floorplan->status ?? '') === 'approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="rejected" {{ ($floorplan->status ?? '') === 'rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Name</label>
                                        <input type="text" name="profile_name" class="form-control"
                                               value="{{ old('profile_name', auth()->user()->name ?? '') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company URL</label>
                                        <input type="url" name="company_url" class="form-control"
                                               value="{{ old('company_url', $floorplan->company_url ?? '') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Logo</label>
                                        <input type="file" name="company_logo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" rows="4">{{ old('message', $floorplan->approval_message ?? '') }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
