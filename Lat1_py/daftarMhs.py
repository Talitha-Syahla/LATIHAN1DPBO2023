class daftarMhs:

    # Inisialisasi variabel untuk setiap objek dari kelas
    name = ""
    nim = ""
    jurusan = ""
    fakultas = ""
    gender = ""

    # Inisialisasi konstruktor untuk objek dari kelas
    def __init__(self, name = "", nim = "", jurusan = "", fakultas = "", gender = ""):
        self.name = name
        self.nim = nim
        self.jurusan = jurusan
        self.fakultas = fakultas
        self.gender = gender
    
    # Mendapatkan nama mahasiswa
    def get_name(self):
        return self.name

    # Mengubah nama mahasiswa
    def set_name(self, name):
        self.name = name

    # Mendapatkan NIM mahasiswa
    def get_nim(self):
        return self.nim

    # Mengubah NIM mahasiswa
    def set_nim(self, nim):
        self.nim = nim

    # Mendapatkan jurusan mahasiswa
    def get_jurusan(self):
        return self.jurusan

    # Mengubah jurusan mahasiswa
    def set_jurusan(self, jurusan):
        self.jurusan = jurusan

    # Mendapatkan fakultas mahasiswa
    def get_fakultas(self):
        return self.fakultas

    # Mengubah fakultas mahasiswa
    def set_fakultas(self, fakultas):
        self.fakultas = fakultas

    # Mendapatkan jenis kelamin mahasiswa
    def get_gender(self):
        return self.gender

    # Mengubah jenis kelamin mahasiswa
    def set_gender(self, gender):
        self.gender = gender

    # Menambah data mahasiswa pada list
    def menambahData(self, data, mhs_list):
        mhs_list.append(data)

    # Mengubah data mahasiswa pada list dengan NIM tertentu
    def mengubahData(self, nim, new_mhs, mhs_list):
        for i in range(len(mhs_list)):
            # Jika NIM ditemukan pada list
            if mhs_list[i].get_nim() == nim:
                # Mengubah data dengan menggunakan metode set pada setiap atribut
                mhs_list[i].set_name(new_mhs.get_name())
                mhs_list[i].set_nim(new_mhs.get_nim())
                mhs_list[i].set_jurusan(new_mhs.get_jurusan())
                mhs_list[i].set_fakultas(new_mhs.get_fakultas())
                mhs_list[i].set_gender(new_mhs.get_gender())
                return True    

        # Jika NIM tidak ditemukan pada list
        return False
    
    # Menghapus data mahasiswa pada list dengan NIM tertentu
    def menghapusData(self, nim, mhs_list):
        for i in range(len(mhs_list)):
            # Jika NIM tidak ditemukan pada list
            if mhs_list[i].nim == nim:
                mhs_list.pop(i)
                return True
        
        # Jika NIM tidak ditemukan pada list
        return False
    
    # Menampilkan semua data mahasiswa pada list
    def melihatData(self, mhs_list):
        print('----------------------------')
        print('     Daftar Mahasiswa')
        for data in mhs_list:
            print('----------------------------')
            print ('Nama            : ', data.get_name())
            print ('NIM             : ', data.get_nim())
            print ('Jurusan         : ', data.get_jurusan())
            print ('Fakultas        : ', data.get_fakultas())
            print ('Jenis Kelamin   : ', data.get_gender())
            print()
