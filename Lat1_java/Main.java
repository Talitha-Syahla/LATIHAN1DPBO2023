import java.util.Scanner;
import java.util.ArrayList;

public class Main{

    // Menggunakan List
    private static ArrayList<DaftarMhs> list = new ArrayList<>(); 
	private static Scanner sc = new Scanner(System.in);
	
    public static void main(String[] args){

        // membuat kondisi untuk menampilkan daftar menu untuk user
		while(true){
            System.out.println("\n------------------------");
            System.out.println("Daftar Menu :");
            System.out.println("------------------------");
            System.out.println("1) Menambah Data Mahasiswa");
            System.out.println("2) Mengubah Data Mahasiswa");
            System.out.println("3) Menghapus Data Mahasiswa");
            System.out.println("4) Melihat Data Mahasiswa");
            System.out.println("5) Out / Keluar");
            System.out.println("------------------------");

            // Meminta masukkan user berupa angka untuk pemilihan daftar menu yang akan dijalankan
            System.out.println("Pilih (nomor) : ");
            int n = 0;
            n = sc.nextInt();
            sc.nextLine();
            System.out.println("------------------------");

            // Kondisi yang akan memproses masukkan user sebelumnya untuk pemilihan fungsi yang akan dijalankan
            switch(n){
                // Jika masukkan user berupa 1 maka akan menjalankan fungsi untuk menambahkan data mahasiswa
                case 1:
                    menambahData();
                    break;
                // Jika masukkan user berupa 2 maka akan menjalankan fungsi untuk mengubah data mahasiswa berdasarkan NIM yang dijadikan primary key
                case 2:
                    mengubahData();
                    break;
                // Jika masukkan user berupa 3 maka akan menjalankan fungsi untuk menghapus data mahasiswa berdasarkan NIM yang dijadikan primary key
                case 3:
                    menghapusData();
                    break;
                // Jika masukkan user berupa 4 maka akan menjalankan fungsi untuk melihat data mahasiswa
                case 4:
                    melihatData();
                    break;
                // Jika masukkan user berupa 5 maka akan menjalankan fungsi untuk out dari data mahasiswa
                case 5:
                    System.exit(0);
                    break;
                
            }
        }
    }

    // Method untuk menambahkan data mahasiswa baru
    private static void menambahData(){
        // Meminta input nama dari user
        System.out.println("Nama :");
        String name = sc.nextLine();

        // Meminta input NIM dari user
        System.out.println("NIM :");
        String nim = sc.nextLine();

        // Meminta input jurusan dari user
        System.out.println("Jurusan :");
        String jurusan = sc.nextLine();

        // Meminta input fakultas dari user
        System.out.println("Jurusan :");
        String fakultas = sc.nextLine();

        // Meminta input jenis kelamin dari user
        System.out.println("Jenis Kelamin (P/L) :");
        String gender = sc.nextLine();

        // Membuat objek DaftarMhs dengan data yang diinput user
        DaftarMhs data = new DaftarMhs(name, nim, jurusan, fakultas, gender);

        // Menambahkan objek DaftarMhs ke dalam list
        list.add(data);

        // Menampilkan pesan konfirmasi bahwa data mahasiswa baru berhasil ditambahkan
        System.out.println("Data Mahasiswa Baru Berhasil Ditambahkan");
    }

    // Method untuk mencari data mahasiswa berdasarkan NIM
    private static DaftarMhs finddata(String nim){
    // Looping untuk setiap data pada list
        for (DaftarMhs data : list) {

        // Memeriksa apakah NIM data saat ini sama dengan NIM yang dicari
            if (data.getNim().equals(nim)) {

                // Jika sama, maka return data tersebut
                return data;
            }
        }
    // Jika tidak ditemukan data dengan NIM yang dicari, return null
    return null;
    }

    // Method untuk mengubah data mahasiswa
    // pada pengubahan data mahasiswa ini menggunakan NIM sebagai primary key
    private static void mengubahData(){
        System.out.println("------------------------");
        System.out.print("NIM Mahasiswa Yang Akan Diubah (nomor) -> ");
        String nim = sc.nextLine();

    // Mencari data mahasiswa berdasarkan NIM
        DaftarMhs data = finddata(nim);
        
        // Jika tidak ditemukan data dengan NIM yang dicari, tampilkan pesan error dan return dari method
        if(data == null){
            System.out.println("Mahasiswa Dengan NIM " + nim + " Tidak Dapat Ditemukan");
            return;
        }

        // Menampilkan data mahasiswa saat ini
        System.out.println("\nData Mahasiswa Yang Akan Diubah:");
        System.out.println("1. Nama : " + data.getName());
        System.out.println("2. NIM : " + data.getNim());
        System.out.println("3. Jurusan : " + data.getJurusan());
        System.out.println("4. Fakultas : " + data.getFakultas());
        System.out.println("5. Jenis Kelamin : " + data.getGender());

        // Meminta input untuk data mana yang akan diubah
        System.out.print("Pilih Data Yang Akan Diubah: ");
        int n = sc.nextInt();
        sc.nextLine();

        // Switch case untuk memilih data mana yang akan diubah
        switch(n){
            case 1:
                System.out.print("Input Nama Baru: ");
                String newName = sc.nextLine();
                data.setName(newName);
                break;
            case 2:
                System.out.print("Input NIM Baru: ");
                String newNIM = sc.nextLine();
                data.setNim(newNIM);
                break;
            case 3:
                System.out.print("Input Jurusan Baru: ");
                String newJurusan = sc.nextLine();
                data.setJurusan(newJurusan);
                break;
            case 4:
                System.out.print("Input Fakultas Baru: ");
                String newFakultas = sc.nextLine();
                data.setFakultas(newFakultas);
                break;
            case 5:
                System.out.print("Input Jenis Kelamin Baru: ");
                String newGneder = sc.nextLine();
                data.setGender(newGneder);
                break;
        }

    // Menampilkan pesan konfirmasi bahwa data mahasiswa berhasil diubah
        System.out.println("Data Mahasiswa Berhasil Diubah");
    }

    // Method untuk menghapus data mahasiswa
    private static void menghapusData(){
        // Meminta input NIM mahasiswa yang akan dihapus
        System.out.print("NIM Mahasiswa Yang Akan Dihapus: ");
        String nim = sc.nextLine();

        // Mencari data mahasiswa berdasarkan NIM
        DaftarMhs data = finddata(nim);
        // Jika tidak ditemukan data dengan NIM yang dicari, tampilkan pesan error dan return dari method
        if(data == null){
            System.out.println("Mahasiswa Dengan NIM " + nim + " Tidak Dapat Ditemukan");
            return;
        }

        // Jika data dengan NIM yang dicari ditemukan, hapus data tersebut dari list
        list.remove(data);

        // Menampilkan pesan konfirmasi bahwa mahasiswa berhasil dihapus
        System.out.println("Mahasiswa Dengan NIM " + nim + " Berhasil Dihapus");
        
    }

    // Method untuk melihat data mahasiswa
    private static void melihatData(){
        // Jika list kosong, tampilkan pesan error dan return dari method
            if(list.isEmpty()){
                System.out.println("Belum Ada Data Mahasiswa");
                return;
            }

            // Looping untuk setiap data pada list
            for (DaftarMhs data : list){
                // Menampilkan data mahasiswa saat ini
                System.out.println(data);
            }
    }	
}