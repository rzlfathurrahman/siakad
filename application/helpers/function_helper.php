<?php 
function cekNilai($nis,$kode,$nilKhs)
{
	$nilai =  get_instance();
	$nilai->load->model('model_transkrip');

	$nilai->db->select('*');
	$nilai->db->from('transkrip_nilai');
	$nilai->db->where('nis',$nis);
	$nilai->db->where('kode_mapel',$kode);
	$query = $nilai->db->get()->row();

	if ($query!=null) {
		if ($nilKhs < $query->nilai) {
			$nilai->db->set('nilai',$nilKhs)
					  ->where('nis',$nis)
					  ->where('kode_mapel',$kode)
					  ->update('transkrip_nilai');

		}
	}else{
		$data = array(
			'nis' => $nis,
			'nilai'=> $nilKhs,
			'kode_mapel' => $kode
		);

		$nilai->model_transkrip->insert($data);
	}
}
