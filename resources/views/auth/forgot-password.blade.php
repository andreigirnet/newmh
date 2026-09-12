<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Recover Password'])
    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])

    <style>
        .auth-card {
            border: none;
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.07);
            border-radius: 16px;
        }
        .form-control {
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            border-radius: 8px;
            border-color: #e2e8f0;
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(59, 196, 190, 0.15);
            border-color: #3bc4be;
        }
        .btn-auth-primary {
            background-color: #0f172a;
            border-color: #0f172a;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .btn-auth-primary:hover {
            background-color: #1e293b;
            border-color: #1e293b;
        }
    </style>
</head>

<body class="authentication-bg bg-light">

<div class="account-pages pt-4 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-lg-11">
                <div class="card auth-card overflow-hidden">
                    <div class="row g-0">
                        <!-- Left Form Panel -->
                        <div class="col-lg-6 bg-white p-4 p-sm-5 d-flex flex-column justify-content-between">

                            <div>
                                <!-- Logo & Brand Header -->
                                <div class="text-center mb-4">
                                    <img src="/images/logo/smallLogo.webp" alt="Logo" height="52" class="mb-2">
                                    <div style="font-size: 22px; font-weight: 600; color: #1E4D2B;" class="mb-1">Manual Handling Ireland</div>
                                    <p class="text-muted fs-13">Secure account recovery</p>
                                </div>

                                <!-- Global Alerts -->
                                @if (session('success'))
                                    <div class="alert alert-success fs-13 py-2 border-0 mb-3">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger fs-13 py-2 border-0 mb-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger fs-13 py-2 border-0 mb-3">
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Instructions Header -->
                                <div class="mb-4">
                                    <h4 class="fw-bold text-dark fs-20 mb-1">Forgot Password?</h4>
                                    <p class="text-muted fs-14 mb-0">Enter your email address and we'll send you instructions to reset your password.</p>
                                </div>

                                <!-- Recovery Form -->
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label fs-13 text-dark fw-medium">Email Address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required placeholder="name@company.com" value="{{ old('email') }}">
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary btn-auth-primary text-white" type="submit">
                                            <i class="ri-loop-left-line me-1"></i> Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Footer Back to Login Link -->
                            <div class="text-center mt-4 pt-3 border-top">
                                <p class="text-muted fs-14 mb-0">Remember your password? <a href="{{ route('login') }}" class="text-dark fw-bold ms-1 link-offset-2 text-decoration-underline">Log In</a></p>
                            </div>

                        </div>

                        <!-- Right Image Panel with No Opacity Overlay -->
                        <div class="col-lg-6 d-none d-lg-block position-relative bg-white">
                            <img src="/images/login/registerLogin.jpg" alt="Authentication Visual" class="img-fluid h-100 w-100 object-fit-cover">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>
@include('layouts.shared/footer-scripts')

</body>

</html>
