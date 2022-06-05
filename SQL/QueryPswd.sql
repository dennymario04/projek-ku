SELECT calon_siswa.email,calon_siswa.nama,tbl_user.pswd 
FROM tbl_user 
INNER JOIN calon_siswa ON calon_siswa.id_pendaftar=tbl_user.id_pendaftar;