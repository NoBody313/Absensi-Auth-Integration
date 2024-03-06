<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Absensi Admedika</title>
    <link rel="shortcut icon" href="https://www.admedika.co.id/assets/frontend/images/admedika-logo.png"
        type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col justify-center items-center gap-2 m-8">
    <h1 class="font-medium text-2xl">Form Absensi Admedika</h1>
    <form action="{{ route('logicAbsensi') }}" method="POST" class="flex flex-col gap-2">
        @csrf
        <div class="flex flex-row gap-4 my-4 justify-center">
            <label for="nama">
                Nama Lengkap :
                <select name="nama" id="PilihNama"
                    class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                    <option value="pilih nama" disabled selected>Pilih Nama</option>
                    <option value="Muhammad Fatih Maulana">Muhammad Fatih Maulana</option>
                    <option value="Puja Jabbar Saja">Puja Jabbar Saja</option>
                </select>
            </label>
            <label for="nik">
                NIK:
                <select name="nik" id="NIK"
                    class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                    <option value="" disabled selected>Pilih NIK</option>
                    <option value="MG 1085">MG 1085</option>
                    <option value="MG 1087">MG 1087</option>
                </select>
            </label>
            <label for="bulan">
                Bulan:
                <select name="bulan" id="bulan"
                    class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                    <option value="" disabled selected>Pilih Bulan </option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </label>
            <label for="noRek">
                No Rekening :
                <select name="noRek" id="noRek"
                    class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                    <option value="Pilih Nomor Rekening" disabled selected>Pilih nomor rekening</option>
                    <option value="Jago : 504328760751">Jago : 504328760751</option>
                    <option value="Jago : 509530384028">Jago : 509530384028</option>
                    <option value="BSI : 7198948971">BSI : 7198948971</option>
                </select>
            </label>
        </div>

        {{-- Masuk 1 --}}
        <div class="flex flex-col justify-center items-start gap-2;">
            <h2 class="font-medium text-lg mt-2">Hari Ke - 1</h2>
            <div class="flex flex-row justify-center items-center gap-4">
                <label for="tanggalMasuk1">
                    Tanggal Masuk
                    <input type="date" name="tanggalMasuk1" id="tanggalMasuk1" value="{{ old('tanggalMasuk1') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize"
                        placeholder="Masukan tanggal masuk">
                </label>

                <label for="jamMasuk1">
                    Jam Masuk
                    <input type="time" name="jamMasuk1" id="jamMasuk1" value="{{ old('jamMasuk1') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamKeluar1">
                    Jam Keluar
                    <input type="time" name="jamKeluar1" id="jamKeluar1" value="{{ old('jamKeluar1') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="keterangan1">
                    Keterangan
                    <input type="text" name="keterangan1" id="keterangan1" value="{{ old('keterangan1') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>
            </div>
        </div>

        {{-- Masuk 2 --}}
        <div class="flex flex-col justify-center items-start gap-2;">
            <h2 class="font-medium text-lg mt-2">Hari Ke - 2</h2>
            <div class="flex flex-row justify-center items-center gap-4">
                <label for="tanggalMasuk1">
                    Tanggal Masuk
                    <input type="date" name="tanggalMasuk2" id="tanggalMasuk2" value="{{ old('tanggalMasuk2') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamMasuk2">
                    Jam Masuk
                    <input type="time" name="jamMasuk2" id="jamMasuk2" value="{{ old('jamMasuk2') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamKeluar2">
                    Jam Keluar
                    <input type="time" name="jamKeluar2" id="jamKeluar2" value="{{ old('jamKeluar2') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="keterangan2">
                    Keterangan
                    <input type="text" name="keterangan2" id="keterangan2" value="{{ old('keterangan2') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>
            </div>
        </div>

        {{-- Masuk 3 --}}
        <div class="flex flex-col justify-center items-start gap-2;">
            <h2 class="font-medium text-lg mt-2">Hari Ke - 3</h2>
            <div class="flex flex-row justify-center items-center gap-4">
                <label for="tanggalMasuk3">
                    Tanggal Masuk
                    <input type="date" name="tanggalMasuk3" id="tanggalMasuk3" value="{{ old('tanggalMasuk3') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamMasuk3">
                    Jam Masuk
                    <input type="time" name="jamMasuk3" id="jamMasuk3" value="{{ old('jamMasuk3') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamKeluar3">
                    Jam Keluar
                    <input type="time" name="jamKeluar3" id="jamKeluar3" value="{{ old('jamKeluar3') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="keterangan3">
                    Keterangan
                    <input type="text" name="keterangan3" id="keterangan3" value="{{ old('keterangan3') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>
            </div>
        </div>

        {{-- Masuk 4 --}}
        <div class="flex flex-col justify-center items-start gap-2;">
            <h2 class="font-medium text-lg mt-2">Hari Ke - 4</h2>
            <div class="flex flex-row justify-center items-center gap-4">
                <label for="tanggalMasuk4">
                    Tanggal Masuk
                    <input type="date" name="tanggalMasuk4" id="tanggalMasuk4"
                        value="{{ old('tanggalMasuk4') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamMasuk4">
                    Jam Masuk
                    <input type="time" name="jamMasuk4" id="jamMasuk4" value="{{ old('jamMasuk4') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamKeluar4">
                    Jam Keluar
                    <input type="time" name="jamKeluar4" id="jamKeluar4" value="{{ old('jamKeluar4') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="keterangan4">
                    Keterangan
                    <input type="text" name="keterangan4" id="keterangan4" value="{{ old('keterangan4') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>
            </div>
        </div>

        {{-- Masuk 5 --}}
        <div class="flex flex-col justify-center items-start gap-2;">
            <h2 class="font-medium text-lg mt-2">Hari Ke - 5</h2>
            <div class="flex flex-row justify-center items-center gap-4">
                <label for="tanggalMasuk5">
                    Tanggal Masuk
                    <input type="date" name="tanggalMasuk5" id="tanggalMasuk5"
                        value="{{ old('tanggalMasuk5') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamMasuk5">
                    Jam Masuk
                    <input type="time" name="jamMasuk5" id="jamMasuk5" value="{{ old('jamMasuk5') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="jamKeluar5">
                    Jam Keluar
                    <input type="time" name="jamKeluar5" id="jamKeluar5" value="{{ old('jamKeluar5') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>

                <label for="keterangan5">
                    Keterangan
                    <input type="text" name="keterangan5" id="keterangan5" value="{{ old('keterangan5') }}"
                        class="flex p-3 mt-2 border-2 w-64 border-blue-600 rounded-md capitalize">
                </label>
            </div>
        </div>

        <div class="flex flex-row justify-center items-center my-4 gap-8">
            <a href="/" class="p-3 px-6 rounded-md bg-green-600 text-white hover:bg-green-800 hover:cursor-pointer capitalize">Kembali ke beranda</a>
            <input type="submit" value="Submit"
                class="p-3 px-6 rounded-md bg-blue-600 text-white hover:bg-blue-800 hover:cursor-pointer">
        </div>
    </form>

    <script>
        var namaSelect = document.getElementById("PilihNama");
        var nikSelect = document.getElementById("NIK");
        var noRekSelect = document.getElementById("noRek");

        namaSelect.addEventListener("change", function() {
            var selectedNama = namaSelect.value;

            if (selectedNama === "Muhammad Fatih Maulana") {
                nikSelect.value = "MG 1087";
                noRekSelect.value = "BSI : 7198948971";
            } else if (selectedNama === "Puja Jabbar Saja") {
                nikSelect.value = "MG 1085";
                noRekSelect.value = "Jago : 504328760751"
            } else {
                nikSelect.value = "";
            }
        });
    </script>
</body>

</html>
