<?php

namespace App\Jobs;

<<<<<<< HEAD
=======
use Spatie\Image\Image;
>>>>>>> 7f5b75e38dd1304befbe84e30af20d54b1d91325
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
<<<<<<< HEAD
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;
use Spatie\Image\Image;
=======
use Illuminate\Contracts\Queue\ShouldBeUnique;
>>>>>>> 7f5b75e38dd1304befbe84e30af20d54b1d91325

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;
    /**
     * Create a new job instance.
     * @return void
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     * 
     * @return void
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;

        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;

        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        $croppedImage = Image::load($srcPath)
                        ->crop(Manipulations::CROP_CENTER, $w, $h)
                        ->save($destPath);
    }
}
