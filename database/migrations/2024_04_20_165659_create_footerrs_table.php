<?php

use App\Models\footerr;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('footerrs', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        footerr::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'MyPortofolio',
            'type' => 'text',
        ]);
        footerr::create([
            'key' => 'location',
            'label' => 'Alamat',
            'value' => 'Malang, Indonesia',
            'type' => 'text',
        ]);
        footerr::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'www.youtube.com/@sekarayu1071',
            'type' => 'text',
        ]);
        footerr::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/zaloesan?igsh=bWJibGhmb2R0aDB5',
            'type' => 'text',
        ]);
        footerr::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/codewzaloe',
            'type' => 'text',
        ]);
        footerr::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Sekar Ayu Dynamic Portofolio',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footerrs');
    }
};
