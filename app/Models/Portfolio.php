<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Portfolio extends Model{
        use HasFactory;

        protected $table = 'portfolio';

        protected $fillable = ['name', 'portfolio_category_id', 'name', 'image', 'description', 'status' ,'created_by' ,'updated_by' ,'created_at' ,'updated_at'];
    }
