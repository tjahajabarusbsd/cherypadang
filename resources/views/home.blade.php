<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHERY - PADANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

    <style>
        .cover {
            background-image: url("images/background.webp");
            background-size: cover;
            background-position: center;
            /* make the background darker but not the text */
            backdrop-filter: opacity(0.2);
        }

        .judul {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            letter-spacing: 1rem;
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .subjudul {
            font-family: 'Playfair', sans-serif;
            font-weight: 500;
            font-size: 3rem;
            letter-spacing: .3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .bg-dark {
            background-color: #000 !important;
        }

        .form-control,
        .form-select {
            /* grey background */
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>

</head>

<body class="container-fluid bg-dark vh-100 p-0">
    <div class="cover d-flex flex-column justify-content-between align-items-center h-50 p-5">
        <h1 class="judul text-light text-center">CHERY THETA AUTO</h1>

        <h1 class="subjudul text-light text-center">Segera Hadir di Padang</h1>

        <div>&nbsp;</div>
    </div>

    <div class="container">
        <h1 class="subjudul fs-3 text-light text-center pt-3 pb-2">Hubungi Kami</h1>
        @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif

        <form id="contactUsForm" action="{{ route('send.email') }}" method="POST" class="bg-dark p-5 pt-0">
            @csrf

            <!-- Nama -->
            <div class="form-floating mb-3">
                <input type="text" name="nama" class="form-control" id="floatingNama" placeholder="Nama" required>
                <label for="floatingNama">Nama Anda</label>
            </div>

            <!-- Email -->
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
                <label for="floatingInput">Email untuk dihubungi</label>
            </div>

            <!-- Minat -->
            <div class="form-floating mb-3">
                <select name="minat" class="form-select" id="floatingSelect" required>
                    <option value="">- Pilih Chery yang diminati -</option>
                    <option value="tiggo">Chery Tiggo</option>
                    <option value="omoda">Chery Omoda</option>
                </select>
                <label for="floatingSelect">Chery yang diminati</label>
            </div>

            <!-- Pesan -->
            <div class="form-floating mb-3">
                <textarea name="pesan" class="form-control" id="floatingTextarea" style="height: 100px" required></textarea>
                <label for="floatingTextarea">Pesan tambahan</label>
            </div>

            <!-- Tombol Submit -->
            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
            <div class="col-12 d-flex flex-column align-items-center">
                <button type="submit" id="submitButton" class="btn btn-light text-dark btn-lg p-3 px-5">
                    Kirim
                </button>
                <small class="text-white-50 mt-3">Situs ini dilindungi oleh reCAPTCHA dan berlaku Kebijakan Privasi Google.</small>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        const form = document.getElementById('contactUsForm');
        const btn = document.getElementById('submitButton');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            btn.disabled = true;
            btn.innerText = 'Mengirim...';

            grecaptcha.ready(function () {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'submit'}).then(function (token) {
                    document.getElementById('recaptchaResponse').value = token;
                    form.submit(); // submit form setelah token ditambahkan
                });
            });
        });
    </script>
</body>

</html>