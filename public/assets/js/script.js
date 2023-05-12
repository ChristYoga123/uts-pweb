// Mendeteksi ukuran layar
function detectScreenSize() {
	const screenWidth = window.innerWidth;

	if (screenWidth < 768) {
		// Tindakan untuk ukuran mobile (lebar kurang dari 768px)
		// Tindakan A
		console.log("Ukuran mobile");
		// Lakukan tindakan A di sini
	} else {
		// Tindakan untuk ukuran PC (lebar 768px atau lebih)
		// Tindakan B
		console.log("Ukuran PC");
		// Lakukan tindakan B di sini
	}
}

// Memanggil fungsi untuk mendeteksi ukuran layar
detectScreenSize();
