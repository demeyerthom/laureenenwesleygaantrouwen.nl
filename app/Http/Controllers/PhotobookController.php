<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Finder\SplFileInfo;

class PhotobookController extends Controller
{
    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * PhotobookController constructor.
     *
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * @return View
     */
    public function get(): View
    {
        $images = $this->filesystem->allFiles(storage_path('app/public/photobook'));
        $directories = $this->filesystem->directories(storage_path('app/public/photobook'));

        $imageUrls = array_map(function (SplFileInfo $image) {
            return str_replace(storage_path('app/public'), 'storage/', $image->getPath() . '/' . $image->getFilename());
        }, $images);

        return view('photobook', ['images' => $imageUrls, 'directories' => $directories]);
    }
}
