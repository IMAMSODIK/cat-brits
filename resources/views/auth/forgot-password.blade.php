<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Platform</title>
    <link rel="stylesheet" href="{{ asset('auth_assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Floating particles background -->
    <div class="particles" id="particles"></div>

    <div class="ctr">
        <div class="image-section">
            <div class="floating-card">
                <div class="logo">
                    <img src="{{ asset('own_assets/logo/logo.png') }}" alt="">
                </div>
            </div>
            <h2>Unlock Your English Potential</h2>
            <p>"Take smart notes that help you remember better. Track your progress and see your improvement!"</p>
            <div style="margin-top: 20px; font-size: 14px; opacity: 0.8;">
                <i class="fas fa-graduation-cap" style="margin-right: 5px;"></i>
                Yanks & Brits Managements
            </div>
        </div>

        <div class="form-section">
            <h2 class="title">
                <img src="{{ asset('own_assets/logo/logo.png') }}" alt="" width="20%">
            </h2>
            
            <h2 class="title">Forgot Password</h2>

            <div id="forgot-form" class="form active">
                <div class="alert alert-danger d-none" id="forgot-error">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <span id="forgot-error-message"></span>
                </div>

                <div class="alert alert-success d-none" id="forgot-success">
                    <i class="fas fa-check-circle me-2"></i>
                    <span id="forgot-success-message"></span>
                </div>


                <div class="input-group">
                    <label for="forgot-email"><i class="fas fa-envelope me-1"></i>Email</label>
                    <input type="email" id="forgot-email" placeholder="Enter your registered email">
                </div>

                <button class="btn text-white" type="button" id="forgot-submit">
                    <i class="fas fa-paper-plane me-2"></i>Send Reset Link
                </button>
            </div>
        </div>
    </div>


    <script src="{{ asset('auth_assets/scripts/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>

    <script>
        $(function() {
            $('#forgot-submit').click(function(e) {
                e.preventDefault();
                $('#forgot-error').addClass('d-none');
                let button = $(this);

                button.prop('disabled', true);
                $('body').css('cursor', 'wait');

                $.post({
                    url: '{{ route('password.email') }}',
                    data: {
                        email: $('#forgot-email').val(),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        button.prop('disabled', false);
                        $('body').css('cursor', 'default');
                        $('#forgot-success').removeClass('d-none').find('#forgot-success-message')
                            .text('Reset link sent to your email.');
                    },
                    error: function(xhr) {
                        button.prop('disabled', false);
                        $('body').css('cursor', 'default');
                        const res = xhr.responseJSON;
                        $('#forgot-error').removeClass('d-none').find('#forgot-error-message')
                            .text(res?.message || 'Something went wrong');
                    }
                });
            });
        });
    </script>
</body>

</html>
