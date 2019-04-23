select * from list_produk;

select * from list_pegawai;

select * from list_jasa;

select * from list_pelanggan;

select p.nama,p.id_pelanggan,txp.id_produk,lp.kode,txp.jumlah,lp.harga*txp.jumlah as total,txp.tanggal from tx_produk txp inner join list_produk lp on txp.id_produk=lp.id_produk inner join list_pelanggan p on txp.id_pelanggan=p.id_pelanggan where p.id_pelanggan=304;



