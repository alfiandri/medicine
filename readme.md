Role Access :
1 -> Administrator (Admin)
2 -> Petugas Pendaftaran (Admisi)
3 -> Dokter / Perawat Layanan Rawat Jalan (Inpatient)
4 -> Dokter / Perawat Layanan Rawat Darurat (Emergency (UGD))
5 -> Dokter / Perawat Layanan Rawat Inao (Outpatient)

Status Pasien RJ :
0 -> Registrasi Belum Mendapat No.Antrian (warning)
1 -> No.Antrian sudah di miliki tinggal dilakukan pemanggilan di poli (danger)
2 -> Batal Layanan (dark)
3 -> Pasien dilayani (success)
4 -> Pasien Dipulangkan (secondary)
5 -> Rujukan (info)
6 -> Checkin M-JKN (primary)

Status Pasien Rawat Darurat :
0 -> Registrasi(warning)
1 -> Rawat Inap (danger)
2 -> Intensive Care (dark)
3 -> Pulang (success)
4 -> Exit (secondary)
5 -> Batal (info)

Status Pasien Rawat Inap :
0 -> Dilayani(success)
1 -> Naik Kelas (danger)
2 -> Batal (dark)
3 -> Titip Kamar (warning)
4 -> Pulang (info)

Status Bed (RI) :
0 -> Tersedia (success)
1 -> Sedang Digunakan (primary)
2 -> Rusak (danger)
3 -> Proses Pasien Pulang (warning)

Visitor :
1 -> Rawat Jalan
2 -> Rawat Darurat
3 -> Rawat Inap
4 -> OK
5 -> MCU
