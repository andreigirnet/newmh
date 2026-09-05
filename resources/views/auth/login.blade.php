<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Sign In'])
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
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            color: #334155;
            border: 1px solid #cbd5e1;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            font-family: inherit;
            width: 100%;
            box-shadow: 0 1px 2px rgba(0,0,0,0.02);
            transition: all 0.2s ease;
        }
        .google-btn:hover {
            background-color: #f8fafc;
            border-color: #94a3b8;
            color: #0f172a;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #94a3b8;
            font-size: 0.85rem;
            margin: 1.25rem 0;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }
        .divider::before { margin-right: .75em; }
        .divider::after { margin-left: .75em; }
    </style>
</head>

<body class="authentication-bg bg-light">

<div class="account-pages pt-4 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-lg-11">
                <div class="card auth-card overflow-hidden">
                    <div class="row g-0">
                        <!-- Left Image Panel with Overlay Branding -->
                        <div class="col-lg-6 d-none d-lg-block position-relative bg-dark">
                            <img src="/images/login/registerLogin.jpg" alt="Authentication Visual" class="img-fluid h-100 w-100 object-fit-cover">
                            <div class="position-absolute bottom-0 start-0 p-4 text-white">
                                <div class="badge bg-white text-dark mb-2 px-2 py-1 fw-semibold fs-11 rounded-pill">Secure Access</div>
                                <h5 class="text-white mb-1">Welcome back.</h5>
                                <p class="text-white-50 fs-13 mb-0">Log in to manage your account and trainings.</p>
                            </div>
                        </div>

                        <!-- Right Form Panel -->
                        <div class="col-lg-6 bg-white p-4 p-sm-5 d-flex flex-column justify-content-between">

                            <div>
                                <!-- Logo & Header -->
                                <div class="text-center mb-4">
                                    <img src="/images/logo/smallLogo.webp" alt="Logo" height="64" >
                                    <div style="font-size: 28px; font-weight: 600; color:#1E4D2B;" class="mb-3">Manual Handling Ireland</div>
                                    <h4 class="fw-bold text-dark fs-22 mb-1">Sign In</h4>
                                    <p class="text-muted fs-14">Enter your credentials to access your account.</p>
                                </div>

                                <!-- Global Alerts -->
                                @if (session('success'))
                                    <div class="alert alert-success fs-13 py-2 border-0 mb-3">
                                        {{ session('success') }}
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

                                <!-- Google Login Button -->
                                <div class="mb-3">
                                    <a href="{{ route('auth.google') }}" class="google-btn">
                                        <svg style="width: 18px; height: 18px; margin-right: 10px;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                                        </svg>
                                        <span>Continue with Google</span>
                                    </a>
                                </div>

                                <div class="divider">or sign in with email</div>

                                <!-- Login Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label fs-13 text-dark fw-medium">Email Address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress"
                                               placeholder="name@company.com" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <label for="password" class="form-label fs-13 text-dark fw-medium mb-0">Password</label>
                                            <a href="{{ route('password.request') }}" class="text-muted fs-13 text-decoration-underline">Forgot password?</a>
                                        </div>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="••••••••" required>
                                    </div>

                                    <div class="mb-3 text-muted" style="font-size: 11.5px;">
                                        By logging in, you acknowledge our
                                        <a href="{{ route('front.privacy') }}" class="text-primary text-decoration-underline">Privacy Policy</a>.
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary btn-auth-primary text-white" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Footer Register Link -->
                            <div class="text-center mt-4 pt-3 border-top">
                                <p class="text-muted fs-14 mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-dark fw-bold ms-1 link-offset-2 text-decoration-underline">Sign up</a></p>
                            </div>

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
