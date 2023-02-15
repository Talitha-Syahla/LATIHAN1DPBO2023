#include <iostream>
#include <string>

using namespace std;

class DaftarMhs{
    
    private:
        string name;
        string nim;
        string jurusan;
        string fakultas;
        string gender;

    public:
    // Constructor
        DaftarMhs(){
            this->name = "";
            this->nim = "";
            this->jurusan = "";
            this->fakultas = "";
            this->gender = "";
        }

        DaftarMhs(string name, string nim, string jurusan, string fakultas, string gender){
            this->name = name;
            this->nim = nim;
            this->jurusan = jurusan;
            this->fakultas = fakultas;
            this->gender = gender;
        }

    // Setter dan Getter

        // Untuk Nama
        string get_name(){
            return this->name;
        }

        void set_name(string name){
            this->name = name;
        }

        // Untuk Nim
        string get_nim(){
            return this->nim;
        }

        void set_nim(string nim){
            this->nim = nim;
        }

        // Untuk Jurusan
        string get_jurusan(){
            return this->jurusan;
        }

        void set_jurusan(string jurusan){
            this->jurusan = jurusan;
        }

        // Untuk Fakultas
        string get_fakultas(){
            return this->fakultas;
        }

        void set_fakultas(string fakultas){
            this->fakultas = fakultas;
        }

        // Untuk Jenis Kelamin
        string get_gender(){
            return this->gender;
        }

        void set_gender(string gender){
            this->gender = gender;
        }

        // Fungsi untuk menambahkan data mahasiswa ke dalam list
        void menambahData(DaftarMhs mahasiswa, list<DaftarMhs>& llist){
            // Menambahkan objek mahasiswa ke dalam list menggunakan fungsi push_back
            llist.push_back(mahasiswa);
        }

        // Mengubah data mahasiswa berdasarkan NIM sebagai Primary Key nya
        bool mengubahData(string name, string nim, string jurusan, string fakultas, string gender, list<DaftarMhs>& llist){
            // Loop melalui setiap elemen dalam list
            for(list<DaftarMhs>::iterator it = llist.begin(); it != llist.end(); it++){
                // Cek apakah nim pada elemen saat ini sama dengan nim yang ingin diubah
                if(it->get_nim() == nim){
                    // Jika nim ditemukan, ubah data mahasiswa
                    it->set_name(name);
                    it->set_nim(nim);
                    it->set_jurusan(jurusan);
                    it->set_fakultas(fakultas);
                    it->set_gender(gender);

                    return true;
                }
            }
            return false; 
        }

        // Fungsi untuk menghapus data mahasiswa dengan NIM sebagai Primary Key nya 
        bool menghapusData(string nim, list<DaftarMhs>& llist){
            int i;
            // Melakukan iterasi pada setiap elemen di dalam list data mahasiswa
            for(list<DaftarMhs>::iterator it = llist.begin(); it != llist.end(); it++){
                if(it->get_nim() == nim){
                    // Jika ada data mahasiswa dengan nim yang sama, hapus data mahasiswa tersebut dari list
                    llist.erase(it);
                    return true;
                }     
            }
            return false;
        }

        // Destruktor
        ~DaftarMhs(){
        }
    
};