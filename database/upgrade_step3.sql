-- Step 3: Upgrade tabel mahasiswa agar dapat menyimpan referensi media
USE web_programming_1;

ALTER TABLE mahasiswa
ADD foto VARCHAR(255) NULL,
ADD audio VARCHAR(255) NULL,
ADD dokumen VARCHAR(255) NULL;

