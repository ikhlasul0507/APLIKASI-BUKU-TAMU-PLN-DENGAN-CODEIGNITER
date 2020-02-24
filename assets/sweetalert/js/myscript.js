const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	swall({
		title : 'Data Pengunjung',
		text :'Berhasil'+ flashdata,
		type :'success'
	});
}

const flashGagal = $('.flash-gagal').data('flashgagal');

if (flashGagal) {
	swall({
		title : 'Data Kontak',
		text :'Gagal'+ flashdata,
		type :'warning'
	});
}
