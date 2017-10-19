<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model{

	protected $connection = 'mlearning';
    protected $table = 'tb_pengumuman';
    protected $primaryKey = 'id_pengumuman';
    public $timestamps = false;
	protected $fillable = [
		'courseid', 'title', 'description', 'tgl_pengumuman', 'teacher'
	];
}