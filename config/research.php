<?php

return [
    'profile' => [
        'name' => 'Rizqi Ghani Adinata',
        'degree' => 'S.Kom. (Cand.)',
        'role' => 'Junior Researcher & Full Stack Software Engineer',
        'institution' => 'Program Studi Sistem Informasi, Universitas Nahdlatul Ulama Al Ghazali (UNUGHA) Cilacap',
        'location' => 'Cilacap, Jawa Tengah, Indonesia',
        'institutional_email' => 'ghani.24ep10007@unugha.ac.id',
        'professional_emails' => ['ghani.adinata178@gmail.com', 'ghanisyifanur@gmail.com'],
        'whatsapp' => '+62895622668417',
        'github' => 'https://github.com/ghani24ep10007-spec',
        'github_secondary' => 'https://github.com/ghanisyifanur-analisis',
        'linkedin' => 'https://www.linkedin.com/in/rizqi-ghani-adinata-30210a445/',
        'scholar' => 'https://scholar.google.com/citations?user=ID_ANDA',
        'orcid' => 'https://orcid.org/0009-0000-XXXX-XXXX',
        'researchgate' => 'https://www.researchgate.net/profile/nama-anda',
        'sinta' => null,
        'research_areas' => ['Enterprise Architecture', 'Data Telemetry', 'Cyber Security Assessment', 'Applied Machine Learning', 'Web Systems'],
        'availability' => 'Open for research collaboration',
    ],
    // Isi metrik setelah pengukuran dan verifikasi; jangan mengklaim angka demonstrasi sebagai hasil nyata.
    'metrics' => [
        ['value' => '—', 'label' => 'Publikasi terverifikasi', 'note' => 'Tambahkan jumlah dan tautan publikasi nyata'],
        ['value' => '—', 'label' => 'Studi kasus terdokumentasi', 'note' => 'Hitung proyek yang benar-benar selesai'],
        ['value' => '—', 'label' => 'Metrik kualitas sistem', 'note' => 'Isi berdasarkan hasil pengujian yang dapat direproduksi'],
    ],
    'publications' => [
        ['slug' => 'deteksi-anomali-mini-siem', 'title' => 'Analisis Deteksi Anomali Trafik Jaringan Menggunakan Mini-SIEM Berbasis Node.js pada Lingkungan Terdistribusi', 'status' => 'Draft / placeholder', 'year' => 'Belum ditetapkan', 'venue' => 'Tambahkan nama jurnal atau konferensi setelah diterima', 'authors' => 'Rizqi Ghani Adinata', 'abstract' => 'Placeholder abstrak. Ganti dengan ringkasan penelitian yang benar-benar dilakukan, termasuk tujuan, metode, dataset, hasil, dan kesimpulan.', 'bibtex' => '@unpublished{adinata_minisiem, author={Adinata, Rizqi Ghani}, title={Analisis Deteksi Anomali Trafik Jaringan Menggunakan Mini-SIEM}, note={Draft; metadata publikasi belum diverifikasi}}', 'pdf' => null, 'code' => 'https://github.com/ghanisyifanur-analisis/cyberlab'],
        ['slug' => 'arsitektur-observabilitas-data', 'title' => 'Perancangan Arsitektur Observabilitas Data Digital Global Berbasis Open Data Telemetry', 'status' => 'Draft / placeholder', 'year' => 'Belum ditetapkan', 'venue' => 'Belum ditetapkan', 'authors' => 'Rizqi Ghani Adinata', 'abstract' => 'Placeholder abstrak. Lengkapi berdasarkan rancangan, sumber data terbuka, metode agregasi, dan evaluasi aktual.', 'bibtex' => '@unpublished{adinata_telemetry, author={Adinata, Rizqi Ghani}, title={Perancangan Arsitektur Observabilitas Data Digital Global}, note={Draft; metadata publikasi belum diverifikasi}}', 'pdf' => null, 'code' => 'https://github.com/ghanisyifanur-analisis/atlas-digital-world'],
        ['slug' => 'evaluasi-rbac-siakad', 'title' => 'Evaluasi Kinerja Role-Based Access Control (RBAC) pada Sistem Informasi Akademik Perguruan Tinggi', 'status' => 'Draft / placeholder', 'year' => 'Belum ditetapkan', 'venue' => 'Belum ditetapkan', 'authors' => 'Rizqi Ghani Adinata', 'abstract' => 'Placeholder abstrak. Masukkan rancangan eksperimen, skenario uji, hasil, dan keterbatasan setelah penelitian dilakukan.', 'bibtex' => '@unpublished{adinata_rbac, author={Adinata, Rizqi Ghani}, title={Evaluasi Kinerja Role-Based Access Control pada Sistem Informasi Akademik}, note={Draft; metadata publikasi belum diverifikasi}}', 'pdf' => null, 'code' => null],
        ['slug' => 'clustering-perilaku-pengunjung', 'title' => 'Implementasi Algoritma Pengelompokan Data pada Analitik Perilaku Pengunjung Web', 'status' => 'Draft / placeholder', 'year' => 'Belum ditetapkan', 'venue' => 'Belum ditetapkan', 'authors' => 'Rizqi Ghani Adinata', 'abstract' => 'Placeholder abstrak. Tambahkan algoritma, dataset, metrik evaluasi, dan hasil yang dapat direproduksi.', 'bibtex' => '@unpublished{adinata_clustering, author={Adinata, Rizqi Ghani}, title={Implementasi Algoritma Pengelompokan Data pada Analitik Perilaku Pengunjung Web}, note={Draft; metadata publikasi belum diverifikasi}}', 'pdf' => null, 'code' => null],
    ],
    'case_studies' => [
        ['slug' => 'cyberlab-mini-siem', 'name' => 'CyberLab — Mini-SIEM & Web Security Testing Suite', 'category' => 'Cyber Security & Telemetry', 'status' => 'Research prototype', 'problem' => 'Kebutuhan lingkungan uji keamanan aplikasi web dan pemantauan event keamanan dalam lingkungan pembelajaran terisolasi.', 'solution' => 'Laboratorium edukasi untuk demonstrasi pengujian keamanan dan inspeksi event. Rincian fitur dan hasil perlu disesuaikan dengan implementasi repository.', 'impact' => 'Dokumentasikan hasil uji, batasan lingkungan, konsumsi sumber daya, dan bukti reproduksi sebelum menambahkan klaim kuantitatif.', 'stack' => ['Node.js', 'Express', 'Socket.IO', 'Tailwind CSS', 'Linux'], 'repository' => 'https://github.com/ghanisyifanur-analisis/cyberlab', 'demo' => null],
        ['slug' => 'atlas-digital-world', 'name' => 'Atlas Digital World — Global Telemetry & Observability Dashboard', 'category' => 'Data Science & Analytics', 'status' => 'Open source', 'problem' => 'Eksplorasi dan penyajian data digital global membutuhkan proses agregasi dan visualisasi yang dapat ditelusuri.', 'solution' => 'Dashboard untuk eksplorasi data terbuka. Detail sumber dataset, rentang tahun, dan metode transformasi harus mengikuti dokumentasi repository.', 'impact' => 'Publikasikan definisi metrik, provenance dataset, dan batasan analisis agar hasil dapat direproduksi.', 'stack' => ['Python', 'JavaScript', 'Chart.js', 'REST API'], 'repository' => 'https://github.com/ghanisyifanur-analisis/atlas-digital-world', 'demo' => null],
        ['slug' => 'siakad-unugha-architecture', 'name' => 'SIAKAD UNUGHA Architecture — Academic Platform Study', 'category' => 'Sistem Enterprise & Kampus', 'status' => 'Architecture concept', 'problem' => 'Sistem akademik memerlukan pemisahan hak akses, konsistensi data, dan pengelolaan proses akademik.', 'solution' => 'Studi rancangan arsitektur dengan pemodelan role, service boundary, dan relasi data. Bukan klaim sistem kampus resmi atau production.', 'impact' => 'Lengkapi dengan diagram, skema, threat model, serta hasil pengujian sebelum dinyatakan tervalidasi.', 'stack' => ['Laravel', 'MySQL', 'Blade', 'Tailwind CSS'], 'repository' => null, 'demo' => null],
        ['slug' => 'gonet-jaya-analytics', 'name' => 'Gonet Jaya Abadi — Customer Telemetry & Data Analytics', 'category' => 'Web Application', 'status' => 'Research prototype', 'problem' => 'Kebutuhan merangkum indikator operasional dan analitik pelanggan dalam satu antarmuka.', 'solution' => 'Prototipe dashboard analitik. Data, integrasi, dan status penggunaan perlu diverifikasi dari implementasi sebenarnya.', 'impact' => 'Tambahkan definisi KPI, sumber data, dan hasil validasi pemilik data sebelum menampilkan angka dampak.', 'stack' => ['React', 'Vite', 'Tailwind CSS', 'Python'], 'repository' => null, 'demo' => null],
    ],
    'methodology' => [
        ['number' => '01', 'title' => 'Problem Formulation & Literature Mining', 'description' => 'Eksplorasi masalah, kajian literatur, identifikasi gap, dan penetapan pertanyaan penelitian.'],
        ['number' => '02', 'title' => 'System Architecture & Mathematical Modeling', 'description' => 'Pemodelan kebutuhan, arsitektur sistem, struktur data, asumsi, dan variabel evaluasi.'],
        ['number' => '03', 'title' => 'Prototyping & Controlled Experimentation', 'description' => 'Implementasi prototipe, desain skenario uji, pengumpulan data, dan pencatatan eksperimen.'],
        ['number' => '04', 'title' => 'Metric Evaluation & Research Dissemination', 'description' => 'Analisis hasil, pembahasan keterbatasan, dokumentasi, dan publikasi sesuai proses ilmiah.'],
    ],
    'credentials' => [
        'education' => ['degree' => 'S1 Sistem Informasi', 'institution' => 'Universitas Nahdlatul Ulama Al Ghazali (UNUGHA) Cilacap', 'status' => 'Mahasiswa — Semester 5 (perlu diperbarui)', 'gpa' => 'Isi IPK terverifikasi', 'focus' => 'Enterprise Systems, Data Analytics, Web Systems'],
        'certifications' => [
            ['name' => 'BNSP Junior Web Developer', 'status' => 'Placeholder — isi setelah sertifikasi diperoleh'],
            ['name' => 'Cyber Security Assessment', 'status' => 'Placeholder — isi nama lembaga dan nomor sertifikat'],
            ['name' => 'Data Science Course', 'status' => 'Placeholder — isi penyelenggara dan tanggal'],
        ],
    ],
];