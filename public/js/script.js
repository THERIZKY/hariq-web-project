// Mendapatkan referensi ke elemen tombol
var tombolCopy = document.getElementById("copyLink");

// Menambahkan event listener saat tombol ditekan
tombolCopy.addEventListener("click", function () {
	copyText();
});

// Buat Copy Text
copyText = () => {
	var teksToCopy = "play.hariq.eu.org";

	// Membuat elemen textarea sementara
	var textarea = document.createElement("textarea");
	textarea.value = teksToCopy;

	// Menambahkan elemen textarea ke dalam dokumen
	document.body.appendChild(textarea);

	// Memilih teks di dalam elemen textarea
	textarea.select();

	// Menyalin teks ke clipboard
	document.execCommand("copy");

	// Menghapus elemen textarea sementara
	document.body.removeChild(textarea);

	// Menampilkan pesan berhasil
	Swal.fire({
		icon: "success",
		title: "Coppied IP to clipboard",
		text: "play.hariq.eu.org",
		showClass: {
			popup: "animate__animated animate__bounceInUp",
		},
		hideClass: {
			popup: "animate__animated animate__bounceOut animate__faster",
		},
	});
	// Swal.fire("", "play.hariq.eu.org", "success");
};
