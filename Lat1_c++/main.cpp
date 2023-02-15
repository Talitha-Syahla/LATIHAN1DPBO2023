#include <bits/stdc++.h>
#include "DaftarMhs.cpp"

using namespace std;

int main(){

    // Deklarasi variabel
    string name, nim, jurusan, fakultas, gender; 

    list<DaftarMhs> llist;
    DaftarMhs data;

    // deklarasi variabel untuk pilihan menu
    int n = 0;

// loop untuk menampilkan menu dan meminta input dari user
    while(true){
        // menampilkan menu
        cout << '\n' << "Daftar Menu : " << '\n';
        cout << "------------------------" << '\n';
        cout << "1) Menambah Data Mahasiswa" << '\n';
        cout << "2) Mengubah Data Mahasiswa" << '\n';
        cout << "3) Menghapus Data Mahasiswa" << '\n';
        cout << "4) Melihat Data Mahasiswa" << '\n';
        cout << "5) Out / Keluar" << '\n';
        cout << "------------------------" << '\n';

    // meminta input pilihan dari user
        cout << '\n' << "Pilih (nomor) : " << '\n';
        
        cin >> n;
        // Jika input menu yang dipilih adalah nomor 1
        if(n == 1){
            string name, nim, jurusan, fakultas, gender;
            
            cout << "Nama : ";
            cin >> name;
            cout << "NIM : ";
            cin >> nim;
            cout << "Jurusan : ";
            cin >> jurusan;
            cout << "Fakultas : ";
            cin >> fakultas;
            cout << "Jenis Kelamin (P/L) : ";
            cin >> gender;

        // Buat objek DaftarMhs sementara untuk menampung data mahasiswa yang baru
            DaftarMhs temp(name, nim, jurusan, fakultas, gender);
        // Panggil fungsi menambahData dari objek data untuk menambahkan data mahasiswa baru ke dalam llist
            data.menambahData(temp, llist);
            cout << "Data Mahasiswa Baru Berhasil Ditambahkan" << endl;
        }

        // Jika input menu yang dipilih adalah nomor 2
        else if(n == 2){
            string name, nim, jurusan, fakultas, gender;

            cout << "NIM Mahasiswa Yang Akan Diubah (nomor) -> ";
            cin >> nim;

            cout << "Input Nama Baru : ";
            cin >> name;
            cout << "Input Jurusan Baru : ";
            cin >> jurusan; 
            cout << "Input Fakultas Baru : ";
            cin >> fakultas;
            cout << "Input Jenis Kelamin Baru : ";
            cin >> gender;

        // Jika fungsi mengubahData mengembalikan nilai true, berarti data berhasil diubah
            if(data.mengubahData(name, nim, jurusan, fakultas, gender, llist)){
                cout << "Data Mahasiswa Berhasil Diubah" << endl;
            }
            else{
                cout << "Mahasiswa Dengan NIM " << nim << " Tidak Dapat Ditemukan." << endl;
            }
        }

        // Jika input menu yang dipilih adalah nomor 3
        else if(n == 3){
            string nim;

            cout << "NIM Mahasiswa Yang Akan Diubah (nomor) -> ";
            cin >> nim;

        // Memanggil fungsi menghapusData dari objek data dengan parameter nim dan llist
            if(data.menghapusData(nim, llist)){
                cout << "Mahasiswa berhasil dihapus." << endl;
            }
            else {
                cout << "Mahasiswa dengan NIM " << nim << " tidak ditemukan." << endl;
            }
        }

        // Jika input menu yang dipilih adalah nomor 4
        else if(n == 4){
            cout << "Daftar Mahasiswa : " << endl;

            int i = 0; // inisialisasi
            for(list<DaftarMhs>::iterator it = llist.begin(); it != llist.end(); it++){
                cout << "Nama : " << it->get_name() << '\n' << "NIM : " << it->get_nim() << '\n' << "Jurusan : " << it->get_jurusan() << '\n' << "Fakultas : " << it->get_fakultas() << '\n' << "Jenis Kelamin : " << it->get_gender() << '\n';
                i++;
            }
        }

        // Jika input menu yang dipilih adalah nomor 5
        else if(n == 5){
            cout << "Terima kasih!" << endl;
            return 0;
        } 

        // Jika input menu yang dipilih tidak ada dipilihan
        else{
            cout << "Pilihan Tidak Terdaftar" << endl;
        }

        }
    
    return 0;
}