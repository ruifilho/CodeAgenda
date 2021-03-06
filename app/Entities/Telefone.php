<?php
/**
 * Created by PhpStorm.
 * User: rui
 * Date: 25/09/16
 * Time: 02:11
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $table = 'telefones';
    protected $fillable = [
      'descricao',
      'codpais',
      'ddd',
      'prefixo',
      'sufixo'
    ];

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    public function getNumeroAttribute(){
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}