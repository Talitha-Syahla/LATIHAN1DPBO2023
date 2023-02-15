public class DaftarMhs{

    // Pendeklarasian variabel private bertipe string
	private String name;
    private String nim;
    private String jurusan;
    private String fakultas;
	private String gender;

    // Constructor dan pemberian nilai awal variabel
	public DaftarMhs(){
		this.name = "";
        this.nim = "";
        this.jurusan = "";
        this.fakultas = "";
		this.gender = "";
	}

    // Constructor dengan parameter
	public DaftarMhs (String name, String nim, String jurusan, String fakultas, String gender){
		this.name = name;
        this.nim = nim;
        this.jurusan = jurusan;
        this.fakultas = fakultas;
		this.gender = gender;
	}

    // Untuk Nama
	public String getName(){
		return this.name;
	}

	public void setName (String name){
		this.name = name;
	}

    // Untuk Nim
	public String getNim(){
		return this.nim;
	}

	public void setNim (String nim){
		this.nim = nim;
	}

    // Untuk Jurusan
	public String getJurusan(){
		return this.jurusan;
	}

	public void setJurusan (String jurusan){
		this.jurusan = jurusan;
	}

    // Untuk Fakultas
	public String getFakultas(){
		return this.fakultas;
	}

	public void setFakultas (String fakultas){
		this.fakultas = fakultas;
	}

    // Untuk Jenis Kelamin
	public String getGender(){
		return this.gender;
	}

	public void setGender (String gender){
		this.gender = gender;
	}

    // Method toString() yang mengembalikan string
	public String toString(){
        // Mengembalikan string yang berisi nilai dari instance variables name, nim, jurusan, fakultas, dan gender
        return "Nama : " + name + ", Nim : " + nim + ", Jurusan : " + jurusan + ", Fakultas : " + fakultas + ", Jenis Kelamin : " + gender;
    }

}