
<?php

class Financeiro extends BaseModel {
    protected $table = 'financeiro';
    protected $fillable = array('id', 'valor', 'data');
        
    
    public static function getRules(){
        return [

        ];
    }
}
