@extends('frontEnd.layouts.master')

@section('title', 'Sign Up - FinSphere Expo Kuwait')
<!-- Include Toastify CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<style>
    /* Optional custom styles for Toastify */
    .toastify {
        font-weight: bold;
    }
</style>
@section('content')
<div class="fk-auth-wrapper min-h-screen flex items-center justify-center bg-gray-100 p-6">
    <div class="fk-auth-card bg-white rounded-3xl shadow-2xl p-10 w-full max-w-md">
        <h2 class="fk-auth-title text-3xl font-black mb-2">Create Account</h2>
        <p class="fk-auth-subtitle text-gray-500 mb-6">Join FinSphere Expo</p>
 <!-- Toastify Alerts -->
        @if (session('success'))
            <script>
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50",
                    stopOnFocus: true
                }).showToast();
            </script>
        @endif

        @if ($errors->any())
            <script>
                Toastify({
                    text: "{{ $errors->first() }}",
                    duration: 4000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#f44336",
                    stopOnFocus: true
                }).showToast();
            </script>
        @endif



        <form class="fk-auth-form space-y-4" method="POST" action="{{ route('sportsRegister') }}">
            @csrf

            <input type="text" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" name="name" placeholder="Full name" required>

            <input type="email" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" name="email" placeholder="Email address" required>

            <input type="tel" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" name="phone" placeholder="Phone number" required>

            <input type="text" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" name="nationalities" placeholder="Location" required>

            <div class="fk-input-wrapper relative">
                <input type="password" id="password" name="password" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" placeholder="Password" required>
                <i class="fa fa-eye fk-eye-toggle absolute right-3 top-3 cursor-pointer text-gray-400" data-target="password"></i>
            </div>

            <div class="fk-input-wrapper relative">
                <input type="password" id="confirm-password" name="real_password" class="fk-input w-full p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400" placeholder="Confirm password" required>
                <i class="fa fa-eye fk-eye-toggle absolute right-3 top-3 cursor-pointer text-gray-400" data-target="confirm-password"></i>
            </div>

            <button type="submit" class="fk-btn-primary w-full bg-orange-500 text-white font-black py-3 rounded-xl hover:bg-orange-600 transition">Register</button>
        </form>

        <p class="fk-switch text-center mt-6 text-gray-500 text-sm">
            Already have an account?
            <a href="{{ url('/login') }}" class="text-orange-500 font-bold hover:underline">Sign in</a>
        </p>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('click', function(e) {
    const icon = e.target.closest('.fk-eye-toggle');
    if (!icon) return;

    const input = document.getElementById(icon.dataset.target);
    const isPassword = input.type === 'password';

    input.type = isPassword ? 'text' : 'password';

    icon.classList.toggle('fa-eye', !isPassword);
    icon.classList.toggle('fa-eye-slash', isPassword);
});
</script>
@endsection
