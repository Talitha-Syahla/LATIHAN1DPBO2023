from daftarMhs import daftarMhs # Mengimport class daftarMhs dari modul daftarMhs

menu = daftarMhs()  # membuat objek dari class daftarMhs dengan nama menu
mhs_list = []  # membuat list kosong untuk menyimpan data mahasiswa

# looping untuk menampilkan daftar menu untuk user
while True:
    print('----------------------------')
    print('       Daftar Menu ')
    print('----------------------------')
    print('1) Menambah Data Mahasiswa')
    print('2) Mengubah Data Mahasiswa')
    print('3) Menghapus Data Mahasiswa')
    print('4) Melihat Data Mahasiswa')
    print('5) Out / Keluar')
    print('----------------------------')

    n = input('\nPilih (nomor) : ')  # Meminta input dari pengguna untuk memilih nomor menu

    if n == '1':  # jika pengguna memilih nomor 1
        name = input('Nama : ')  # meminta input dari pengguna untuk nama mahasiswa
        nim = input('NIM : ')  # meminta input dari pengguna untuk NIM mahasiswa
        jurusan = input('Jurusan : ')  # meminta input dari pengguna untuk jurusan mahasiswa
        fakultas = input('Fakultas : ')  # meminta input dari pengguna untuk fakultas mahasiswa
        gender = input('Jenis Kelamin (P/L) : ')  # meminta input dari pengguna untuk jenis kelamin mahasiswa

        data = daftarMhs(name, nim, jurusan, fakultas, gender)  # membuat objek daftarMhs baru dengan informasi yang dimasukkan pengguna
        menu.menambahData(data, mhs_list)  # menambahkan objek daftarMhs baru ke dalam list mhs_list
        print('\nData Mahasiswa Baru Berhasil Ditambahkan\n')  # mencetak pesan konfirmasi

    elif n == '2':  # jika pengguna memilih nomor 2
        nim = input('NIM Mahasiswa Yang Akan Diubah (nomor) -> ')  # meminta input dari pengguna untuk NIM mahasiswa yang akan diubah
        name = input('Input Nama Baru : ')  # meminta input dari pengguna untuk nama baru mahasiswa
        jurusan = input('Input Jurusan Baru : ')  # meminta input dari pengguna untuk jurusan baru mahasiswa
        fakultas = input('Input Fakultas Baru : ')  # meminta input dari pengguna untuk fakultas baru mahasiswa
        gender = input('Input Jenis Kelamin Baru (P/L) : ')  # meminta input dari pengguna untuk jenis kelamin baru mahasiswa

        new_mhs = daftarMhs(name, nim, jurusan, fakultas, gender) # membuat objek daftarMhs baru dengan informasi yang dimasukkan pengguna
        if menu.mengubahData(nim, new_mhs, mhs_list): # memanggil method mengubahData dari objek menu untuk mengubah data mahasiswa yang telah dimasukkan pengguna
            print('\nData Mahasiswa Berhasil Diubah\n')
        else:
            print('\nData Mahasiswa Dengan NIM Tersebut Tidak Ditemukan\n')

    elif n == '3': # jika pengguna memilih nomor 3
        nim = input('NIM Mahasiswa Yang Akan Dihapus (nomor) -> ') # meminta input dari pengguna untuk NIM mahasiswa yang akan diubah
        if menu.menghapusData(nim, mhs_list): # memanggil method menghapusData dari objek menu untuk menghapus data mahasiswa yang telah dimasukkan pengguna
            print('\nData Mahasiswa Berhasil Dihapus\n')
        else:
            print('\nData Mahasiswa Dengan NIM Tersebut Tidak Ditemukan\n')

    elif n == '4': # jika pengguna memilih nomor 4
        menu.melihatData(mhs_list) # memanggil method melihatData dari objek menu untuk melihat data mahasiswa yang telah dimasukkan pengguna

    elif n == '5': # jika pengguna memilih nomor 5
        break # keluar dari menu

    else: # jika pengguna tidak memilih nomor berdasarkan menu yang disediakan
        print('\nPilihan Tidak Tersedia')
