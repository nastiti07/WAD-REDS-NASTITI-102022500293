<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembicara</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Profil Detail Narasumber</h1>
    </header>

    <main>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h2>{{ $speaker->name }}</h2>
            <hr style="margin: 1rem 0; border: 0; border-top: 1px solid #eee;">
            <p><strong>Bidang Keahlian:</strong> {{ $speaker->expertise }}</p>
            <p><strong>Riwayat Institusi:</strong> {{ $speaker->institution }}</p>
            <p><strong>Tautan Portofolio:</strong> <a href="{{ $speaker->portfolio_link ?? '#' }}" target="_blank" style="color: #3498db;">{{ $speaker->portfolio_link ?? 'portfolio.example.com' }}</a></p>
            
            <div style="margin-top: 2rem;">
                <a href="{{ route('speakers.index') }}" class="btn" style="background-color: #7f8c8d;">← Kembali ke Daftar Pembicara</a>
            </div>
        </div>
    </main>

    <footer>
        <p>Sistem Pengelolaan Event & Workshop - Tugas Pengembangan Aplikasi Web</p>
    </footer>
</body>
</html>