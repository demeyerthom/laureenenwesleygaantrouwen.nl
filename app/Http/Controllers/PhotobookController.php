<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
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
     * @param Request $request
     *
     * @return View
     */
    public function get(Request $request): View
    {
        $isRoot = $request->has('directory');

        $directory = $isRoot ? $request->get('directory') : config('site.photobook.storage_dir');

        $directories = $this->filesystem->directories($directory);

        $images = $this->filesystem->files($directory);
        shuffle($images);

        $imageUrls = array_map(function (SplFileInfo $image) {
            return str_replace(storage_path('app/public'), 'storage/', $image->getPath() . '/' . $image->getFilename());
        }, $images);

        return view('photobook', ['images' => $imageUrls, 'directories' => $directories]);
    }
}
